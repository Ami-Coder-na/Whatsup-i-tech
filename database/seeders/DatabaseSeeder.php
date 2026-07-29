<?php

namespace Database\Seeders;

use Illuminate\Database::Seeder;
use App\Models\Service;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\DemoCategory;
use App\Models\DemoLink;
use App\Models\Gallery;
use App\Models\SiteSetting;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Services
        if (Service::count() == 0) {
            Service::create([
                'title' => 'ওয়েবসাইট ডেভেলপমেন্ট',
                'subtitle' => 'আকর্ষণীয় ও দ্রুতগতির ওয়েবসাইট',
                'description' => 'কাস্টম কোডিং ও আধুনিক ডিজাইনে সেরা পারফরম্যান্সযুক্ত প্রফেশনাল ওয়েবসাইট সমাধান।',
                'icon' => 'fa-laptop-code',
                'color' => '#00A8FF',
                'link' => '#projects',
                'sort_order' => 1
            ]);
            Service::create([
                'title' => 'ই-কমার্স সলিউশন',
                'subtitle' => 'সম্পূর্ণ অনলাইন শপ সেটআপ',
                'description' => 'পেমেন্ট গেটওয়ে, ওটিপি, ইনভেন্টরি ও ফাস্ট চেকআউট সহ রেডি ই-কমার্স প্ল্যাটফর্ম।',
                'icon' => 'fa-cart-shopping',
                'color' => '#FF5722',
                'link' => '#projects',
                'sort_order' => 2
            ]);
            Service::create([
                'title' => 'মোবাইল অ্যাপস ডেভেলপমেন্ট',
                'subtitle' => 'Android ও iOS অ্যাপস',
                'description' => 'আপনার ব্যবসার জন্য ইউজার ফ্রেন্ডলি এবং হাই-পারফরম্যান্স মোবাইল অ্যাপ্লিকেশন।',
                'icon' => 'fa-mobile-screen-button',
                'color' => '#10B981',
                'link' => '#projects',
                'sort_order' => 3
            ]);
            Service::create([
                'title' => 'কাস্টম সফটওয়্যার',
                'subtitle' => 'বিজনেস অটোমেশন সলিউশন',
                'description' => 'ইনভেন্টরি, হিসাব-নিকাশ ও ম্যানেজমেন্ট অটোমেশনের জন্য কাস্টম সফটওয়্যার সমাধান।',
                'icon' => 'fa-gears',
                'color' => '#8B5CF6',
                'link' => '#projects',
                'sort_order' => 4
            ]);
        }

        // Seed Packages
        if (Package::count() == 0) {
            Package::create([
                'name' => 'স্টার্টার প্যাকেজ',
                'badge' => 'ছোট ব্যবসার জন্য',
                'price' => '৳৩,৯৯৯',
                'original_price' => '৳৬,০০০',
                'is_popular' => false,
                'features' => ['৫ পৃষ্ঠার প্রফেশনাল ওয়েবসাইট', '১ বছরের ফ্রি ডোমেইন ও হোস্টিং', 'মোবাইল ফ্রেন্ডলি রেসপন্সিভ', 'লাইভ চ্যাট ও হোয়াটসঅ্যাপ বাটন', '১৫ দিনে ডেলিভারি']
            ]);
            Package::create([
                'name' => 'বিজনেস ই-কমার্স',
                'badge' => 'সর্বাধিক জনপ্রিয়',
                'price' => '৳৭,৯৯৯',
                'original_price' => '৳১২,০০০',
                'is_popular' => true,
                'features' => ['সম্পূর্ণ ই-কমার্স ওয়েবসাইট', 'আনলিমিটেড প্রোডাক্ট যুক্ত করার সুবিধা', 'অনলাইন পেমেন্ট গেটওয়ে সেটআপ', 'ইনভেন্টরি ও অর্ডার ম্যানেজমেন্ট', 'অ্যাডমিন প্যানেল ট্রেনিং ও সাপোর্ট']
            ]);
            Package::create([
                'name' => 'এন্টারপ্রাইজ প্যাকেজ',
                'badge' => 'কাস্টম সমাধান',
                'price' => '৳১৪,৯৯৯',
                'original_price' => '৳২০,০০০',
                'is_popular' => false,
                'features' => ['কাস্টম সফটওয়্যার / অ্যান্ড্রয়েড অ্যাপ', 'হাই-স্পিড ডেডিকেটেড সার্ভার সেটআপ', 'কাস্টম ড্যাশবোর্ড ও রিপোর্ট', '২৪/৭ প্রাইওরিটি কাস্টমার সাপোর্ট', '১ বছরের ফ্রী মেইনটেন্যান্স']
            ]);
        }

        // Seed Demo Categories
        if (DemoCategory::count() == 0) {
            $cat1 = DemoCategory::create([
                'cat_key' => 'ecommerce',
                'title' => 'ই-কমার্স ওয়েবসাইট',
                'subtitle' => 'অনলাইন শপিং ও ক্যাশ অন ডেলিভারি',
                'icon' => 'fa-cart-shopping',
                'image' => '/images/demo-ecommerce.png',
                'sort_order' => 1
            ]);
            DemoLink::create(['demo_category_id' => $cat1->id, 'name' => 'ফ্যাশন ও ক্লদিং স্টোর', 'url' => 'https://fashion-demo.whatsupitech.com', 'badge' => 'Popular']);
            DemoLink::create(['demo_category_id' => $cat1->id, 'name' => 'ইলেকট্রনিক্স ও গ্যাজেট শপ', 'url' => 'https://gadget-demo.whatsupitech.com', 'badge' => 'Hot']);

            $cat2 = DemoCategory::create([
                'cat_key' => 'corporate',
                'title' => 'কর্পোরেট ও এজেন্সী',
                'subtitle' => 'কোম্পানি পরিচিতি ও সার্ভিস প্ল্যাটফর্ম',
                'icon' => 'fa-building',
                'image' => '/images/demo-corporate.png',
                'sort_order' => 2
            ]);
            DemoLink::create(['demo_category_id' => $cat2->id, 'name' => 'আইটি সার্ভিসেস কোম্পানি', 'url' => 'https://agency-demo.whatsupitech.com', 'badge' => 'New']);
        }

        // Seed Blogs
        if (Blog::count() == 0) {
            Blog::create([
                'title' => 'ই-কমার্স ব্যবসা শুরু করার সম্পূর্ণ গাইড',
                'category' => 'ই-কমার্স',
                'views' => '১.৫k',
                'image' => '/images/blog1.png',
                'excerpt' => 'অনলাইনে কেনাকাটার প্রবণতা বৃদ্ধির সাথে সাথে কীভাবে সহজে ব্যবসা শুরু করতে পারবেন তার বিস্তারিত বিবরণ।'
            ]);
            Blog::create([
                'title' => 'ওয়েবসাইট কেন ব্যবসার জন্য কথা বলে?',
                'category' => 'ওয়েবসাইট',
                'views' => '৩k',
                'image' => '/images/blog2.png',
                'excerpt' => 'ডিজিটাল যুগে একটি কাস্টম প্রফেশনাল ওয়েবসাইট আপনার ব্যবসাকে অনেক দূর এগিয়ে নিতে পারে।'
            ]);
        }

        // Seed Testimonials
        if (Testimonial::count() == 0) {
            Testimonial::create([
                'name' => 'আরিফ আহমেদ',
                'designation' => 'Founder, Daily Bazar',
                'avatar' => '/images/user1.jpg',
                'rating' => 5,
                'comment' => 'WhatsUp i-Tech আমাদের ই-কমার্স ওয়েবসাইটটি অসাধারণভাবে তৈরি করে দিয়েছে। তাদের সার্ভিস খুবই দ্রুত ও প্রফেশনাল!'
            ]);
        }

        // Seed Site Settings
        $defaults = [
            'phone' => '01657-043577',
            'email' => 'contact@whatsupitech.com',
            'address' => 'হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০',
            'facebook' => 'https://facebook.com',
            'youtube' => 'https://youtube.com',
            'linkedin' => 'https://linkedin.com',
            'instagram' => 'https://instagram.com',
            'whatsapp_number' => '8801657043577',
            'messenger_link' => 'https://m.me/whatsupitech',
            'privacy_policy' => 'WhatsUp i-Tech কাস্টমারের তথ্যের গোপনীয়তা রক্ষা করতে প্রতিশ্রুতিবদ্ধ।',
            'terms_conditions' => 'আমাদের সেবা গ্রহণের পূর্বে সকল নিয়ম ও শর্তাবলী ভালোভাবে পড়ে নিন।',
            'faq_content' => "প্রশ্ন: আপনাদের ই-কমার্স ওয়েবসাইটে কী কী ফিচার থাকে?\nউত্তর: আমাদের ওয়েবসাইটে সম্পূর্ণ রেসপন্সিভ ডিজাইন, অ্যাডমিন প্যানেল, স্টক ম্যানেজমেন্ট, ওটিপি ভেরিফিকেশন ও কুরিয়ার ইন্টিগ্রেশন থাকে।",
            'support_content' => "আমাদের ২৪/৭ কাস্টমার সাপোর্ট টিমের সাথে সরাসরি যোগাযোগ করুন:\n\nফোন: 01657-043577\nইমেইল: support@whatsupitech.com\nঅফিস: হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০",
            'logo' => 'images/logo.png',
            'favicon' => 'images/favicon.ico',
            'hero_banners' => json_encode(['images/hero-mockup.png'])
        ];

        foreach ($defaults as $key => $val) {
            SiteSetting::firstOrCreate(['key' => $key], ['value' => $val]);
        }
    }
}
