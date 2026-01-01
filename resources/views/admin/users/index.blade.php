@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">User Information</h3>
</div>

<div class="card p-4"> <!-- use same card style as dashboard -->
    @if($users->count())
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->user_type_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                            <td class="text-end">
                                <form action="{{ route('admin.users.destroy', $user->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center text-muted py-5">
            <p class="mb-1">No users found</p>
        </div>
    @endif
</div>
@endsection
