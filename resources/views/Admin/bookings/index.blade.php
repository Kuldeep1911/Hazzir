@extends('Admin.layouts.app')

@section('title', 'Users Management')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg">
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
                        ({{ $booking->service ? $booking->service->name : 'No Service Found' }})
                    </span>
                </h3>

                {{-- Status Badge --}}
                <p class="mt-2 md:mt-0">
                    @if($booking->status == 'pending')
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">Pending</span>
                    @elseif($booking->status == 'confirmed')
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Confirmed</span>
                    @elseif($booking->status == 'completed')
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Completed</span>
                    @elseif($booking->status == 'cancelled')
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Cancelled</span>
                    @else
                        <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm font-medium">Unknown</span>
                    @endif
                </p>
            </div>

            {{-- Booking Details --}}
            <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-sm">
                <p><strong>User:</strong>
                    @if($booking->user)
                        {{ $booking->user->name }}
                    @else
                        <span class="text-red-500">No User Found</span>
                    @endif
                </p>
                <p><strong>OTP:</strong>
                    @if($booking->otp)
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">{{ $booking->otp }}</span>
                    @else
                        <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm font-medium">N/A</span>
                    @endif
                </p>

                <p><strong>Phone:</strong> {{ $booking->phone ?? 'N/A' }}</p>
                <p><strong>Address:</strong> {{ $booking->address ?? 'N/A' }}</p>
                <p><strong>Service:</strong> {{ $booking->service ? $booking->service->name : 'N/A' }}</p>
                <p><strong>Date:</strong> {{ $booking->service_date ? $booking->service_date->format('d M Y, h:i A') : 'N/A' }}</p>
                <p><strong>OTP Verified:</strong>
                    @if($booking->otp_verified)
                        <span class="text-green-600 font-medium">✔ Yes</span>
                    @else
                        <span class="text-red-600 font-medium">✖ No</span>
                    @endif
                </p>
            </div>
        </div>
    @empty
        <div class="text-center py-10">
            <p class="text-gray-500 text-lg">🚫 No bookings available.</p>
        </div>
    @endforelse

    {{-- Pagination --}}
    {{-- <div class="mt-6">
        {{ $bookings->links('pagination::bootstrap-5') }}
    </div> --}}
</div>
@endsection
