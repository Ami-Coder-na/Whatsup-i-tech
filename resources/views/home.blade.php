@extends('layouts.app')

@section('content')

<!-- Top Announcement Bar -->
<div class="top-bar">
    <div class="container top-bar-content">
        <div class="top-bar-left">
            <span>বাংলাদেশ সেরা ডিজিটাল সার্ভিসেস প্ল্যাটফর্ম</span>
        </div>
        <div class="top-bar-right">
            <a href="#"><i class="fa-solid fa-headset"></i> সাপোর্ট</a>
            <a href="#"><i class="fa-solid fa-briefcase"></i> ক্যারিয়ার</a>
            <a href="#"><i class="fa-solid fa-blog"></i> ব্লগ</a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</div>

<!-- Header Navbar -->
<header class="header">
    <div class="container navbar">
        <a href="#hero" class="brand-logo" style="display: flex; align-items: center; text-decoration: none;">
            <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 52px; width: auto; object-fit: contain; filter: brightness(0) invert(1);">
        </a>

        <ul class="nav-links">
            <li><a href="#" class="active">হোম</a></li>
            <li><a href="#about">আমাদের সম্পর্কে</a></li>
            <li><a href="#services">সার্ভিস সমূহ</a></li>
            <li><a href="#packages">প্যাকেজ ও মূল্য</a></li>
            <li><a href="#projects">ডেমো</a></li>
            <li><a href="#blogs">ব্লগ</a></li>
            <li><a href="#contact">যোগাযোগ</a></li>
        </ul>

        <div class="nav-right-actions">
            <a href="tel:01657043577" class="phone-link">
                <i class="fa-solid fa-phone"></i> 01657-043577
            </a>
            <a href="#contact" class="btn-primary">
                ফ্রি কনসালটেশন নিন <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="container hero-grid">
        <div class="hero-content">
            <h1>আপনার ব্যবসাকে ডিজিটাল দুনিয়ায় নিয়ে যান <span>আমাদের সাথে</span></h1>
            <p>আমরা ফিচার-সমৃদ্ধ প্রযুক্তি ও সৃজনশীলতার সাহায্যে এমন ডিজিটাল সমাধান, যা ব্যবসার অগ্রগতি দ্রুত নিশ্চিত করবে।</p>
            <div class="hero-buttons">
                <a href="#services" class="btn-primary">অর্ডার সার্ভিস সমূহ <i class="fa-solid fa-arrow-right"></i></a>
                <a href="tel:01657043577" class="btn-secondary"><i class="fa-solid fa-phone"></i> কল করুন</a>
            </div>
            <div class="trust-badge">
                <div class="avatar-group">
                    <img src="https://i.pravatar.cc/100?img=33" alt="Client">
                    <img src="https://i.pravatar.cc/100?img=47" alt="Client">
                    <img src="https://i.pravatar.cc/100?img=12" alt="Client">
                </div>
                <div class="trust-text">১৫০+ ব্যবসার প্রতিষ্ঠান আমাদের ওপর বিশ্বস্ত</div>
            </div>
        </div>
        <div class="hero-media">
            <img src="{{ asset('images/hero-mockup.png') }}" alt="WhatsUp I-Tech Mockup">
        </div>
    </div>
</section>

