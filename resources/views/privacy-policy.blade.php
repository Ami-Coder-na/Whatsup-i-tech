@extends('layouts.app')

@section('content')

<!-- Header Navbar -->
<header class="header">
    <div class="container navbar">
        <a href="{{ route('home') }}#hero" class="brand-logo" style="display: flex; align-items: center; text-decoration: none;">
            <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 52px; width: auto; object-fit: contain;">
        </a>

        <ul class="nav-links">
            <div class="drawer-header">
                <span style="font-weight: 800; font-size: 17px; color: white;">মেনু নেভিগেশন</span>
                <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close Menu"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> হোম</a></li>
            <li><a href="{{ route('home') }}#about"><i class="fa-solid fa-users"></i> আমাদের সম্পর্কে</a></li>
            <li><a href="{{ route('home') }}#services"><i class="fa-solid fa-laptop-code"></i> সার্ভিস সমূহ</a></li>
            <li><a href="{{ route('home') }}#packages"><i class="fa-solid fa-tags"></i> প্যাকেজ ও মূল্য</a></li>
            <li><a href="{{ route('home') }}#projects"><i class="fa-solid fa-laptop"></i> ডেমো</a></li>
            <li><a href="{{ route('home') }}#blogs"><i class="fa-solid fa-newspaper"></i> ব্লগ</a></li>
            <li><a href="{{ route('home') }}#contact"><i class="fa-solid fa-envelope"></i> যোগাযোগ</a></li>
        </ul>

        <div class="nav-right-actions">
            <a href="tel:01657043577" class="phone-link">
                <i class="fa-solid fa-phone"></i> 01657-043577
            </a>
            <a href="{{ route('home') }}#projects" class="btn-primary">
                ডেমো দেখুন <i class="fa-solid fa-arrow-right"></i>
            </a>
            <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Toggle Menu">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
    </div>
</header>

<!-- Header Banner -->
<section style="background: radial-gradient(circle at top right, #111d42 0%, #050b1e 60%); color: white; padding: 60px 0 50px; text-align: center;">
    <div class="container">
        <span style="color: var(--accent-orange); font-weight: 700; font-size: 14px; text-transform: uppercase;">আইনি শর্তাবলী</span>
        <h1 style="font-size: 38px; font-weight: 800; margin-top: 8px; margin-bottom: 12px;">গোপনীয়তা নীতি (Privacy Policy)</h1>
    </div>
</section>

<!-- Content -->
<section class="section" style="background: #f8fafc;">
    <div class="container">
        <div style="background: white; border-radius: 16px; padding: 40px; border: 1px solid #e2e8f0; font-size: 16px; line-height: 1.8; color: #334155;">
            {!! nl2br(e($policyText)) !!}
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-bottom" style="border: none; padding: 0;">
            <div>© {{ date('Y') }} WhatsUp i-Tech. সকল অধিকার সংরক্ষিত।</div>
            <div>ডিজাইন ও ডেভেলপমেন্ট: WhatsUp i-Tech</div>
        </div>
    </div>
</footer>

@endsection
