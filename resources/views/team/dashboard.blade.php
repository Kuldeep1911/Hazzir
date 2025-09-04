@extends('team.layouts.app')

@section('title', 'Team Dashboard')
@section('page-title', 'Teams')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

  <!-- Example Team Card -->
  <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
    <div class="flex items-center justify-between mb-3">
      <h2 class="text-lg font-bold text-gray-800">Development Team</h2>
      <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Active</span>
    </div>
    <p class="text-gray-600 text-sm mb-4">Responsible for product development and maintenance.</p>
    <div class="flex -space-x-3">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1" alt="member">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2" alt="member">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3" alt="member">
      <span class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 text-gray-600 text-sm">+3</span>
    </div>
  </div>

  <!-- Example Team Card -->
  <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
    <div class="flex items-center justify-between mb-3">
      <h2 class="text-lg font-bold text-gray-800">Marketing Team</h2>
      <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">On Hold</span>
    </div>
    <p class="text-gray-600 text-sm mb-4">Handles campaigns, social media, and branding.</p>
    <div class="flex -space-x-3">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=4" alt="member">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=5" alt="member">
    </div>
  </div>

  <!-- Example Team Card -->
  <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
    <div class="flex items-center justify-between mb-3">
      <h2 class="text-lg font-bold text-gray-800">Support Team</h2>
      <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded">Inactive</span>
    </div>
    <p class="text-gray-600 text-sm mb-4">Manages customer issues and technical support.</p>
    <div class="flex -space-x-3">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=6" alt="member">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=7" alt="member">
      <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=8" alt="member">
    </div>
  </div>

</div>
@endsection
