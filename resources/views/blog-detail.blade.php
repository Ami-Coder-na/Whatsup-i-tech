@extends('layouts.app')

@section('content')

@php
    $siteSettings = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
    $logo = $siteSettings['site_logo'] ?? 'images/logo.png';
    $phone = $siteSettings['phone'] ?? '01657-043577';
    $phoneClean = preg_replace('/[^0-9]/', '', $phone);
    $waLink = $siteSettings['whatsapp'] ?? 'https://wa.me/8801657043577';
    $msgLink = $siteSettings['messenger'] ?? 'https://m.me/';
@endphp

<!-- Header Navbar -->
<header class="header">
    <div class="container navbar">
        <a href="{{ route('home') }}#hero" class="brand-logo" style="display: flex; align-items: center; text-decoration: none;">
            <img src="{{ asset($logo) }}" alt="WhatsUp i-Tech Logo" style="height: 52px; width: auto; object-fit: contain;">
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
            <a href="tel:{{ $phoneClean }}" class="phone-link">
                <i class="fa-solid fa-phone"></i> {{ $phone }}
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

<!-- Blog Header Hero -->
<section style="background: radial-gradient(circle at top right, #111d42 0%, #050b1e 60%); color: white; padding: 60px 0 45px; text-align: center; position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 107, 0, 0.15); border: 1px solid rgba(255, 107, 0, 0.3); color: var(--accent-orange); font-size: 13px; font-weight: 700; padding: 6px 16px; border-radius: 50px; margin-bottom: 16px;">
            <i class="fa-solid fa-folder-open"></i> {{ $blog->category ?? 'প্রযুক্তি ও ব্যবসায়িক আপডেট' }}
        </div>
        <h1 style="font-size: 32px; font-weight: 800; max-width: 850px; margin: 0 auto 16px; line-height: 1.35; color: #ffffff;">
            {{ $blog->title }}
        </h1>
        <div style="display: flex; align-items: center; justify-content: center; gap: 20px; color: #94a3b8; font-size: 14px; flex-wrap: wrap;">
            <span><i class="fa-regular fa-calendar-days" style="color: var(--accent-orange);"></i> {{ $blog->created_at ? $blog->created_at->format('d M, Y') : date('d M, Y') }}</span>
            <span><i class="fa-regular fa-eye" style="color: #38bdf8;"></i> {{ $blog->views ?? 0 }} ভিউজ</span>
            <span><i class="fa-regular fa-user" style="color: #10b981;"></i> অ্যাডমিন টিউটোরিয়াল</span>
        </div>
    </div>
</section>

