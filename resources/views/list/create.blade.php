@extends('layouts.dashboard')

@section('title', 'What list do you want to make?')

@section('dashboard-content')
<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Create a New List</h1>
        <a href="{{ route('list.index') }}" class="btn btn-outline-secondary">← Back to Lists</a>
    </div>

    <!-- Form Card -->
    <div class="card shadow-sm">
        <div class="card-body p-4">

            <form method="POST" action="{{ route('list.store') }}">
                @csrf

                <!-- List Name -->
                <div class="mb-3">
                    <label class="form-label fw-bold">List Name *</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Description *</label>
                    <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Resources -->
                <div class="mb-4">
                    <label class="form-label fw-bold">Select Resources</label>
                    <div class="border rounded p-3" style="max-height: 280px; overflow-y: auto;">
                        @forelse ($resources as $resource)
                            <div class="border rounded p-2 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input resource-checkbox" type="checkbox" name="resources[]" value="{{ $resource->id }}" id="resource-{{ $resource->id }}" data-target="note-{{ $resource->id }}">
                                    <label class="form-check-label" for="resource-{{ $resource->id }}">
                                        <strong>{{ $resource->title }}</strong>
                                        <span class="text-muted">— {{ $resource->author }} ({{ ucfirst($resource->format) }})</span>
                                    </label>
                                </div>
                                <!-- Personal Note -->
                                <div class="mt-2 d-none" id="note-{{ $resource->id }}">
                                    <textarea name="personal_notes[{{ $resource->id }}]" class="form-control" rows="2" placeholder="Personal note for this resource (optional)">{{ old('personal_notes.' . $resource->id) }}</textarea>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted mb-0">No resources available.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Actions -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('list.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create List</button>
                </div>

            </form>

        </div>
    </div>

</div>

<!-- Toggle personal notes visibility -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.resource-checkbox').forEach(cb => {
        cb.addEventListener('change', function () {
            const target = document.getElementById(this.dataset.target);
            if (this.checked) {
                target.classList.remove('d-none');
            } else {
                target.classList.add('d-none');
            }
        });
    });
});
</script>

@endsection
