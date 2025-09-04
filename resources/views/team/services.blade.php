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
                <th class="py-3 px-6 text-left">Description</th>
                <th class="py-3 px-6 text-left">Price</th>
                <th class="py-3 px-6 text-left">Status</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach($services as $service)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    {{ $service->id }}
                </td>
                <td class="py-3 px-6 text-left">
                    {{ $service->name }}
                </td>
                <td class="py-3 px-6 text-left">
                    {{ $service->description }}
                </td>
                <td class="py-3 px-6 text-left">
                    ${{ number_format($service->price, 2) }}
                </td>
                <td class="py-3 px-6 text-left">
                    @if($service->status)
                    <span class="px-2 py-1 bg-green-200 text-green-800 rounded-full text-xs">Active</span>
                    @else
                    <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full text-xs">Inactive</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
