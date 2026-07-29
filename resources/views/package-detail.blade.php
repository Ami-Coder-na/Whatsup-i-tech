@extends('layouts.app')

@section('content')

<!-- Header Navbar -->
<header class="header">
    <div class="container navbar">
        <a href="{{ route('home') }}#hero" class="brand-logo" style="display: flex; align-items: center; text-decoration: none;">
            <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 52px; width: auto; object-fit: contain;">
        </a>

        <ul class="nav-links">
            <li><a href="{{ route('home') }}">হোম</a></li>
            <li><a href="{{ route('home') }}#about">আমাদের সম্পর্কে</a></li>
            <li><a href="{{ route('home') }}#services">সার্ভিস সমূহ</a></li>
            <li><a href="{{ route('home') }}#packages" class="active">প্যাকেজ ও মূল্য</a></li>
            <li><a href="{{ route('home') }}#projects">ডেমো</a></li>
            <li><a href="{{ route('home') }}#blogs">ব্লগ</a></li>
            <li><a href="{{ route('home') }}#contact">যোগাযোগ</a></li>
        </ul>

        <div class="nav-right-actions">
            <a href="tel:01657043577" class="phone-link">
                <i class="fa-solid fa-phone"></i> 01657-043577
            </a>
            <a href="{{ route('home') }}#contact" class="btn-primary">
                ফ্রি কনসালটেশন নিন <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</header>

<!-- Package Header Banner -->
<section style="background: radial-gradient(circle at top right, #111d42 0%, #050b1e 60%); color: white; padding: 60px 0 50px; text-align: center;">
    <div class="container">
        <span style="color: var(--accent-orange); font-weight: 700; font-size: 14px; text-transform: uppercase;">প্যাকেজের বিস্তারিত</span>
        <h1 style="font-size: 38px; font-weight: 800; margin-top: 8px; margin-bottom: 12px;">{{ $package->name }}</h1>
        <p style="color: #94a3b8; font-size: 16px; max-width: 600px; margin: 0 auto;">{{ $package->badge }}</p>
    </div>
</section>

<!-- Package Detail Main Content -->
<section class="section" style="background: #f8fafc;">
    <div class="container" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
        
        <!-- Left Side: Full Feature List -->
        <div style="background: white; border-radius: 16px; padding: 40px; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #f1f5f9; padding-bottom: 24px; margin-bottom: 30px;">
                <div>
                    <span style="color: #ef4444; text-decoration: line-through; font-size: 18px; font-weight: 600;">নিয়মিত মূল্য: ৳{{ $package->original_price }}</span>
                    <div style="font-size: 36px; font-weight: 800; color: var(--accent-orange); margin-top: 4px;">
                        বিশেষ অফার মূল্য: ৳{{ $package->price }}
                    </div>
                </div>
                <div>
                    <a href="{{ route('home') }}#contact" class="btn-primary" style="padding: 14px 30px; font-size: 16px;">
                        অর্ডার করুন <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <h3 style="font-size: 22px; font-weight: 800; color: var(--text-dark); margin-bottom: 20px;">
                <i class="fa-solid fa-layer-group" style="color: var(--accent-blue);"></i> এই প্যাকেজে যা যা থাকছে:
            </h3>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 35px;">
                @foreach($package->features as $feature)
                <div style="display: flex; align-items: flex-start; gap: 12px; background: #f8fafc; padding: 14px 16px; border-radius: 10px; border: 1px solid #edf2f7;">
                    <i class="fa-solid fa-circle-check" style="color: #10b981; font-size: 18px; margin-top: 2px;"></i>
                    <span style="font-size: 14px; font-weight: 600; color: #334155;">{{ $feature }}</span>
                </div>
                @endforeach
            </div>

            <div style="background: #eff6ff; border-left: 4px solid var(--accent-blue); padding: 24px; border-radius: 12px;">
                <h4 style="font-size: 18px; font-weight: 800; color: #1e40af; margin-bottom: 8px;">
                    <i class="fa-solid fa-user-check"></i> কাদের জন্য উপযুক্ত?
                </h4>
                <p style="color: #1e3a8a; font-size: 15px; line-height: 1.6;">
                    {{ $package->badge }}
                </p>
            </div>

        </div>

        <!-- Right Side: Other Packages Sidebar -->
        <div>
            <div style="background: white; border-radius: 16px; padding: 30px; border: 1px solid #e2e8f0; position: sticky; top: 100px;">
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: var(--text-dark);">
                    অন্যান্য প্যাকেজ সমূহ
                </h4>

                <div style="display: flex; flex-direction: column; gap: 16px;">
                    @foreach($allPackages as $pkg)
                    <a href="{{ route('package.detail', $pkg->id) }}" style="display: block; padding: 18px; border-radius: 12px; border: 2px solid {{ $pkg->id == $package->id ? 'var(--accent-orange)' : '#f1f5f9' }}; background: {{ $pkg->id == $package->id ? '#fff7ed' : 'white' }}; transition: all 0.2s ease;">
                        <div style="font-weight: 700; font-size: 15px; color: var(--text-dark);">{{ $pkg->name }}</div>
                        <div style="font-size: 13px; color: var(--text-muted); margin-top: 4px;">{{ $pkg->badge }}</div>
                        <div style="font-size: 18px; font-weight: 800; color: var(--accent-orange); margin-top: 8px;">
                            ৳ {{ $pkg->price }}
                        </div>
                    </a>
                    @endforeach
                </div>

                <div style="margin-top: 25px; text-align: center;">
                    <a href="tel:01657043577" class="btn-secondary" style="width: 100%; justify-content: center; background: #050b1e; border: none;">
                        <i class="fa-solid fa-phone"></i> সরাসরি কল করুন
                    </a>
                </div>
            </div>
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
