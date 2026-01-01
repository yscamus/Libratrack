@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4">Libratrack Statistics</h1>

    <div class="row g-4">
        <!-- Total Users -->
        <div class="col-md-4">
            <a href="{{ route('admin.users') }}" class="text-decoration-none">
                <div class="card shadow-sm hover-card">
                    <div class="card-body text-center">
                        <h5>Total Users</h5>
                        <p class="fs-3">{{ $usersCount }}</p>
                        <span class="badge bg-primary">Manage Libratrack Users</span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Resources -->
        <div class="col-md-4">
            <a href="{{ route('resource.index') }}" class="text-decoration-none">
                <div class="card shadow-sm hover-card">
                    <div class="card-body text-center">
                        <h5>Total Resources</h5>
                        <p class="fs-3">{{ $resourcesCount }}</p>
                        <span class="badge bg-primary">Manage Resources</span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Lists -->
        <div class="col-md-4">
            <a href="{{ route('list.index') }}" class="text-decoration-none">
                <div class="card shadow-sm hover-card">
                    <div class="card-body text-center">
                        <h5>Total Lists</h5>
                        <p class="fs-3">{{ $listsCount }}</p>
                        <span class="badge bg-primary">Manage Admin Lists</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

<style>
    .card {
        border: none;
        border-radius: 8px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card h5 {
        font-size: 0.85rem;
        font-weight: 600;
        color: #495057;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .card p.fs-3 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    a.text-decoration-none:hover {
        text-decoration: none;
    }

    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
    }
</style>
@endsection
