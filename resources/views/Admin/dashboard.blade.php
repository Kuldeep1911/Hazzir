@extends('Admin.layouts.app')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-8">

  {{-- Dashboard Stats --}}
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6 rounded-2xl shadow-lg flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold">Users</h2>
        <p class="text-2xl font-bold mt-2">{{ $totalUsers }}</p>
      </div>
      <div class="bg-white/20 p-3 rounded-full">
        <i class="fas fa-users text-2xl"></i>
      </div>
    </div>

    <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-6 rounded-2xl shadow-lg flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold">Orders</h2>
        <p class="text-2xl font-bold mt-2">560</p>
      </div>
      <div class="bg-white/20 p-3 rounded-full">
        <i class="fas fa-shopping-cart text-2xl"></i>
      </div>
    </div>

    <div class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white p-6 rounded-2xl shadow-lg flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold">Revenue</h2>
        <p class="text-2xl font-bold mt-2">$42,300</p>
      </div>
      <div class="bg-white/20 p-3 rounded-full">
        <i class="fas fa-dollar-sign text-2xl"></i>
      </div>
    </div>
  </div>

  {{-- Users Table --}}
  <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="p-4 border-b">
      <h2 class="text-xl font-semibold text-gray-700">User List</h2>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
          <tr>
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Name</th>
            <th class="px-6 py-3">Email</th>
            <th class="px-6 py-3">Role</th>
            <th class="px-6 py-3">Joined At</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          @foreach($users as $user)
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4">{{ $user->id }}</td>
            <td class="px-6 py-4 font-medium">{{ $user->name }}</td>
            <td class="px-6 py-4 text-blue-600">{{ $user->email }}</td>
            <td class="px-6 py-4">
              @if($user->role == 0)
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">User</span>
              @elseif($user->role == 2)
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Team</span>
              @else
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Admin</span>
              @endif
            </td>
            <td class="px-6 py-4 text-gray-600">
              {{ $user->created_at }}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection
