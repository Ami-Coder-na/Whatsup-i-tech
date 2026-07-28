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
                <label class="form-label">ফেভিকন আপলোড (Favicon.ico)</label>
                <input type="file" name="favicon" class="form-input" accept="image/*">
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
@endsection
