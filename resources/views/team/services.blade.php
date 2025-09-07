@extends('team.layouts.app')

@section('title', 'Team Dashboard')
@section('page-title', 'Teams')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- service --}}
        <table class="table-auto w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Service ID</th>
                    <th class="py-3 px-6 text-left">Service Name</th>
                    <th class="py-3 px-6 text-left">Service Type</th>
                    <th class="py-3 px-6 text-left">Address</th>
                    <th class="py-3 px-6 text-left">Price</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-center">Action</th> {{-- ✅ Added --}}
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($services as $service)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            {{ $service->id }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            {{ $service->name }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            {{ $service->maid_type }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            {{ $service->address }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            ${{ number_format($service->price, 2) }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            @if ($service->status)
                                <span class="px-2 py-1 bg-green-200 text-green-800 rounded-full text-xs">Active</span>
                            @else
                                <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full text-xs">Inactive</span>
                            @endif
                        </td>
                        <td class="py-3 px-6 text-center">
                            @if ($service->status !== 'completed')
                                <form action="{{ route('bookings.verify', $service->id) }}" method="POST"
                                    class="flex items-center gap-2">
                                    @csrf
                                    <input type="text" name="otp" placeholder="Enter OTP"
                                        class="border rounded px-2 py-1 text-xs w-24 focus:ring focus:ring-blue-300"
                                        required>
                                    <button type="submit"
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs shadow">
                                        Verify
                                    </button>
                                </form>
                            @else
                                <span class="text-green-600 text-xs font-semibold">Verified</span>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