<!-- Stats Bar -->
<div class="container">
    <div class="stats-bar">
        <div class="stat-item">
            <div class="stat-icon"><i class="fa-solid fa-calendar-check"></i></div>
            <div>
                <div class="stat-num">৬+</div>
                <div class="stat-desc">বছর ধরে আমরা</div>
            </div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><i class="fa-solid fa-globe"></i></div>
            <div>
                <div class="stat-num">৮+</div>
                <div class="stat-desc">দেশের প্রজেক্ট</div>
            </div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div>
                <div class="stat-num">১০০+</div>
                <div class="stat-desc">ইস্যু ফ্রি গ্রান্টি</div>
            </div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><i class="fa-solid fa-headset"></i></div>
            <div>
                <div class="stat-num">২৪/৭</div>
                <div class="stat-desc">সাপোর্ট সার্ভিস</div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">আমাদের সার্ভিসের সমূহ</span>
            <h2 class="section-title">আপনার ব্যবসার জন্য আমাদের সেরা সার্ভিস</h2>
        </div>
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i class="fa-solid {{ $service->icon }}"></i>
                </div>
                <h3 class="service-title">{{ $service->title }}</h3>
                <p class="service-desc">{{ $service->description }}</p>
                <a href="{{ $service->link }}" class="service-link">বিস্তারিত দেখুন <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section id="about" class="section why-us-section">
    <div class="container why-us-grid">
        <div class="why-us-images">
            <img src="{{ asset('images/team.png') }}" alt="Our Team">
            <div class="experience-badge">
                <h3>৮+</h3>
                <div>বছরের অভিজ্ঞতা</div>
            </div>
        </div>
        <div>
            <span class="section-subtitle">কেন আমাদের বেছে নেবেন?</span>
            <h2 class="section-title">আমরা দেই প্রযুক্তির সেরা সমাধান</h2>
            <p style="color: #64748b; margin-top: 10px; font-size: 15px;">WhatsUp i-Tech একটি অনুভূতিশীল ডিজিটাল সার্ভিসেস এজেন্সি। আমরা নিশ্চিত করি, প্রতিটি প্রযুক্তি আপনার ব্যবসার প্রয়োজন মেনে উন্নত রূপ পাবে।</p>

            <ul class="why-us-list">
                <li><i class="fa-solid fa-circle-check"></i> অভিজ্ঞ ও দক্ষ টিম</li>
                <li><i class="fa-solid fa-circle-check"></i> সময়মতো প্রজেক্ট ডেলিভারি</li>
                <li><i class="fa-solid fa-circle-check"></i> লাইফটাইম বা ২৪/৭ সার্ভিস</li>
                <li><i class="fa-solid fa-circle-check"></i> ২৪/৭ সাপোর্ট</li>
                <li><i class="fa-solid fa-circle-check"></i> ক্লায়েন্ট সন্তুষ্টি আমাদের অগ্রাধিকার</li>
                <li><i class="fa-solid fa-circle-check"></i> সিকিউর কোডিং ও স্পিড অপ্টিমাইজেশন</li>
            </ul>

            <div class="callout-box">
                <h4>আপনার আইডিয়া আছে?</h4>
                <p>আমরা আছি আপনার আইডিয়াকে বাস্তব রূপ দিতে!</p>
                <div>
                    <a href="#contact" class="btn-primary">ফ্রি কনসালটেশন নিন <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Demo Section -->
<section id="projects" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">আমাদের তৈরি ডেমো সমূহ</span>
            <h2 class="section-title">ক্যাটাগরি অনুযায়ী ডেমো দেখুন</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px;">
            @foreach($demoCategories as $cat)
            <div class="demo-cat-card" onclick="openDemoModal('{{ $cat['id'] }}')" style="background: white; border-radius: 16px; overflow: hidden; border: 1px solid #e2e8f0; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <div style="height: 160px; background: #0f172a; position: relative; overflow: hidden;">
                    <img src="{{ asset($cat['image']) }}" alt="{{ $cat['title'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 12px; right: 12px; background: rgba(0,0,0,0.7); backdrop-filter: blur(4px); color: white; padding: 4px 10px; border-radius: 20px; font-size: 11px; font-weight: 700;">
                        {{ count($cat['demos']) }}টি ডেমো
                    </div>
                </div>
                <div style="padding: 20px; text-align: center;">
                    <div style="width: 44px; height: 44px; border-radius: 12px; background: #eff6ff; color: #007bff; display: flex; align-items: center; justify-content: center; margin: -40px auto 12px; position: relative; z-index: 2; box-shadow: 0 4px 10px rgba(0,0,0,0.1); font-size: 20px;">
                        <i class="fa-solid {{ $cat['icon'] }}"></i>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 800; color: var(--text-dark); margin-bottom: 4px;">{{ $cat['title'] }}</h3>
                    <p style="font-size: 12px; color: var(--text-muted); margin-bottom: 15px;">{{ $cat['subtitle'] }}</p>
                    <button class="btn-primary" style="padding: 8px 16px; font-size: 13px; width: 100%; justify-content: center;">
                        লাইভ ডেমো দেখুন <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Demo Modal -->
