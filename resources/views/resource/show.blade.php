@extends('layouts.dashboard')

@section('title', 'Resource Details')

@section('dashboard-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Resource Details</h1>
                <div class="d-flex gap-2">
                    <a href="{{ route('resource.index') }}" class="btn btn-outline-secondary">
                        ← Back to List
                    </a>
                    
                </div>
            </div>

            <!-- Details Card -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <table class="table table-bordered align-middle mb-0">
                        <tbody>
                            <tr>
                                <th class="w-25 text-muted">Title</th>
                                <td>{{ $resource->title }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Author</th>
                                <td>{{ $resource->author }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Subject</th>
                                <td>{{ $resource->subject }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Format</th>
                                <td>{{ ucfirst($resource->format) }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Published Year</th>
                                <td>{{ $resource->published_year }}</td>
                            </tr>
                            <tr>
    <th class="text-muted">Created At</th>
    <td>
        {{ $resource->created_at 
            ? $resource->created_at->format('F d, Y h:i A') 
            : '—' 
        }}
    </td>
</tr>
<tr>
    <th class="text-muted">Last Updated</th>
    <td>
        {{ $resource->updated_at 
            ? $resource->updated_at->format('F d, Y h:i A') 
            : '—' 
        }}
    </td>
</tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('resource.edit', $resource->id) }}" class="btn btn-primary">
                        Edit Resource
                    </a>
                <form action="{{ route('resource.destroy', $resource->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this resource?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>

        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 8px;
    }
    th {
        background-color: #f8f9fa;
        font-weight: 500;
    }
</style>
@endsection
