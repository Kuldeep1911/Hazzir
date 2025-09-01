<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    // CONFIRMATION ID PREFIX\


    /**
     * Show Register Page
     */
    public function loadRegister()
    {
        if (Auth::check()) {
            return redirect()->route($this->redirectDashboard());
        }
        return view('register');
    }

    /**
     * Handle Registration
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->role     = $request->role;
        $user->confirmation_id = $this->generateConfirmationId();
        $user->password = bcrypt($request->password);
        $user->save();


        //send email
        Mail::to($user->email)->send(new RegistrationMail($user));

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    // $confirmationId = 'HZ' . rand(1000, 9999);

    public function generateConfirmationId()
    {
        return 'HZ' . rand(1000, 9999);
    }

    /**
     * Show Login Page
     */
    public function loadLogin()
    {
        if (Auth::check()) {
            return redirect()->route($this->redirectDashboard());
        }
        return view('login');
    }

    /**
     * Handle Login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 0 && (!$user->phone || !$user->address)) {
                return redirect()->route('user.profile')->with('warning', 'Please complete your profile first.');
            }

            return redirect()->route($this->redirectDashboard());
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Handle Profile Update
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'phone'          => 'nullable|string|max:15',
            'address'        => 'nullable|string|max:500',
            'specialization' => 'nullable|string|max:255',
            'age'            => 'nullable|integer|min:18|max:70',
            'gender'         => 'nullable|string|in:male,female,other',
            'language'       => 'nullable|string|max:255',
            'experience'     => 'nullable|integer|min:0|max:50',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only([
            'phone',
            'address',
            'specialization',
            'age',
            'gender',
            'language',
            'experience'
        ]);

        if ($request->hasFile('image')) {
            if ($user->image && Storage::disk('public')->exists($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
            $data['image'] = $request->file('image')->store('maids', 'public');
        }

        $user->update($data);

        return redirect()->route('user.dashboard')->with('success', 'Profile updated successfully.');
    }

    /**
     * Redirect based on Role
     */
    public function redirectDashboard()
    {
        $role = Auth::user()->role;

        if ($role == 0) {
            return 'user.dashboard';
        } elseif ($role == 1) {
            return 'admin.dashboard';
        } elseif ($role == 2) {
            return 'client.dashboard';
        }

        return 'home';
    }

    /**
     * Logout User
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have logged out.');
    }

    /**
     * Redirect to Google for authentication
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google callback
     */
    public function handleGoogleCallback()
    {
        try {
            // Get user info from Google
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Check if user already exists
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Update missing fields if any
                $updated = false;

                if (!$user->google_id) {
                    $user->google_id = $googleUser->getId();
                    $updated = true;
                }

                if (!$user->confirmation_id) {
                    $user->confirmation_id = $this->generateConfirmationId();
                    $updated = true;
                }

                if (!$user->profile_image) {
                    $user->profile_image = $googleUser->getAvatar();
                    $updated = true;
                }

                if ($updated) {
                    $user->save(); // Save updated fields
                }
            } else {
                // New user via Google
                $user = User::create([
                    'name'            => $googleUser->getName(),
                    'email'           => $googleUser->getEmail(),
                    'google_id'       => $googleUser->getId(),
                    'confirmation_id' => $this->generateConfirmationId(),
                    'profile_image'   => $googleUser->getAvatar(),
                    'password'        => bcrypt(Str::random(16)), // optional for Google login
                    'role'            => 0,
                ]);
dd($user);
                // Optional: send registration email
                Mail::to($user->email)->send(new RegistrationMail($user));
            }

            // Login the user after save/update
            Auth::login($user, true);

            return redirect()->route($this->redirectDashboard());
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'google' => 'Google login failed. Please try again. Error: ' . $e->getMessage()
            ]);
        }
    }
}