<!-- Blog Main Details Content -->
<section class="section" style="background: #f8fafc; padding: 50px 0 70px;">
    <div class="container" style="display: grid; grid-template-columns: 2.3fr 1fr; gap: 35px;">
        
        <!-- Left Side: Blog Post Content -->
        <div style="background: white; border-radius: 20px; padding: 35px; border: 1px solid #e2e8f0; box-shadow: 0 4px 25px rgba(0,0,0,0.03);">
            
            <!-- Featured Image -->
            <div style="width: 100%; height: 380px; border-radius: 14px; overflow: hidden; margin-bottom: 30px; border: 1px solid #e2e8f0;">
                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

            <!-- Excerpt Callout Box -->
            @if($blog->excerpt)
            <div style="background: #f0f7ff; border-left: 4px solid var(--accent-blue); padding: 18px 22px; border-radius: 10px; margin-bottom: 30px; font-size: 16px; font-weight: 600; color: #1e3a8a; line-height: 1.6;">
                <i class="fa-solid fa-quote-left" style="font-size: 20px; color: var(--accent-blue); margin-right: 8px;"></i>
                {{ $blog->excerpt }}
            </div>
            @endif

            <!-- Main Content Area -->
            <div class="blog-details-body" style="font-size: 16px; line-height: 1.85; color: #334155;">
                {!! nl2br(e($blog->content ?? $blog->excerpt)) !!}
            </div>

            <!-- Social Share Bar -->
            <div style="border-top: 1px solid #e2e8f0; margin-top: 40px; padding-top: 25px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
                <div style="font-weight: 700; color: var(--text-dark); font-size: 15px;">
                    <i class="fa-solid fa-share-nodes" style="color: var(--accent-orange);"></i> সোশ্যাল মিডিয়ায় শেয়ার করুন:
                </div>
                <div style="display: flex; gap: 10px;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" style="background: #1877f2; color: white; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . url()->current()) }}" target="_blank" style="background: #25d366; color: white; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" target="_blank" style="background: #1da1f2; color: white; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($blog->title) }}" target="_blank" style="background: #0a66c2; color: white; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Back to Home CTA -->
            <div style="margin-top: 35px; text-align: center; background: #f8fafc; padding: 25px; border-radius: 14px; border: 1px border-dashed #cbd5e1;">
                <h4 style="font-size: 18px; font-weight: 800; color: var(--text-dark); margin-bottom: 8px;">আপনার ব্যবসার জন্য ওয়েবসাইট বা সফটওয়্যার দরকার?</h4>
                <p style="color: #64748b; font-size: 14px; margin-bottom: 18px;">আমাদের অভিজ্ঞ আইটি টিম আপনার স্বপ্ন পূরণ করতে প্রস্তুত।</p>
                <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('home') }}#contact" class="btn-primary" style="padding: 10px 24px;">প্রজেক্ট আলোচনা করুন <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="tel:{{ $phoneClean }}" class="btn-secondary" style="padding: 10px 24px; background: #050b1e; border: none;"><i class="fa-solid fa-phone"></i> কল করুন</a>
                </div>
            </div>

        </div>

        <!-- Right Side: Sidebar -->
        <div>
            <!-- Recent Blogs Box -->
            <div style="background: white; border-radius: 20px; padding: 25px; border: 1px solid #e2e8f0; margin-bottom: 25px; position: sticky; top: 90px;">
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: var(--text-dark); border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-fire" style="color: var(--accent-orange);"></i> সাম্প্রতিক ব্লগ সমূহ
                </h4>

                <div style="display: flex; flex-direction: column; gap: 18px;">
                    @forelse($recentBlogs as $rBlog)
                    <a href="{{ route('blog.detail', $rBlog->id) }}" style="display: flex; gap: 14px; text-decoration: none; align-items: center; group;">
                        <img src="{{ asset($rBlog->image) }}" alt="{{ $rBlog->title }}" style="width: 75px; height: 65px; border-radius: 10px; object-fit: cover; border: 1px solid #e2e8f0; flex-shrink: 0;">
                        <div>
                            <div style="font-size: 14px; font-weight: 700; color: var(--text-dark); line-height: 1.35; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; transition: color 0.2s;">
                                {{ $rBlog->title }}
                            </div>
                            <div style="font-size: 12px; color: #94a3b8; margin-top: 4px;">
                                <i class="fa-regular fa-calendar-days"></i> {{ $rBlog->created_at ? $rBlog->created_at->format('d M, Y') : date('d M, Y') }}
                            </div>
                        </div>
                    </a>
                    @empty
                    <p style="color: #94a3b8; font-size: 14px;">কোনো সাম্প্রতিক ব্লগ পাওয়া যায়নি।</p>
                    @endforelse
                </div>

                <!-- Need Help Box -->
                <div style="margin-top: 30px; background: radial-gradient(circle at top right, #111d42 0%, #050b1e 100%); color: white; padding: 22px; border-radius: 14px; text-align: center;">
                    <i class="fa-solid fa-headset" style="font-size: 32px; color: var(--accent-orange); margin-bottom: 12px;"></i>
                    <h5 style="font-size: 16px; font-weight: 800; margin-bottom: 6px;">জরুরী কোনো প্রশ্ন আছে?</h5>
                    <p style="font-size: 13px; color: #94a3b8; margin-bottom: 15px;">আমাদের কাস্টমার কেয়ার টিম সপ্তাহের ৭ দিনই ২৪ ঘণ্টা আপনার সেবায় নিয়োজিত।</p>
                    <a href="https://wa.me/{{ $phoneClean }}" target="_blank" class="btn-primary" style="width: 100%; justify-content: center; padding: 10px; font-size: 14px;">
                        <i class="fa-brands fa-whatsapp"></i> হোয়াটসঅ্যাপে মেসেজ
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
