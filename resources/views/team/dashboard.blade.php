@extends('team.layouts.app')

@section('title', 'Team Dashboard')
@section('page-title', 'Teams')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Current User Card -->
    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-1 p-6 border border-gray-100 flex flex-col items-center text-center">
        <!-- User Avatar -->
        <img class="w-24 h-24 rounded-full border-4 border-white shadow-lg mb-4"
             src="{{ $user->avatar ?? 'https://i.pravatar.cc/150?img=12' }}"
             alt="{{ $user->name }}">


        <!-- User Info -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-1">Welcome, {{ $user->name }}</h2>
        <span class="px-4 py-1 text-sm font-medium rounded-full bg-blue-100 text-blue-700 mb-4">Team Member</span>

        <div class="text-gray-600 text-sm space-y-2">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }}</p>
        </div>
    </div>

</div>

<style>
/* Smooth hover effect for card */
.grid > div:hover {
    transition: all 0.3s ease-in-out;
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.15);
}

/* User avatar hover effect */
.grid img {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}
.grid img:hover {
    transform: scale(1.1);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}
</style>
@endsection
