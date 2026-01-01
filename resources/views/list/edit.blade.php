@extends('layouts.dashboard')

@section('title', 'Polishing your list?')

@section('dashboard-content')
<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Edit List</h1>

        <a href="{{ route('list.show', $list->id) }}" class="btn btn-outline-secondary">
            ← Back to List
        </a>
    </div>

    <!-- Form Card -->
    <div class="card shadow-sm">
        <div class="card-body p-4">

            <form action="{{ route('list.update', $list->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- List Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">List Name *</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $list->name) }}"
                        required
                        autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description *</label>
                    <textarea
                        name="description"
                        id="description"
                        rows="3"
                        class="form-control @error('description') is-invalid @enderror"
                        required
                    >{{ old('description', $list->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Resources -->
<div class="mb-4">
    <label class="form-label fw-bold">Resources</label>

    @error('resources')
        <div class="text-danger mb-2">{{ $message }}</div>
    @enderror

    <div class="border rounded p-3" style="max-height: 400px; overflow-y: auto;">
        @forelse ($resources as $resource)
            <div class="form-check mb-3">
                <!-- Checkbox -->
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="resources[]"
                    value="{{ $resource->id }}"
                    id="resource-{{ $resource->id }}"
                    {{ $list->resources->contains($resource->id) ? 'checked' : '' }}
                >
                <label class="form-check-label fw-semibold" for="resource-{{ $resource->id }}">
                    {{ $resource->title }}
                    <span class="text-muted">
                        — {{ $resource->author }} ({{ ucfirst($resource->format) }})
                    </span>
                </label>

                <!-- Personal Note Input -->
                @php
                    $note = $list->resources->find($resource->id)?->pivot->personal_note;
                @endphp
                <input
                    type="text"
                    name="personal_notes[{{ $resource->id }}]"
                    class="form-control form-control-sm mt-1"
                    placeholder="Add a personal note..."
                    value="{{ old('personal_notes.' . $resource->id, $note) }}"
                >
            </div>
        @empty
            <p class="text-muted mb-0">No resources available.</p>
        @endforelse
    </div>
</div>


                <!-- Actions -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('list.show', $list->id) }}" class="btn btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Update List
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

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
