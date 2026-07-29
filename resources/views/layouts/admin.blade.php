<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsUp I-Tech Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&family=Outfit:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Hind Siliguri', sans-serif; }
        body { background: #f1f5f9; color: #1e293b; display: flex; min-height: 100vh; }
        
        .sidebar { width: 260px; background: #050b1e; color: white; padding: 24px; display: flex; flex-direction: column; gap: 20px; }
        .sidebar-brand { font-size: 20px; font-weight: 800; color: white; display: flex; align-items: center; gap: 10px; padding-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-brand span { color: #ff5722; }
        .nav-menu { list-style: none; display: flex; flex-direction: column; gap: 8px; }
        .nav-menu a { color: #94a3b8; text-decoration: none; padding: 12px 16px; border-radius: 8px; display: flex; align-items: center; gap: 12px; font-weight: 600; font-size: 15px; transition: all 0.2s; }
        .nav-menu a:hover, .nav-menu a.active { background: #ff5722; color: white; }
        
        .main-content { flex: 1; padding: 30px; }
        .top-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .page-title { font-size: 24px; font-weight: 800; color: #0f172a; }
        .btn-view-site { background: #007bff; color: white; text-decoration: none; padding: 10px 18px; border-radius: 8px; font-weight: 600; font-size: 14px; }
        
        .card { background: white; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0; margin-bottom: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); }
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: white; border-radius: 12px; padding: 20px; border: 1px solid #e2e8f0; display: flex; align-items: center; gap: 16px; }
        .stat-icon { width: 48px; height: 48px; border-radius: 10px; background: #eff6ff; color: #007bff; display: flex; align-items: center; justify-content: center; font-size: 20px; }
        .stat-num { font-size: 24px; font-weight: 800; color: #0f172a; }
        .stat-label { font-size: 13px; color: #64748b; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 14px 16px; text-align: left; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
        th { background: #f8fafc; color: #475569; font-weight: 700; }
        
        .form-group { margin-bottom: 16px; }
        .form-label { display: block; font-size: 14px; font-weight: 700; margin-bottom: 6px; }
        .form-input { width: 100%; padding: 10px 14px; border-radius: 6px; border: 1px solid #cbd5e1; font-size: 14px; outline: none; }
        .btn-submit { background: #ff5722; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-weight: 700; cursor: pointer; }
        .alert-success { background: #10b981; color: white; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand" style="padding-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">
            <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 48px; width: auto; object-fit: contain;">
        </div>
        <ul class="nav-menu">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa-solid fa-chart-pie"></i> ড্যাশবোর্ড</a></li>
            <li><a href="{{ route('admin.services') }}" class="{{ request()->routeIs('admin.services') ? 'active' : '' }}"><i class="fa-solid fa-laptop-code"></i> সার্ভিসেস</a></li>
            <li><a href="{{ route('admin.packages') }}" class="{{ request()->routeIs('admin.packages') ? 'active' : '' }}"><i class="fa-solid fa-tags"></i> প্যাকেজ ও মূল্য</a></li>
            <li><a href="{{ route('admin.demos') }}" class="{{ request()->routeIs('admin.demos') ? 'active' : '' }}"><i class="fa-solid fa-globe"></i> ডেমো লিঙ্কস</a></li>
            <li><a href="{{ route('admin.blogs') }}" class="{{ request()->routeIs('admin.blogs*') ? 'active' : '' }}"><i class="fa-solid fa-newspaper"></i> ব্লগস ম্যানেজমেন্ট</a></li>
            <li><a href="{{ route('admin.messages') }}" class="{{ request()->routeIs('admin.messages') ? 'active' : '' }}"><i class="fa-solid fa-envelope"></i> কন্টাক্ট ইনবক্স</a></li>
            <li><a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}"><i class="fa-solid fa-sliders"></i> সাইট সেটিংস</a></li>
            <li style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                <form action="{{ route('admin.logout') }}" method="POST" style="width: 100%;">
                    @csrf
                    <button type="submit" style="width: 100%; background: #ef4444; color: white; border: none; padding: 12px 16px; border-radius: 8px; font-weight: 700; font-size: 15px; cursor: pointer; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-right-from-bracket"></i> লগআউট করুন
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="top-header">
            <h1 class="page-title">@yield('title', 'ড্যাশবোর্ড')</h1>
            <a href="{{ route('home') }}" target="_blank" class="btn-view-site"><i class="fa-solid fa-external-link"></i> ওয়েবসাইট দেখুন</a>
        </div>

        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @yield('admin_content')
    </div>
</body>
</html>
