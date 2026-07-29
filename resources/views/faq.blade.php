@extends('layouts.app')

@section('content')

<!-- Header Navbar -->
<header class="header">
    <div class="container navbar">
        <a href="{{ route('home') }}#hero" class="brand-logo" style="display: flex; align-items: center; text-decoration: none;">
            <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 52px; width: auto; object-fit: contain;">
        </a>

        <ul class="nav-links">
            <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close Menu"><i class="fa-solid fa-xmark"></i></button>
            <li><a href="{{ route('home') }}">হোম</a></li>
            <li><a href="{{ route('home') }}#about">আমাদের সম্পর্কে</a></li>
            <li><a href="{{ route('home') }}#services">সার্ভিস সমূহ</a></li>
            <li><a href="{{ route('home') }}#packages">প্যাকেজ ও মূল্য</a></li>
            <li><a href="{{ route('home') }}#projects">ডেমো</a></li>
            <li><a href="{{ route('home') }}#blogs">ব্লগ</a></li>
            <li><a href="{{ route('home') }}#contact">যোগাযোগ</a></li>
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
        <span style="color: var(--accent-orange); font-weight: 700; font-size: 14px; text-transform: uppercase;">সাধারণ জিজ্ঞাসাসমূহ</span>
        <h1 style="font-size: 38px; font-weight: 800; margin-top: 8px; margin-bottom: 12px;">FAQ (সাধারণ প্রশ্ন উত্তর)</h1>
    </div>
</section>

<!-- Content -->
<section class="section" style="background: #f8fafc;">
    <div class="container">
        <div style="background: white; border-radius: 16px; padding: 40px; border: 1px solid #e2e8f0; font-size: 16px; line-height: 1.8; color: #334155;">
            {!! nl2br(e($faqText)) !!}
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
