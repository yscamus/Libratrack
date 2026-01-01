
<aside class="sidebar bg-light border-end">
            <div class="sidebar-brand p-3 border-bottom">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <h4 class="mb-0 text-dark">LibraTrack</h4>
                    <small class="text-muted">Know what you read.</small>
                </a>

        
<div class="sidebar-logo">
    <img src="{{ asset('images/libratrack-icon.png') }}" alt="LibraTrack Logo">
</div>

            </div>
            <nav class="nav flex-column p-3">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                    Manage Users
                </a>
                <a href="{{ route('resource.index') }}" class="nav-link {{ request()->routeIs('resource.*') ? 'active' : '' }}">
                    Manage Resources
                </a>
                <a href="{{ route('list.index') }}" class="nav-link {{ request()->routeIs('list.*') ? 'active' : '' }}">
                    Manage My Lists
                </a>

                <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-link nav-link text-start">
                Logout
            </button>

            </nav>
        </aside>


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