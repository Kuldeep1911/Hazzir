<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    //Admin controller methods can be added here

    public function index()
    {
        $users = DB::table('users')->paginate(5);

        $totalUsers = DB::table('users')->count();

        return view('Admin.dashboard',compact('totalUsers','users'));
    }

    public function showUsers()
    {
        // Logic to fetch and display users page

        // paginate(10);
               $users = User::where('role', '!=', 1) // exclude admins
             ->latest()
             ->paginate(10);


        return view('admin.users',compact('users'));
    }
}