<div id="demoModal" style="display: none; position: fixed; inset: 0; background: rgba(5, 11, 30, 0.85); backdrop-filter: blur(6px); z-index: 9999; align-items: center; justify-content: center;">
    <div style="background: white; border-radius: 20px; max-width: 600px; width: 90%; padding: 35px; position: relative; box-shadow: 0 25px 50px rgba(0,0,0,0.3); animation: modalFade 0.3s ease;">
        <button onclick="closeDemoModal()" style="position: absolute; top: 20px; right: 20px; background: #f1f5f9; border: none; width: 36px; height: 36px; border-radius: 50%; cursor: pointer; font-size: 16px; color: #64748b;">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div id="modalHeader"></div>
        <div id="modalDemosList" style="display: flex; flex-direction: column; gap: 14px; margin-top: 24px;"></div>
    </div>
</div>

<script>
    const demoData = @json($demoCategories);

    function openDemoModal(catId) {
        const cat = demoData.find(c => c.id === catId);
        if (!cat) return;

        const headerHtml = `
            <div style="display: flex; align-items: center; gap: 14px;">
                <div style="width: 50px; height: 50px; border-radius: 12px; background: #eff6ff; color: #007bff; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                    <i class="fa-solid ${cat.icon}"></i>
                </div>
                <div>
                    <h3 style="font-size: 22px; font-weight: 800; color: var(--text-dark);">${cat.title}</h3>
                    <p style="font-size: 13px; color: var(--text-muted);">${cat.subtitle}</p>
                </div>
            </div>
        `;

        let demosHtml = '';
        cat.demos.forEach((demo, idx) => {
            demosHtml += `
                <div style="display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border: 1px solid #e2e8f0; padding: 16px 20px; border-radius: 12px; transition: all 0.2s ease;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="font-weight: 800; font-size: 15px; color: var(--text-dark);">${demo.name}</span>
                            <span style="background: #ff5722; color: white; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 10px;">${demo.badge}</span>
                        </div>
                        <div style="font-size: 12px; color: #64748b; margin-top: 2px;">প্রিমিয়াম টেস্ট ও ফিচার ডেমো</div>
                    </div>
                    <a href="${demo.url}" target="_blank" class="btn-primary" style="padding: 8px 18px; font-size: 13px; text-decoration: none;">
                        লাইভ সাইট দেখুন <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            `;
        });

        document.getElementById('modalHeader').innerHTML = headerHtml;
        document.getElementById('modalDemosList').innerHTML = demosHtml;
        document.getElementById('demoModal').style.display = 'flex';
    }

    function closeDemoModal() {
        document.getElementById('demoModal').style.display = 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('demoModal');
        if (event.target === modal) {
            closeDemoModal();
        }
    }
</script>

