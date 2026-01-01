@extends('layouts.dashboard')

@section('title', 'Our Collection of Resources')

@section('dashboard-content')
<div class="container-fluid">
    <!-- Header with Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Resources</h1>
        <a href="{{ route('resource.create') }}" class="btn btn-primary">
            <i class="icon icon-plus"></i> + Add New Resource
        </a>
    </div>

    <!-- Resources Table -->
    @if($resources->count())
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Subject</th>
                            <th>Format</th>
                            <th>Year</th>
                            <th class="text-center" style="width: 180px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resources as $r)
                        <tr>
                            <td>{{ $r->title }}</td>
                            <td>{{ $r->author }}</td>
                            <td>{{ $r->subject }}</td>
                            <td>
                                <span class="badge bg-info">{{ ucfirst($r->format) }}</span>
                            </td>
                            <td>{{ $r->published_year }}</td>
                            <td class="text-center">
    <div class="d-flex gap-1 justify-content-center">
        <a href="{{ route('resource.show', $r->id) }}" 
           class="btn btn-sm btn-outline-secondary" 
           title="View">
            Show
        </a>
        <a href="{{ route('resource.edit', $r->id) }}" 
           class="btn btn-sm btn-outline-primary" 
           title="Edit">
            Edit
        </a>
        <form action="{{ route('resource.destroy', $r->id) }}" 
              method="POST" 
              style="margin: 0;"
              onsubmit="return confirm('Are you sure you want to delete this resource?')">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
    <div class="card shadow-sm">
        <div class="card-body text-center py-5">
            <p class="text-muted mb-3">No resources found.</p>
            <a href="{{ route('resource.create') }}" class="btn btn-primary">
                <i class="icon icon-plus"></i> + Add Your First Resource
            </a>
        </div>
    </div>
    @endif
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
    .badge {
        font-size: 0.7rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
    }
    .gap-1 {
        gap: 0.25rem !important;
    }
</style>
@endsection