@extends('layouts.admin')

@section('title', 'ওয়েবসাইট সেটিংস ও পলিসি ম্যানেজমেন্ট')

@section('admin_content')
<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <!-- Logo & Contact Info -->
        <div class="card">
            <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #007bff;">
                <i class="fa-solid fa-image"></i> লোগো, ফেভিকন ও কন্টাক্ট ইনফো
            </h3>

            <div class="form-group">
                <label class="form-label">ব্র্যান্ড লোগো আপলোড (Logo.png)</label>
                <input type="file" name="logo" class="form-input" accept="image/*">
                <div style="font-size: 12px; color: #64748b; margin-top: 4px;">বর্তমান লোগো: <img src="{{ asset('images/logo.png') }}" style="height: 30px; background: #0f172a; padding: 4px; border-radius: 4px;"></div>
            </div>

            <div class="form-group">
                <label class="form-label">ফেভিকন আপলোড (Favicon.ico / Favicon.png)</label>
                <input type="file" name="favicon" class="form-input" accept="image/*">
                @if(file_exists(public_path('images/favicon.ico')) || file_exists(public_path('favicon.ico')))
                <div style="font-size: 12px; color: #64748b; margin-top: 4px;">বর্তমান ফেভিকন: <img src="{{ asset('images/favicon.ico') }}?v={{ time() }}" style="height: 24px; width: 24px; object-fit: contain; background: #0f172a; padding: 2px; border-radius: 4px;"></div>
                @endif
            </div>

            <!-- Hero Banners Multiple Upload Section with Size Guidelines -->
            <div class="form-group" style="background: #f0f9ff; border: 1px solid #bae6fd; padding: 18px; border-radius: 12px; margin-bottom: 24px;">
                <label class="form-label" style="color: #0369a1; font-weight: 800; font-size: 15px;">
                    <i class="fa-solid fa-images"></i> হিরো সেকশন স্লাইডার ব্যানার আপলোড (Multiple Banner Images)
                </label>
                <input type="file" name="hero_banners[]" class="form-input" accept="image/*" multiple>
                
                <div style="background: #ffffff; border-radius: 8px; padding: 14px; margin-top: 12px; border: 1px dashed #0284c7; font-size: 13px; color: #0c4a6e; line-height: 1.6;">
                    <strong style="color: #0284c7;"><i class="fa-solid fa-circle-info"></i> ছবি আপলোডের সঠিক সাইজ নির্দেশিকা:</strong>
                    <ul style="margin-top: 6px; padding-left: 18px; margin-bottom: 0;">
                        <li><strong>সুপারিশকৃত সাইজ (Recommended Size):</strong> <code>1200 x 800 Pixels</code> (অনুপাত 3:2 বা 16:9)</li>
                        <li><strong>মাল্টিপল ফাইল সিলেক্ট:</strong> একসাথে একাধিক ব্যানার ইমেজ সিলেক্ট করে আপলোড করতে পারবেন।</li>
                        <li><strong>ফরম্যাট (Allowed Formats):</strong> <code>PNG, JPG, WEBP</code> (স্বচ্ছ ব্যাকগ্রাউন্ডের জন্য PNG সেরা)</li>
                        <li><strong>অটো-স্লাইড এনিমেশন:</strong> আপলোড করা সব ব্যানার হোমপেজে স্লাইডারে স্বয়ংক্রিয়ভাবে স্লাইড হতে থাকবে।</li>
                    </ul>
                </div>

                @php
                    $bannersJson = \App\Models\SiteSetting::where('key', 'hero_banners')->value('value');
                    $banners = $bannersJson ? json_decode($bannersJson, true) : [];
                    if (empty($banners)) {
                        $singleBanner = \App\Models\SiteSetting::where('key', 'hero_banner')->value('value');
                        $banners = [$singleBanner ?? 'images/hero-mockup.png'];
                    }
                @endphp
                <div style="margin-top: 15px;">
                    <div style="font-size: 13px; font-weight: 700; color: #0369a1; margin-bottom: 8px;">
                        বর্তমান স্লাইডার ব্যানারসমূহ ({{ count($banners) }}টি):
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                        @foreach($banners as $index => $b)
                        <div style="position: relative; background: #0f172a; padding: 6px; border-radius: 8px; border: 1px solid #cbd5e1;">
                            <img src="{{ asset($b) }}" style="width: 100%; height: 80px; object-fit: contain; border-radius: 4px;">
                            <a href="{{ route('admin.hero.banner.delete', $index) }}" onclick="return confirm('এই ব্যানারটি ডিলিট করতে চান?')" style="position: absolute; top: 4px; right: 4px; background: #ef4444; color: white; border: none; width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 11px; text-decoration: none;" title="Delete Banner">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label"><i class="fa-brands fa-whatsapp" style="color: #25D366;"></i> হোয়াটসঅ্যাপ নম্বর (WhatsApp Number / Link)</label>
                <input type="text" name="whatsapp_number" class="form-input" value="{{ $settings['whatsapp_number'] ?? '8801657043577' }}" placeholder="8801657043577">
            </div>

            <div class="form-group">
                <label class="form-label"><i class="fa-brands fa-facebook-messenger" style="color: #0084FF;"></i> মেসেঞ্জার লিংক (Messenger URL)</label>
                <input type="text" name="messenger_link" class="form-input" value="{{ $settings['messenger_link'] ?? 'https://m.me/whatsupitech' }}" placeholder="https://m.me/whatsupitech">
            </div>

            <div class="form-group">
                <label class="form-label">ফোন নম্বর (Phone Number)</label>
                <input type="text" name="phone" class="form-input" value="{{ $settings['phone'] ?? '01657-043577' }}" required>
            </div>

            <div class="form-group">
                <label class="form-label">ইমেইল এড্রেস (Email Address)</label>
                <input type="email" name="email" class="form-input" value="{{ $settings['email'] ?? 'contact@whatsupitech.com' }}" required>
            </div>

            <div class="form-group">
                <label class="form-label">অফিসের ঠিকানা (Office Address)</label>
                <textarea name="address" class="form-input" rows="2" required>{{ $settings['address'] ?? 'হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০' }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">ফেসবুক পেজ লিংক (Facebook URL)</label>
                <input type="url" name="facebook" class="form-input" value="{{ $settings['facebook'] ?? 'https://facebook.com' }}">
            </div>

            <div class="form-group">
                <label class="form-label">ইনস্টাগ্রাম লিংক (Instagram URL)</label>
                <input type="url" name="instagram" class="form-input" value="{{ $settings['instagram'] ?? 'https://instagram.com' }}">
            </div>

            <div class="form-group">
                <label class="form-label">ইউটিউব চ্যানেল লিংক (YouTube URL)</label>
                <input type="url" name="youtube" class="form-input" value="{{ $settings['youtube'] ?? 'https://youtube.com' }}">
            </div>

            <div class="form-group">
                <label class="form-label">লিঙ্কডইন লিংক (LinkedIn URL)</label>
                <input type="url" name="linkedin" class="form-input" value="{{ $settings['linkedin'] ?? 'https://linkedin.com' }}">
            </div>
        </div>

        <!-- Privacy Policy & Terms -->
        <div class="card">
            <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #ff5722;">
                <i class="fa-solid fa-file-contract"></i> প্রাইভেসি পলিসি ও শর্তাবলী
            </h3>

            <div class="form-group">
                <label class="form-label">FAQ (সাধারণ জিজ্ঞাসাসমূহ)</label>
                <textarea name="faq_content" class="form-input" rows="8" placeholder="FAQ প্রশ্ন ও উত্তরসমূহ লিখুন...">{{ $settings['faq_content'] ?? "প্রশ্ন: আপনাদের ই-কমার্স ওয়েবসাইটে কী কী ফিচার থাকে?\nউত্তর: আমাদের ওয়েবসাইটে সম্পূর্ণ রেসপন্সিভ ডিজাইন, অ্যাডমিন প্যানেল, স্টক ম্যানেজমেন্ট, ওটিপি ভেরিফিকেশন ও কুরিয়ার ইন্টিগ্রেশন থাকে।" }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Support Page Content (সাপোর্ট পেজের তথ্য)</label>
                <textarea name="support_content" class="form-input" rows="8" placeholder="কাস্টমার সাপোর্ট টিমের তথ্য লিখুন...">{{ $settings['support_content'] ?? "আমাদের ২৪/৭ কাস্টমার সাপোর্ট টিমের সাথে সরাসরি যোগাযোগ করুন:\n\nফোন: 01657-043577\nইমেইল: support@whatsupitech.com\nঅফিস: হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০" }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Privacy Policy (গোপনীয়তা নীতি)</label>
                <textarea name="privacy_policy" class="form-input" rows="8" placeholder="প্রাইভেসি পলিসির লেখা লিখুন...">{{ $settings['privacy_policy'] ?? 'WhatsUp i-Tech কাস্টমারের তথ্যের গোপনীয়তা রক্ষা করতে প্রতিশ্রুতিবদ্ধ।' }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Terms & Conditions (শর্তাবলী)</label>
                <textarea name="terms_conditions" class="form-input" rows="8" placeholder="শর্তাবলী লিখুন...">{{ $settings['terms_conditions'] ?? 'আমাদের সেবা গ্রহণের পূর্বে সকল নিয়ম ও শর্তাবলী ভালোভাবে পড়ে নিন।' }}</textarea>
            </div>

            <button type="submit" class="btn-submit" style="width: 100%; padding: 14px; font-size: 16px;">
                <i class="fa-solid fa-floppy-disk"></i> সকল সেটিংস সংরক্ষণ করুন
            </button>
        </div>

    </div>
</form>

<!-- Admin Credentials Change Section -->
@php
    $currentAdminUsername = \App\Models\SiteSetting::where('key', 'admin_username')->value('value') ?? 'admin';
@endphp
<div class="card" style="margin-top: 30px; border-left: 5px solid #6366f1;">
    <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #6366f1;">
        <i class="fa-solid fa-user-shield"></i> অ্যাডমিন লগইন তথ্য পরিবর্তন (Admin Credentials)
    </h3>
    
    <form action="{{ route('admin.credentials.update') }}" method="POST">
        @csrf
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div class="form-group">
                <label class="form-label">ইউজারনেম (Admin Username)</label>
                <input type="text" name="username" class="form-input" value="{{ $currentAdminUsername }}" required placeholder="admin">
            </div>

            <div class="form-group">
                <label class="form-label">বর্তমান পাসওয়ার্ড (Current Password)</label>
                <input type="password" name="current_password" class="form-input" required placeholder="বর্তমান পাসওয়ার্ড দিন">
            </div>

            <div class="form-group">
                <label class="form-label">নতুন পাসওয়ার্ড (New Password - পরিবর্তন না চাইলে খালি রাখুন)</label>
                <input type="password" name="new_password" class="form-input" placeholder="নতুন পাসওয়ার্ড (ঐচ্ছিক)">
            </div>
        </div>

        <button type="submit" class="btn-submit" style="background: linear-gradient(135deg, #6366f1, #4f46e5); padding: 12px 24px; font-size: 15px;">
            <i class="fa-solid fa-key"></i> ইউজারনেম ও পাসওয়ার্ড আপডেট করুন
        </button>
    </form>
</div>
@endsection