<!-- Packages Section -->
<section id="packages" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">প্যাকেজ ও মূল্য</span>
            <h2 class="section-title">আপনার বাজেট অনুযায়ী সেরা প্যাকেজ</h2>
        </div>
        <div class="packages-grid">
            @foreach($packages as $pkg)
            <div class="package-card {{ $pkg->is_popular ? 'popular' : '' }}">
                <div>
                    @if($pkg->is_popular)
                    <div class="popular-badge">জনপ্রিয়</div>
                    @endif
                    <div class="pkg-name">{{ $pkg->name }}</div>
                    <div class="pkg-badge">{{ $pkg->badge }}</div>
                    <div class="pkg-price">৳ {{ $pkg->price }} <span>৳ {{ $pkg->original_price }}</span></div>
                    <ul class="pkg-features">
                        @foreach(array_slice($pkg->features, 0, 6) as $feature)
                        <li><i class="fa-solid fa-circle-check"></i> {{ $feature }}</li>
                        @endforeach
                    </ul>
                    @if(count($pkg->features) > 6)
                    <div style="font-size: 13px; color: var(--accent-orange); font-weight: 700; margin-bottom: 20px; text-align: center;">
                        + আরও {{ count($pkg->features) - 6 }}টি ফিচার রয়েছে
                    </div>
                    @endif
                </div>
                <div style="text-align: center; margin-top: auto; padding-top: 15px;">
                    <a href="{{ route('package.detail', $pkg->id) }}" class="btn-primary" style="width: 100%; justify-content: center;">প্যাকেজের বিস্তারিত দেখুন <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section" style="background: white;">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">কাজের কর্মপ্রক্রিয়া</span>
            <h2 class="section-title">আমরা যেভাবে কাজ করি</h2>
        </div>
        <div class="process-grid">
            <div class="process-step">
                <div class="process-num">১</div>
                <div class="process-title">রিকোয়ারমেন্ট বিশ্লেষণ</div>
                <div class="process-desc">আপনার প্রজেক্টের ধারণা ভালোভাবে জেনে নেয়া।</div>
            </div>
            <div class="process-step">
                <div class="process-num">২</div>
                <div class="process-title">প্ল্যানিং</div>
                <div class="process-desc">কাজের রোডম্যাপ তৈরি করা।</div>
            </div>
            <div class="process-step">
                <div class="process-num">৩</div>
                <div class="process-title">ডিজাইন</div>
                <div class="process-desc">ইউজার ফ্রেন্ডলি ইন্টারফেস তৈরি করা।</div>
            </div>
            <div class="process-step">
                <div class="process-num">৪</div>
                <div class="process-title">ডেভেলপমেন্ট</div>
                <div class="process-desc">কোডিং ও ডেভেলপমেন্ট কাজ করা।</div>
            </div>
            <div class="process-step">
                <div class="process-num">৫</div>
                <div class="process-title">টেস্টিং</div>
                <div class="process-desc">সবকিছু ঠিকমতো টেস্ট করা।</div>
            </div>
            <div class="process-step">
                <div class="process-num">৬</div>
                <div class="process-title">ডেলিভারি ও সাপোর্ট</div>
                <div class="process-desc">সময়মতো প্রজেক্ট ও সাপোর্ট দেয়া।</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">ক্লায়েন্টদের প্রতিক্রিয়া</span>
            <h2 class="section-title">আমাদের ক্লায়েন্টের মতামত</h2>
        </div>
        <div class="testimonials-grid">
            @foreach($testimonials as $t)
            <div class="testimonial-card">
                <div class="stars">
                    @for($i=0; $i<$t->rating; $i++)
                    <i class="fa-solid fa-star"></i>
                    @endfor
                </div>
                <p class="testimonial-comment">"{{ $t->comment }}"</p>
                <div class="client-info">
                    <img src="https://i.pravatar.cc/100?img={{ $loop->index + 20 }}" class="client-avatar" alt="{{ $t->name }}">
                    <div>
                        <div class="client-name">{{ $t->name }}</div>
                        <div class="client-role">{{ $t->designation }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Blogs -->
<section id="blogs" class="section" style="background: white;">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">আমাদের ব্লগ</span>
            <h2 class="section-title">সাম্প্রতিক ব্লগ পোস্ট</h2>
        </div>
        <div class="blogs-grid">
            @foreach($blogs as $blog)
            <div class="blog-card">
                <div class="blog-img">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                    <div class="blog-badge">
                        {{ $blog->category }} | {{ $blog->views }}
                    </div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">{{ $blog->title }}</h3>
                    <p class="blog-excerpt">{{ $blog->excerpt }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="section" style="background: #f8fafc; padding-top: 60px;">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">আমাদের ফটো গ্যালারি</span>
            <h2 class="section-title">গ্যালারি</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;">
            <div class="gallery-item" onclick="openLightbox('/images/gal1.png', 'আমাদের আধুনিক অফিস পরিবেশ')" style="position: relative; border-radius: 16px; overflow: hidden; height: 240px; cursor: pointer; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                <img src="{{ asset('images/gal1.png') }}" alt="Gallery 1" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                <div class="gallery-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5,11,30,0.85) 0%, transparent 60%); display: flex; flex-direction: column; justify-content: flex-end; padding: 20px; color: white; opacity: 0; transition: opacity 0.3s ease;">
                    <div style="font-weight: 700; font-size: 16px;">আমাদের আধুনিক অফিস পরিবেশ</div>
                    <div style="font-size: 12px; color: #94a3b8;">WhatsUp I-Tech Workspace</div>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('/images/gal2.png', 'টিম মিটিং ও প্রজেক্ট আলোচনা')" style="position: relative; border-radius: 16px; overflow: hidden; height: 240px; cursor: pointer; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                <img src="{{ asset('images/gal2.png') }}" alt="Gallery 2" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                <div class="gallery-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5,11,30,0.85) 0%, transparent 60%); display: flex; flex-direction: column; justify-content: flex-end; padding: 20px; color: white; opacity: 0; transition: opacity 0.3s ease;">
                    <div style="font-weight: 700; font-size: 16px;">টিম মিটিং ও প্রজেক্ট আলোচনা</div>
                    <div style="font-size: 12px; color: #94a3b8;">Brainstorming & Planning</div>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('/images/team.png', 'দক্ষ ও প্রফেশনাল ডেভেলপমেন্ট টিম')" style="position: relative; border-radius: 16px; overflow: hidden; height: 240px; cursor: pointer; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                <img src="{{ asset('images/team.png') }}" alt="Gallery 3" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                <div class="gallery-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5,11,30,0.85) 0%, transparent 60%); display: flex; flex-direction: column; justify-content: flex-end; padding: 20px; color: white; opacity: 0; transition: opacity 0.3s ease;">
                    <div style="font-weight: 700; font-size: 16px;">দক্ষ ও প্রফেশনাল ডেভেলপমেন্ট টিম</div>
                    <div style="font-size: 12px; color: #94a3b8;">Developer Workstation</div>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('/images/hero-mockup.png', 'ডিজিটাল সলিউশন ও মকআপ ড্যাশবোর্ড')" style="position: relative; border-radius: 16px; overflow: hidden; height: 240px; cursor: pointer; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                <img src="{{ asset('images/hero-mockup.png') }}" alt="Gallery 4" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                <div class="gallery-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5,11,30,0.85) 0%, transparent 60%); display: flex; flex-direction: column; justify-content: flex-end; padding: 20px; color: white; opacity: 0; transition: opacity 0.3s ease;">
                    <div style="font-weight: 700; font-size: 16px;">ডিজিটাল সলিউশন ও মকআপ ড্যাশবোর্ড</div>
                    <div style="font-size: 12px; color: #94a3b8;">Software Design Portfolio</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightboxModal" style="display: none; position: fixed; inset: 0; background: rgba(5, 11, 30, 0.9); backdrop-filter: blur(8px); z-index: 99999; align-items: center; justify-content: center; padding: 20px;" onclick="closeLightbox()">
    <div style="position: relative; max-width: 900px; width: 100%; text-align: center;" onclick="event.stopPropagation()">
        <button onclick="closeLightbox()" style="position: absolute; top: -45px; right: 0; background: rgba(255,255,255,0.2); border: none; width: 36px; height: 36px; border-radius: 50%; color: white; font-size: 18px; cursor: pointer;">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img id="lightboxImg" src="" alt="Full Preview" style="max-width: 100%; max-height: 80vh; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        <div id="lightboxCaption" style="color: white; margin-top: 15px; font-size: 18px; font-weight: 700;"></div>
    </div>
