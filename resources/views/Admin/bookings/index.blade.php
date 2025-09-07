@extends('Admin.layouts.app')

@section('title', 'Users Management')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg">

    {{-- 🔍 Filter/Search --}}
{{-- 🔍 Single Search Field --}}
<form method="GET" action="{{ route('admin.showbooking') }}"
      class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">

    <input type="text" name="search" value="{{ request('search') }}"
        placeholder="Search by Name, Email, or Phone"
        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 col-span-3">

    <input type="date" name="date" value="{{ request('date') }}"
        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

    <div class="flex gap-2 md:col-span-4">
        <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md transition">
            Apply Filter
        </button>
        <a href="{{ route('admin.showbooking') }}"
            class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg shadow-md transition">
            Reset
        </a>
    </div>
</form>


    {{-- Header --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">📋 Bookings</h2>
        <a href="#"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow-md transition duration-300">
            + Add Booking
        </a>
    </div>

    @forelse ($bookings as $booking)
        <div class="border border-gray-200 rounded-xl p-5 mb-5 shadow-sm hover:shadow-md transition">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <h3 class="text-lg font-semibold text-gray-800">
                    Booking #{{ $booking->id }}
                    <span class="text-gray-500 text-sm">
                        ({{ $booking->service->name ?? 'No Service Found' }})
                    </span>
                </h3>

                {{-- Status Badge --}}
                @php
                    $statuses = [
                        'pending' => 'bg-yellow-100 text-yellow-700',
                        'confirmed' => 'bg-blue-100 text-blue-700',
                        'completed' => 'bg-green-100 text-green-700',
                        'cancelled' => 'bg-red-100 text-red-700',
                    ];
                @endphp
                <span class="{{ $statuses[$booking->status] ?? 'bg-gray-100 text-gray-600' }}
                             px-3 py-1 rounded-full text-sm font-medium capitalize">
                    {{ $booking->status ?? 'unknown' }}
                </span>
            </div>

            {{-- Booking Details --}}
            <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-sm">
                <p><strong>User:</strong> {{ $booking->user->name ?? 'No User Found' }}</p>
                <p><strong>Phone:</strong> {{ $booking->phone ?? 'N/A' }}</p>
                <p><strong>Email:</strong> {{ $booking->user->email ?? 'N/A' }}</p>
                <p><strong>Address:</strong> {{ $booking->address ?? 'N/A' }}</p>
                <p><strong>Service:</strong> {{ $booking->service->name ?? 'N/A' }}</p>
                <p><strong>Date:</strong> {{ optional($booking->service_date)->format('d M Y, h:i A') ?? 'N/A' }}</p>
                <p><strong>OTP:</strong>
                    @if($booking->otp)
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">{{ $booking->otp }}</span>
                    @else
                        <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm font-medium">N/A</span>
                    @endif
                </p>
                <p><strong>OTP Verified:</strong>
                    <span class="{{ $booking->otp_verified ? 'text-green-600' : 'text-red-600' }} font-medium">
                        {{ $booking->otp_verified ? '✔ Yes' : '✖ No' }}
                    </span>
                </p>
                <p><strong>Maid Allot:</strong> {{ $booking->maid->name ?? 'Not Allotted' }}</p>

                {{-- Allot Maid Form --}}
                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <form action="{{ route('bookings.allotMaid', $booking->id) }}" method="POST"
                          class="flex flex-wrap items-center gap-3 mt-2">
                        @csrf
                        <label for="maid_id_{{ $booking->id }}" class="text-sm font-medium text-gray-700">
                            Allot Maid:
                        </label>
                        <select name="maid_id" id="maid_id_{{ $booking->id }}"
                            class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Maid</option>
                            @foreach($maids as $maid)
                                <option value="{{ $maid->id }}" {{ $booking->maid?->id == $maid->id ? 'selected' : '' }}>
                                    {{ $maid->name }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit"
                                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow-md transition duration-300">
                            Allot
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="text-center py-10">
            <p class="text-gray-500 text-lg">🚫 No bookings available.</p>
        </div>
    @endforelse
    {{-- Pagination --}}
    <div class="mt-6">
        {{ $bookings->links() }}
    </div>
</div>
@endsection
