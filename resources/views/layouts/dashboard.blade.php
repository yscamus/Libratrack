<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') - LibraTrack</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    @stack('styles')
</head>
<body>
    <div class="dashboard-wrapper d-flex">
        <!-- Sidebar -->
        <aside class="sidebar bg-light border-end">
            <div class="sidebar-brand p-3 border-bottom">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <h4 class="mb-0 text-dark">LibraTrack</h4>
                    <small class="text-muted">Know what you read.</small>
                </a>
            </div>
            
            <div class="sidebar-logo">
                <img src="{{ asset('images/libratrack-icon.png') }}" alt="LibraTrack Logo">
            </div>
            
            <nav class="nav flex-column p-3">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('resource.index') }}" class="nav-link {{ request()->routeIs('resource.*') ? 'active' : '' }}">
                    Resources
                </a>
                <a href="{{ route('list.index') }}" class="nav-link {{ request()->routeIs('list.*') ? 'active' : '' }}">
                    My Lists
                </a>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <div class="main-content flex-fill">
            <!-- Topbar -->
            <div class="topbar bg-white border-bottom p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0">@yield('title', 'Home')</h2>
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
                @yield('dashboard-content')
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    @stack('scripts')
    
    <style>
    /* ====== Fonts ====== */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Space+Grotesk:wght@400;500&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        margin: 0;
        font-family: 'Space Grotesk', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
        color: #111;
        background-color: #f3f2ec !important;
    }
    
    h1, h2, h3, h4 {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
    }
    
    /* ====== Layout ====== */
    .dashboard-wrapper {
        min-height: 100vh;
        background-color: #f3f2ec !important;
    }
    
    /* ====== Sidebar - FIXED WIDTH ====== */
    .sidebar {
        width: 260px;
        min-width: 260px;
        max-width: 260px;
        background: #ffffff;
        border-right: 1px solid #eee;
        overflow-x: hidden;
        flex-shrink: 0;
        position: relative;
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
    
    .sidebar-logo {
        padding: 1.5rem;
        text-align: center;
    }
    
    .sidebar-logo img {
        max-width: 100%;
        height: auto;
        max-height: 120px;
        object-fit: contain;
    }
    
    .sidebar .nav {
        padding: 1rem;
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
    
    /* ====== Main Content ====== */
    .main-content {
        flex: 1;
        min-width: 0;
        background-color: transparent !important;
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
        background-color: transparent !important;
    }
    
    /* ====== Cards / Tables ====== */
    .card {
        border-radius: 18px;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        border: none;
    }
    
    .table {
        border-radius: 18px;
        overflow: hidden;
    }
    
    .table th {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 500;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background-color: #f8f9fa;
    }
    
    .table td {
        font-size: 0.9rem;
    }
    
    /* ====== Buttons ====== */
    .btn-primary {
        background: #111;
        border: none;
        border-radius: 999px;
        padding: 8px 20px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }
    
    .btn-primary:hover {
        background: #000;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .btn-secondary {
        border-radius: 999px;
        font-size: 0.85rem;
    }
    
    .btn-outline-primary,
    .btn-outline-secondary,
    .btn-outline-danger {
        border-radius: 999px;
        font-size: 0.85rem;
        transition: all 0.2s ease;
    }
    
    /* ====== Responsive ====== */
    @media (max-width: 768px) {
        .sidebar {
            width: 80px;
            min-width: 80px;
            max-width: 80px;
        }
        
        .sidebar-brand h4,
        .sidebar-brand small,
        .sidebar .nav-link {
            font-size: 0.75rem;
        }
        
        .sidebar-logo img {
            max-height: 60px;
        }
    }
    
    /* ====== Slick Slider ====== */
    .slick-slider {
        margin-bottom: 2rem;
    }
    </style>
    
    <script>
    $(function() {
        // Initialize any slick sliders if they exist
        if ($('.main-slider').length) {
            $('.main-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: true,
                prevArrow: $('#billboard .prev'),
                nextArrow: $('#billboard .next'),
                infinite: true,
                pauseOnHover: true
            });
        }
    });
    </script>
</body>
</html>