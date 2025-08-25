@extends('layouts.app')

@section('content')
<div class="bg-white p-5 rounded-lg shadow">
  <p class="mb-3">We sent an OTP to <strong>{{ $booking->phone }}</strong>. Enter it below to verify your booking.</p>

  <form action="{{ route('bookings.verify', $booking->id) }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label class="block text-sm font-medium">Enter 4-digit OTP</label>
      <input name="otp" maxlength="4" class="mt-1 w-full border rounded px-3 py-2" required>
    </div>

    <button class="w-full bg-success text-white py-2 p-4 rounded hover:bg-green-700">Verify OTP</button>
  </form>
</div>
@endsection
