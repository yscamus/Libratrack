@extends('layouts.dashboard')

@section('title', 'List Details')

@section('dashboard-content')
<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">{{ $list->name }}</h1>
            <p class="text-muted mb-0">{{ $list->description }}</p>
        </div>

        <a href="{{ route('list.index') }}" class="btn btn-outline-secondary">
            ← Back to Lists
        </a>
    </div>

    <!-- Resources Card -->
    <div class="card shadow-sm">
        <div class="card-body">

            <h5 class="card-title mb-3">Resources in this List</h5>

            @if ($list->resources->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Format</th>
                                <th>Personal Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list->resources as $resource)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $resource->title }}
                                    </td>

                                    <td>{{ $resource->author }}</td>

                                    <td>
                                        <span class="badge bg-secondary">
                                            {{ ucfirst($resource->format) }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $resource->pivot->personal_note ?: '—' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Action Buttons -->
            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('list.edit', $list->id) }}" class="btn btn-primary">
                        Edit List
                    </a>
                <form action="{{ route('list.destroy', $list->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this list?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
                
            </div>
                </div>
            @else
                <div class="text-center text-muted py-4">
                    No resources added to this list yet.
                </div>
            @endif

        </div>
    </div>

</div>
@endsection
