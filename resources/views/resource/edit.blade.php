@extends('layouts.dashboard')

@section('title', 'Polishing the Resource?')

@section('dashboard-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Edit Resource</h1>
                <a href="{{ route('resource.index') }}" class="btn btn-outline-secondary">
                    ← Back to List
                </a>
            </div>

            <!-- Form Card -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('resource.update', $resource->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Title *</label>
                            <input type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   id="title"
                                   name="title"
                                   value="{{ old('title', $resource->title) }}"
                                   required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="author" class="form-label fw-bold">Author *</label>
                            <input type="text"
                                   class="form-control @error('author') is-invalid @enderror"
                                   id="author"
                                   name="author"
                                   value="{{ old('author', $resource->author) }}"
                                   required>
                            @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <label for="subject" class="form-label fw-bold">Subject *</label>
                            <input type="text"
                                   class="form-control @error('subject') is-invalid @enderror"
                                   id="subject"
                                   name="subject"
                                   value="{{ old('subject', $resource->subject) }}"
                                   required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Format -->
                        <div class="mb-3">
                            <label for="format" class="form-label fw-bold">Format *</label>
                            <select class="form-select @error('format') is-invalid @enderror"
                                    id="format"
                                    name="format"
                                    required>
                                <option value="">-- Select Format --</option>
                                @foreach([
                                    'book','ebook','audiobook','newspaper','journal',
                                    'magazine','podcast','video','website','microform','other'
                                ] as $format)
                                    <option value="{{ $format }}"
                                        {{ old('format', $resource->format) === $format ? 'selected' : '' }}>
                                        {{ ucfirst($format) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('format')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Published Year -->
                        <div class="mb-4">
                            <label for="published_year" class="form-label fw-bold">Published Year *</label>
                            <input type="number"
                                   class="form-control @error('published_year') is-invalid @enderror"
                                   id="published_year"
                                   name="published_year"
                                   value="{{ old('published_year', $resource->published_year) }}"
                                   min="1000"
                                   max="{{ date('Y') }}"
                                   required>
                            @error('published_year')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('resource.show', $resource->id) }}" class="btn btn-secondary">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Update Resource
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 8px;
    }
    .form-label {
        color: #495057;
    }
    .form-control, .form-select {
        border-radius: 6px;
        padding: 0.625rem 0.75rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>
@endsection
