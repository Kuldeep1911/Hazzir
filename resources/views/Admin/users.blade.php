@extends('Admin.layouts.app')

@section('title', 'Users Management')

@section('content')
    <div class="bg-white p-6 rounded-2xl shadow-lg">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">Users List</h2>
            <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add User</a>
        </div>

        <table class="w-full text-sm border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-2">ID</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Phone</th>
                    <th class="p-2">Role</th>
                    <th class="p-2">Emp. ID</th>
                    <th class="p-2">Gender</th>
                    <th class="p-2">Age</th>
                    <th class="p-2">Address</th>
                    <th class="p-2">Experience</th>
                    <th class="p-2">Joined</th>
                    <th class="p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-2">{{ $user->id }}</td>
                        <td class="p-2">{{ $user->name }}</td>
                        <td class="p-2">{{ $user->email }}</td>
                        <td class="p-2">{{ $user->phone ?? 'NA' }}</td>
                        <td class="p-2">
                            @if ($user->role == 0)
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded">User</span>
                            @elseif($user->role == 1)
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded">Admin</span>
                            @else
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded">Team</span>
                            @endif
                        </td>
                        <td class="p-2 text-center">
    @if($user->confirmation_id && $user->confirmation_id !== 'NA')
        <span class="inline-block bg-gradient-to-r from-indigo-500 to-blue-600 text-white px-4 py-2 rounded-xl shadow-md">
            {{ $user->confirmation_id }}
        </span>
    @else
        <span class="inline-block bg-red-600 text-white px-4 py-2 rounded-xl shadow-md">
            NA
        </span>
    @endif
</td>


                        <td class="p-2">{{ $user->gender ?? 'NA' }}</td>
                        <td class="p-2">{{ $user->age ?? 'NA' }}</td>
                        <td class="p-2">{{ $user->address ?? 'NA' }}</td>
                        <td class="p-2">{{ $user->experience ?? 'NA' }}</td>
                        <td class="p-2">{{ $user->created_at }}</td>
                        <td class="p-2 flex gap-2">
                            <a href="{{ route('users.edit', $user->id) }}" class=" btn btn-success text-white-600">Edit</a>
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                @csrf @method('DELETE')
                                <button type="submit" class=" btn btn-danger text-white-600"
                                    onclick="return confirm('Delete user?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
@endsection
