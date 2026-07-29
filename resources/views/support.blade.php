@extends('layouts.app')

@section('content')

<!-- Sticky Fixed Header Container -->
<div class="sticky-header-wrapper">
    <!-- Top Announcement Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="top-bar-left">
                <span>বাংলাদেশ সেরা ডিজিটাল সার্ভিসেস প্ল্যাটফর্ম</span>
            </div>
            <div class="top-bar-right">
                <a href="https://wa.me/8801657043577" target="_blank" style="color: #25D366; font-weight: 600;"><i class="fa-brands fa-whatsapp fa-lg"></i> WhatsApp</a>
                <a href="https://m.me/whatsupitech" target="_blank" style="color: #0084FF; font-weight: 600;"><i class="fa-brands fa-facebook-messenger fa-lg"></i> Messenger</a>
                <a href="{{ route('support') }}" style="color: var(--accent-orange); font-weight: 600;"><i class="fa-solid fa-headset"></i> সাপোর্ট</a>
                <a href="{{ route('faq') }}"><i class="fa-solid fa-circle-question"></i> FAQ</a>
                <a href="{{ route('privacy.policy') }}"><i class="fa-solid fa-user-shield"></i> গোপনীয়তা নীতি</a>
                <a href="{{ route('terms.conditions') }}"><i class="fa-solid fa-file-contract"></i> শর্তাবলী</a>
                <a href="https://wa.me/8801657043577" target="_blank" style="color: #25D366;"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://m.me/whatsupitech" target="_blank" style="color: #0084FF;"><i class="fa-brands fa-facebook-messenger"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- Header Navbar -->
    <header class="header">
        <div class="container navbar">
            <a href="{{ route('home') }}" class="brand-logo" style="display: flex; align-items: center; text-decoration: none;">
                <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 52px; width: auto; object-fit: contain;">
            </a>

            <ul class="nav-links">
                <div class="drawer-header">
                    <span style="font-weight: 800; font-size: 17px; color: white;">মেনু নেভিগেশন</span>
                    <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close Menu"><i class="fa-solid fa-xmark"></i></button>
                </div>
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
</div>

<!-- Header Banner -->
<section style="background: radial-gradient(circle at top right, #111d42 0%, #050b1e 60%); color: white; padding: 60px 0 50px; text-align: center;">
    <div class="container">
        <span style="color: var(--accent-orange); font-weight: 700; font-size: 14px; text-transform: uppercase;">২৪/৭ হেল্পডেস্ক</span>
        <h1 style="font-size: 38px; font-weight: 800; margin-top: 8px; margin-bottom: 12px;">কাস্টমার সাপোর্ট কেন্দ্র (Customer Support)</h1>
    </div>
</section>

<!-- Content -->
<section class="section" style="background: #f8fafc; min-height: 40vh;">
    <div class="container">
        <div style="background: white; border-radius: 16px; padding: 40px; border: 1px solid #e2e8f0; font-size: 16px; line-height: 1.8; color: #334155; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            {!! nl2br(e($supportText)) !!}
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <a href="{{ route('home') }}" style="display: block; margin-bottom: 20px;">
                    <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 55px; width: auto; object-fit: contain;">
                </a>
                <p>আমরা ডিজিটাল সার্ভিসের মাধ্যমে ব্যবসাকে সফল আধুনিক প্রযুক্তিতে বিশ্বস্ততার সাথে এগিয়ে নিয়ে যাই।</p>
                <div style="display: flex; gap: 12px; margin-top: 15px;">
                    <a href="https://wa.me/8801657043577" target="_blank" style="color: #25D366;" title="WhatsApp"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                    <a href="https://m.me/whatsupitech" target="_blank" style="color: #0084FF;" title="Messenger"><i class="fa-brands fa-facebook-messenger fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-facebook fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-youtube fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h5>গুরুত্বপূর্ণ লিংক</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">হোম</a></li>
                    <li><a href="{{ route('home') }}#about">আমাদের সম্পর্কে</a></li>
                    <li><a href="{{ route('home') }}#services">সার্ভিস সমূহ</a></li>
                    <li><a href="{{ route('home') }}#projects">ডেমো</a></li>
                    <li><a href="{{ route('home') }}#blogs">ব্লগ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>আমাদের সার্ভিস</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}#services">ওয়েবসাইট ডেভেলপমেন্ট</a></li>
                    <li><a href="{{ route('home') }}#services">ই-কমার্স সলিউশন</a></li>
                    <li><a href="{{ route('home') }}#services">মোবাইল অ্যাপ</a></li>
                    <li><a href="{{ route('home') }}#services">কাস্টম সফটওয়্যার</a></li>
                    <li><a href="{{ route('home') }}#services">ডিজিটাল মার্কেটিং</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>সহায়তা</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('support') }}">সাপোর্ট</a></li>
                    <li><a href="{{ route('privacy.policy') }}">গোপনীয়তা নীতি</a></li>
                    <li><a href="{{ route('terms.conditions') }}">শর্তাবলী</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>যোগাযোগ করুন</h5>
                <p><i class="fa-solid fa-location-dot"></i> হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২ ৩০</p>
                <p style="margin-top: 8px;"><i class="fa-solid fa-phone"></i> 01657-043577</p>
                <p style="margin-top: 8px;"><i class="fa-solid fa-envelope"></i> contact@whatsupitech.com</p>
                <p style="margin-top: 8px;"><i class="fa-solid fa-globe"></i> www.whatsupitech.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div>© {{ date('Y') }} WhatsUp i-Tech. সকল অধিকার সংরক্ষিত।</div>
            <div style="display: flex; gap: 20px;">
                <a href="{{ route('faq') }}" style="color: rgba(255,255,255,0.7); text-decoration: none;">FAQ</a>
                <a href="{{ route('support') }}" style="color: rgba(255,255,255,0.7); text-decoration: none;">সাপোর্ট</a>
                <a href="{{ route('privacy.policy') }}" style="color: rgba(255,255,255,0.7); text-decoration: none;">প্রাইভেসি পলিসি</a>
                <a href="{{ route('terms.conditions') }}" style="color: rgba(255,255,255,0.7); text-decoration: none;">শর্তাবলী</a>
            </div>
        </div>
    </div>
</footer>

@endsection