</div>

<style>
    .gallery-item:hover img {
        transform: scale(1.08);
    }
    .gallery-item:hover .gallery-overlay {
        opacity: 1 !important;
    }
</style>

<script>
    function openLightbox(imgSrc, caption) {
        document.getElementById('lightboxImg').src = imgSrc;
        document.getElementById('lightboxCaption').innerText = caption;
        document.getElementById('lightboxModal').style.display = 'flex';
    }
    function closeLightbox() {
        document.getElementById('lightboxModal').style.display = 'none';
    }
</script>

<!-- Contact Form Banner -->
<section id="contact" class="section" style="padding-top: 10px;">
    <div class="container">
        <div class="contact-section">
            <div class="contact-grid">
                <div>
                    <h2 style="font-size: 34px; font-weight: 800; margin-bottom: 12px; line-height: 1.2;">আপনার প্রকল্প নিয়ে কথা বলুন</h2>
                    <p style="color: #94a3b8; font-size: 15px; margin-bottom: 28px;">আমরা আপনার আইটি প্রয়োজন সম্পূর্ণ সমাধান দিতে প্রস্তুত!</p>
                    <div style="display: flex; gap: 20px; align-items: center;">
                        <a href="#contact" class="btn-primary" style="padding: 12px 24px;">যোগাযোগ করুন <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="tel:01657043577" style="color: white; font-weight: 700; font-size: 16px; display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-phone" style="color: var(--accent-orange);"></i> 01657-043577</a>
                    </div>
                </div>
                <div>
                    <form id="contactForm" class="contact-form">
                        <div id="formAlert" style="display: none; padding: 10px; border-radius: 6px; font-size: 14px;"></div>
                        <div class="form-row">
                            <input type="text" name="name" class="form-input" placeholder="আপনার নাম" required>
                            <input type="email" name="email" class="form-input" placeholder="আপনার ইমেইল" required>
                            <input type="text" name="phone" class="form-input" placeholder="আপনার ফোন নম্বর" required>
                        </div>
                        <textarea name="message" class="form-input" rows="3" placeholder="আপনার বার্তা লিখুন..."></textarea>
                        <button type="submit" class="btn-submit">মেসেজ পাঠান</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <a href="#hero" style="display: block; margin-bottom: 20px;">
                    <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 55px; width: auto; object-fit: contain; filter: brightness(0) invert(1);">
                </a>
                <p>আমরা ডিজিটাল সার্ভিসের মাধ্যমে ব্যবসাকে সফল আধুনিক প্রযুক্তিতে বিশ্বস্ততার সাথে এগিয়ে নিয়ে যাই।</p>
                <div style="display: flex; gap: 12px; margin-top: 15px;">
                    <a href="#" style="color: white;"><i class="fa-brands fa-facebook fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-youtube fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fa-brands fa-instagram fa-lg"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h5>গুরুত্বপূর্ণ লিংক</h5>
                <ul class="footer-links">
                    <li><a href="#">হোম</a></li>
                    <li><a href="#about">আমাদের সম্পর্কে</a></li>
                    <li><a href="#services">সার্ভিস সমূহ</a></li>
                    <li><a href="#projects">ডেমো</a></li>
                    <li><a href="#blogs">প্রয়োজনীয়</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>আমাদের সার্ভিস</h5>
                <ul class="footer-links">
                    <li><a href="#">ওয়েবসাইট ডেভেলপমেন্ট</a></li>
                    <li><a href="#">ই-কমার্স সলিউশন</a></li>
                    <li><a href="#">মোবাইল অ্যাপ</a></li>
                    <li><a href="#">কাস্টম সফটওয়্যার</a></li>
                    <li><a href="#">ডিজিটাল মার্কেটিং</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>সহায়তা</h5>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">সাপোর্ট</a></li>
                    <li><a href="#">গোপনীয়তা নীতি</a></li>
                    <li><a href="#">শর্তাবলী</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>যোগাযোগ করুন</h5>
                <p><i class="fa-solid fa-location-dot"></i> হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০</p>
                <p style="margin-top: 8px;"><i class="fa-solid fa-phone"></i> 01657-043577</p>
                <p style="margin-top: 8px;"><i class="fa-solid fa-envelope"></i> contact@whatsupitech.com</p>
                <p style="margin-top: 8px;"><i class="fa-solid fa-globe"></i> www.whatsupitech.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div>© {{ date('Y') }} WhatsUp i-Tech. সকল অধিকার সংরক্ষিত।</div>
            <div style="display: flex; gap: 20px;">
                <a href="{{ route('privacy.policy') }}" style="color: rgba(255,255,255,0.7); text-decoration: none;">প্রাইভেসি পলিসি</a>
                <a href="{{ route('terms.conditions') }}" style="color: rgba(255,255,255,0.7); text-decoration: none;">শর্তাবলী</a>
            </div>
        </div>
    </div>
</footer>

@endsection
