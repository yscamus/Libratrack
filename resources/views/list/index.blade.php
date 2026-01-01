@extends('layouts.dashboard')

@section('title', 'My Lists')

@section('dashboard-content')
<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">My Lists</h1>
        <a href="{{ route('list.create') }}" class="btn btn-primary">
            + Make a New List
        </a>
    </div>

    <!-- Table Card -->
    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>List Name</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th class="text-center" style="width: 180px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($lists as $l)
                            <tr>
                                <td class="fw-semibold">{{ $l->name }}</td>
                                <td>{{ $l->description }}</td>

                                <td>
                                    {{ $l->created_at 
                                        ? $l->created_at->format('M d, Y') 
                                        : '—' 
                                    }}
                                </td>

                                <td>
                                    {{ $l->updated_at 
                                        ? $l->updated_at->format('M d, Y') 
                                        : '—' 
                                    }}
                                </td>
                            
                    <td class="text-center">
                        <div class="d-flex gap-1 justify-content-center">
                            <a href="{{ route('list.show', $l->id) }}"
                            class="btn btn-sm btn-outline-secondary"
                            title="View">
                                Show
                            </a>
                            <a href="{{ route('list.edit', $l->id) }}"
                            class="btn btn-sm btn-outline-primary"
                            title="Edit">
                                Edit
                            </a>
                            <form action="{{ route('list.destroy', $l->id) }}"
                                method="POST" 
                                style="margin: 0;"
                                onsubmit="return confirm('Are you sure you want to delete this list?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        title="Delete">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    No lists found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<style>
    .table th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        color: #6c757d;
        border-bottom: 2px solid #dee2e6;
    }
    .table td {
        vertical-align: middle;
        font-size: 0.875rem;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        border-radius: 0.25rem;
    }
    .card {
        border: none;
        border-radius: 8px;
    }
    .gap-1 {
        gap: 0.25rem !important;
    }
</style>
@endsection
