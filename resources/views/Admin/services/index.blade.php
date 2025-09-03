@extends('Admin.layouts.app')

@section('title', 'Services Management')
@section('page-title', 'Services List')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-lg">
    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-semibold">Services List</h2>
        <a href="{{ route('admin.services.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add Service</a>
    </div>

    <table class="table table-bordered w-full text-sm">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="p-2">ID</th>
                <th class="p-2">Service Name</th>
                <th class="p-2">Description</th>
                <th class="p-2">Options</th>
                <th class="p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-2">{{ $service->id }}</td>
                <td class="p-2">{{ $service->name }}</td>
                <td class="p-2">{{ $service->description ?? 'NA' }}</td>
                <td class="p-2">
                    @foreach ($service->options as $opt)
                        <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded mr-1">{{ $opt->option_name }}</span>
                    @endforeach
                </td>
                <td class="p-2 flex gap-2">
                    <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this service?')" class="btn btn-danger px-3">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $services->links() }}
    </div>
</div>
@endsection
