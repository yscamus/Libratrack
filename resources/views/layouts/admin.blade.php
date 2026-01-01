<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard')- LibraTrack</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
    
</head>
<body>
    <div class="dashboard-wrapper d-flex">

    @include('admin.partials.sidebar')
   
    <!-- Main Content -->
    <div class="main-content flex-fill">
            <!-- Topbar -->
            <div class="topbar bg-white border-bottom p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0">@yield('title', 'Admin Dashboard')</h2>
                    <div class="user-info d-flex align-items-center gap-2">
                        <span style="font-size: 13px;">Hello, {{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary" style="padding: 2px 10px; font-size: 11px; height: 24px;">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="content p-4">
                @yield('content') <!-- Users index or other admin pages -->
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')

    <style>
    /* ====== Fonts ====== */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Space+Grotesk:wght@400;500&display=swap');

    body {
        margin: 0;
        font-family: 'Space Grotesk', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
        color: #111;
    }

    h1, h2, h3, h4 {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
    }

    /* ====== Layout ====== */
    .dashboard-wrapper {
        min-height: 100vh;
    }

    /* ====== Sidebar ====== */
    .sidebar {
        width: 260px;
        background: #ffffff;
        border-right: 1px solid #eee;
    }

    .sidebar-brand {
        padding: 1.5rem;
        border-bottom: 1px solid #eee;
    }

    .sidebar-brand h4 {
        margin: 0;
        font-size: 1.4rem;
        letter-spacing: 0.3px;
    }

    .sidebar-brand small {
        font-family: 'Space Grotesk', sans-serif;
        letter-spacing: 0.4px;
    }

    .sidebar .nav-link {
        color: #333;
        padding: 0.75rem 1rem;
        border-radius: 12px;
        margin-bottom: 0.4rem;
        font-size: 0.95rem;
        transition: background 0.2s ease, color 0.2s ease;
    }

    .sidebar .nav-link:hover {
        background: #F2F2F2;
        color: #000;
    }

    .sidebar .nav-link.active {
        background: #111;
        color: #fff;
        font-weight: 500;
    }

    .sidebar-logo img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    }


    /* ====== Topbar ====== */
    .topbar {
        background: #ffffff;
        border-radius: 18px;
        padding: 1.2rem 1.5rem;
        margin: 1.5rem;
        box-shadow: 0 8px 24px rgba(0,0,0,0.04);
    }

    .topbar h2 {
        font-size: 1.5rem;
        margin: 0;
    }

    .user-info span {
        font-size: 0.9rem;
        color: #444;
    }

    .user-info button {
        border-radius: 999px;
        padding: 4px 14px;
        font-size: 0.75rem;
        border: 1px solid #ddd;
        background: transparent;
        transition: all 0.2s ease;
    }

    .user-info button:hover {
        background: #111;
        color: #fff;
        border-color: #111;
    }

    /* ====== Page Content ====== */
    .content {
        padding: 0 1.5rem 2rem 1.5rem;
    }

    /* ====== Cards / Tables inside dashboard ====== */
    .card,
    table {
        border-radius: 18px;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        border: none;
    }

    table th {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 500;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    table td {
        font-size: 0.9rem;
    }

    /* ====== Buttons ====== */
    .btn-primary {
        background: #111;
        border: none;
        border-radius: 999px;
        padding: 6px 16px;
        font-size: 0.85rem;
    }

    .btn-primary:hover {
        background: #000;
    }

    .btn-secondary {
        border-radius: 999px;
        font-
        size: 0.85rem;
    }

/* ===== FORCE GLOBAL DASHBOARD BACKGROUND ===== */
html,
body {
    background-color: #f3f2ec !important;
}

.dashboard-wrapper {
    background-color: #f3f2ec !important;
    min-height: 100vh;
}

.main-content {
    background-color: transparent !important;
}

.content {
    background-color: transparent !important;
}




</style>

</body>
</html>

