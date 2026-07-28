<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\DemoCategory;
use App\Models\DemoLink;
use App\Models\Gallery;
use App\Models\SiteSetting;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Service::query()->delete();
        Package::query()->delete();
        Testimonial::query()->delete();
        Blog::query()->delete();
        DemoLink::query()->delete();
        DemoCategory::query()->delete();
        Gallery::query()->delete();
        SiteSetting::query()->delete();

        // 1. Services
        $services = [
            ['title' => 'ওয়েবসাইট ডেভেলপমেন্ট', 'description' => 'আধুনিক ও রেসপন্সিভ ওয়েবসাইট যা আপনার বিজনেস বাড়াবে ৩ গুণ।', 'icon' => 'fa-laptop-code', 'link' => '#', 'sort_order' => 1],
            ['title' => 'ই-কমার্স ও ওয়েবসাইটস', 'description' => 'সম্পূর্ণ নিয়ন্ত্রনসহ দ্রুত ও ফাস্ট ই-কমার্স পোর্টাল ম্যানেজমেন্ট সিস্টেম।', 'icon' => 'fa-shopping-cart', 'link' => '#', 'sort_order' => 2],
            ['title' => 'মোবাইল অ্যাপ ডেভেলপমেন্ট', 'description' => 'অ্যান্ড্রয়েড এবং আইওএস প্ল্যাটফর্মের আধুনিক মোবাইল অ্যাপ।', 'icon' => 'fa-mobile-alt', 'link' => '#', 'sort_order' => 3],
            ['title' => 'কাস্টম সফটওয়্যার', 'description' => 'আপনার ব্যবসায়ের জন্য মানানসই সফটওয়্যার সমাধান।', 'icon' => 'fa-cogs', 'link' => '#', 'sort_order' => 4],
            ['title' => 'ডিজিটাল মার্কেটিং', 'description' => 'SEO, SMM, PPC সহ টার্গেটেড ব্র্যান্ডিং মার্কেটিং সার্ভিস।', 'icon' => 'fa-bullhorn', 'link' => '#', 'sort_order' => 5],
            ['title' => 'গ্রাফিক ডিজাইন', 'description' => 'ব্র্যান্ডিং, লোগো, ব্যানারের সকল প্রিমিয়াম ডিজাইন সেবা।', 'icon' => 'fa-palette', 'link' => '#', 'sort_order' => 6]
        ];
        foreach ($services as $s) Service::create($s);

        // 2. Demo Categories & Links
        $cat1 = DemoCategory::create([
            'cat_key' => 'ecommerce',
            'title' => 'E-Commerce Website',
            'subtitle' => 'অনলাইন শপ ও শপিং পোর্টাল',
            'icon' => 'fa-shopping-bag',
            'image' => '/images/cat_ecommerce.png',
            'sort_order' => 1
        ]);
        DemoLink::create(['demo_category_id' => $cat1->id, 'name' => 'Demo 1 (Fashion Store)', 'url' => 'https://demo1.whatsupitech.com', 'badge' => 'Hot']);
        DemoLink::create(['demo_category_id' => $cat1->id, 'name' => 'Demo 2 (Electronics & Gadgets)', 'url' => 'https://demo2.whatsupitech.com', 'badge' => 'Popular']);
        DemoLink::create(['demo_category_id' => $cat1->id, 'name' => 'Demo 3 (Grocery Superstore)', 'url' => 'https://demo3.whatsupitech.com', 'badge' => 'New']);

        $cat2 = DemoCategory::create([
            'cat_key' => 'restaurant',
            'title' => 'Restaurant & Food',
            'subtitle' => 'রেস্টুরেন্ট, ফুড ও ক্যাফে ওয়েবসাইট',
            'icon' => 'fa-utensils',
            'image' => '/images/cat_restaurant.png',
            'sort_order' => 2
        ]);
        DemoLink::create(['demo_category_id' => $cat2->id, 'name' => 'Demo 1 (Fast Food & Cafe)', 'url' => 'https://restaurant1.whatsupitech.com', 'badge' => 'Popular']);
        DemoLink::create(['demo_category_id' => $cat2->id, 'name' => 'Demo 2 (Fine Dining & Bakery)', 'url' => 'https://restaurant2.whatsupitech.com', 'badge' => 'New']);

        $cat3 = DemoCategory::create([
            'cat_key' => 'realestate',
            'title' => 'Real Estate & Properties',
            'subtitle' => 'রিয়েল এস্টেট ও প্রপার্টি পোর্টাল',
            'icon' => 'fa-building',
            'image' => '/images/cat_realestate.png',
            'sort_order' => 3
        ]);
        DemoLink::create(['demo_category_id' => $cat3->id, 'name' => 'Demo 1 (Property Listing Portal)', 'url' => 'https://realestate1.whatsupitech.com', 'badge' => 'Featured']);
        DemoLink::create(['demo_category_id' => $cat3->id, 'name' => 'Demo 2 (Apartment & Developer)', 'url' => 'https://realestate2.whatsupitech.com', 'badge' => 'Popular']);

        $cat4 = DemoCategory::create([
            'cat_key' => 'travel',
            'title' => 'Travel & Agency',
            'subtitle' => 'ট্রাভেল, ট্যুর ও বুকিং সাইট',
            'icon' => 'fa-plane-departure',
            'image' => '/images/cat_travel.png',
            'sort_order' => 4
        ]);
        DemoLink::create(['demo_category_id' => $cat4->id, 'name' => 'Demo 1 (Tour & Travel Booking)', 'url' => 'https://travel1.whatsupitech.com', 'badge' => 'Hot']);
        DemoLink::create(['demo_category_id' => $cat4->id, 'name' => 'Demo 2 (Visa & Ticket Agency)', 'url' => 'https://travel2.whatsupitech.com', 'badge' => 'New']);

        $cat5 = DemoCategory::create([
            'cat_key' => 'school',
            'title' => 'School & Coaching',
            'subtitle' => 'স্কুল, কলেজ ও কোচিং পোর্টাল',
            'icon' => 'fa-graduation-cap',
            'image' => '/images/cat_school.png',
            'sort_order' => 5
        ]);
        DemoLink::create(['demo_category_id' => $cat5->id, 'name' => 'Demo 1 (School Management System)', 'url' => 'https://school1.whatsupitech.com', 'badge' => 'Top Rated']);
        DemoLink::create(['demo_category_id' => $cat5->id, 'name' => 'Demo 2 (Coaching & LMS Portal)', 'url' => 'https://coaching2.whatsupitech.com', 'badge' => 'Popular']);

        // 3. Packages
        $packages = [
            [
                'id' => 1,
                'name' => 'STARTER PACKAGE',
                'badge' => 'ছোট ও নতুন অনলাইন ব্যবসার জন্য',
                'price' => '৯,৯৯৯',
                'original_price' => '২০,০০০',
                'is_popular' => false,
                'features' => [
                    'সম্পূর্ণ Responsive E-commerce Website',
                    'সহজ ও শক্তিশালী Admin Panel',
                    'Product ও Category Management',
                    'Stock Management',
                    'Order Management',
                    'Customer Information সংরক্ষণ',
                    'Cash on Delivery সুবিধা',
                    'Personal bKash ও Nagad Payment',
                    'Coupon ও Basic Offer Management',
                    'বাংলা ও English Language Support',
                    'Mobile, Tablet ও Desktop Responsive Design',
                    'SEO-Friendly Website Structure',
                    'Fast-Loading Website',
                    'আপনার Brand অনুযায়ী Colour ও Logo Setup',
                    'প্রয়োজনীয় Basic Customization',
                    '৫টি Ready-Made Landing Page',
                    '১ বছরের ফ্রি Hosting',
                    '১ বছরের Basic Server Maintenance',
                    'Admin Training ও Launch Support',
                    'প্রয়োজনীয় Technical Support'
                ]
            ],
            [
                'id' => 2,
                'name' => 'BUSINESS GROWTH PACKAGE',
                'badge' => 'নিয়মিত বিক্রি করা Facebook Seller ও growing business-এর জন্য',
                'price' => '১২,৯৯০',
                'original_price' => '৩০,০০০',
                'is_popular' => true,
                'features' => [
                    'Incomplete Order Tracking',
                    'Area-Based Customer ও Order Filtering',
                    'Real ও Suspicious Customer যাচাইয়ে সহায়তা',
                    'Customer Phone Number ও বিস্তারিত তথ্য সংরক্ষণ',
                    'পুরোনো কাস্টমারের তথ্য ব্যবহার করে Repeat Sale করার সুবিধা',
                    'Courier Service ব্যবহারের সুবিধা',
                    'OTP-Based Order Confirmation',
                    'Coupon, Flash Sale ও Campaign Management',
                    'Personal ও Merchant bKash Integration',
                    'Nagad, Rocket, Bank Payment ও Cash on Delivery',
                    'Facebook Pixel Setup',
                    'Google Analytics Setup',
                    'Marketing Event Tracking',
                    '১০টি Ready-Made Landing Page',
                    '১ বছরে সর্বোচ্চ ৫টি Customized Landing Page',
                    'Super-Fast Managed Hosting',
                    'প্রয়োজনীয় Basic Customization',
                    'Admin Training ও Launch Support',
                    'Priority Technical Support'
                ]
            ],
            [
                'id' => 3,
                'name' => 'PREMIUM AUTOMATION PACKAGE',
                'badge' => 'বড় ব্যবসা, বেশি অর্ডার ও advanced marketing-এর জন্য',
                'price' => '১৯,৯৯০',
                'original_price' => '৫০,০০০',
                'is_popular' => false,
                'features' => [
                    'সম্পূর্ণ Advanced E-commerce Website ও Admin Panel',
                    'Advanced Product, Stock, Order ও Customer Management',
                    'Advanced Incomplete Order Tracking',
                    'Real ও Suspicious Customer Analysis',
                    'Area-Based Advanced Order Filtering',
                    'Customer Database ও Repeat Marketing সুবিধা',
                    'OTP দিয়ে Call ছাড়াই Order Confirmation',
                    'একাধিক Courier Service ব্যবহারের সুবিধা',
                    'Advanced Coupon, Flash Sale ও Campaign Management',
                    'SSLCOMMERZ Payment Gateway',
                    'Personal ও Merchant bKash',
                    'Nagad, Rocket, Bank Payment ও Cash on Delivery',
                    'Facebook Pixel—Browser-Side Tracking',
                    'Facebook Server-Side Tracking',
                    'Conversion API Setup',
                    'Event Deduplication Setup',
                    'Stape Setup',
                    'Google Analytics Setup',
                    'Advanced Marketing Tracking',
                    'SEO-Friendly ও High-Speed Optimization',
                    'বাংলা ও English Language Support',
                    '২০টি Ready-Made Landing Page',
                    '১ বছরে সর্বোচ্চ ১০টি Customized Landing Page',
                    'Brand অনুযায়ী Premium Colour ও Design Setup',
                    'Super-Fast Managed Dedicated Server',
                    '১ বছরের ফ্রি Hosting',
                    '১ বছরের ফ্রি Basic Server Maintenance',
                    'Admin Training ও Complete Launch Support',
                    'Priority Technical Support',
                    'Working Demo দেখে সিদ্ধান্ত নেওয়ার সুযোগ'
                ]
            ]
        ];
        foreach ($packages as $pkg) Package::create($pkg);

        // 4. Testimonials
        $testimonials = [
            ['name' => 'তৌফিকুর রহমান', 'designation' => 'Founder, Daily Bazar', 'avatar' => '/images/user1.jpg', 'rating' => 5, 'comment' => 'Whatsup i-Tech আমাদের জন্য একটি চমৎকার ই-কমার্স সাইট তৈরি করে দিয়েছে। তাদের সেবা সত্যিই অসাধারণ।'],
            ['name' => 'নাহিদা আক্তার', 'designation' => 'CEO, Fashion Gallery', 'avatar' => '/images/user2.jpg', 'rating' => 5, 'comment' => 'তাদের ডিজাইন সেন্স অত্যন্ত ভালো এবং টাইম টু টাইম ডেলিভারি নিশ্চিত করে। কাজের মান খুবই উন্নত।'],
            ['name' => 'মো: জাহিদুল ইসলাম', 'designation' => 'Manager, Kurkuri Limited', 'avatar' => '/images/user3.jpg', 'rating' => 5, 'comment' => 'আমাদের কোম্পানির ওয়েবসাইটটি এসে খুবই সুন্দরভাবে ডিজাইন এবং ডেভেলপ করা হয়েছে।']
        ];
        foreach ($testimonials as $t) Testimonial::create($t);

        // 5. Blogs
        $blogs = [
            ['title' => 'ই-কমার্স ব্যবসা শুরু করার সম্পূর্ণ গাইড', 'category' => 'ই-কমার্স', 'views' => '১.৫k', 'image' => '/images/blog1.png', 'excerpt' => 'অনলাইনে কেনাকাটার প্রবণতা বৃদ্ধির সাথে সাথে কীভাবে সহজে ব্যবসা শুরু করতে পারবেন তার বিস্তারিত বিবরণ।'],
            ['title' => 'ওয়েবসাইট কেন ব্যবসার জন্য কথা বলে?', 'category' => 'ওয়েবসাইট', 'views' => '৩k', 'image' => '/images/blog2.png', 'excerpt' => 'ডিজিটাল যুগে একটি কাস্টম প্রফেশনাল ওয়েবসাইট আপনার ব্যবসাকে অনেক দূর এগিয়ে নিতে পারে।'],
            ['title' => 'SEO কি এবং কেন গুরুত্বপূর্ণ?', 'category' => 'SEO', 'views' => '১.৮k', 'image' => '/images/blog3.png', 'excerpt' => 'সার্চ ইঞ্জিনে আপনার ওয়েবসাইট সবার উপরে আনার গোপন কৌশল ও বেসিক ধারণাসমূহ।'],
            ['title' => 'মোবাইল অ্যাপ ডেভেলপমেন্টের ভবিষ্যত', 'category' => 'মোবাইল অ্যাপ', 'views' => '২.১k', 'image' => '/images/blog4.png', 'excerpt' => 'স্মার্টফোনের যুগে একটি কার্যকর মোবাইল অ্যাপ আপনার গ্রাহক অভিজ্ঞতাকে দ্বিগুণ করে তোলে।']
        ];
        foreach ($blogs as $b) Blog::create($b);

        // 6. Galleries
        $galleries = [
            ['title' => 'আমাদের আধুনিক অফিস পরিবেশ', 'subtitle' => 'WhatsUp I-Tech Workspace', 'image' => '/images/gal1.png', 'sort_order' => 1],
            ['title' => 'টিম মিটিং ও প্রজেক্ট আলোচনা', 'subtitle' => 'Brainstorming & Planning', 'image' => '/images/gal2.png', 'sort_order' => 2],
            ['title' => 'দক্ষ ও প্রফেশনাল ডেভেলপমেন্ট টিম', 'subtitle' => 'Developer Workstation', 'image' => '/images/team.png', 'sort_order' => 3],
            ['title' => 'ডিজিটাল সলিউশন ও মকআপ ড্যাশবোর্ড', 'subtitle' => 'Software Design Portfolio', 'image' => '/images/hero-mockup.png', 'sort_order' => 4]
        ];
        foreach ($galleries as $g) Gallery::create($g);

        // 7. Site Settings
        $settings = [
            'phone' => '01657-043577',
            'email' => 'contact@whatsupitech.com',
            'address' => 'হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০',
            'facebook' => 'https://facebook.com',
            'youtube' => 'https://youtube.com',
            'linkedin' => 'https://linkedin.com'
        ];
        foreach ($settings as $k => $v) {
            SiteSetting::create(['key' => $k, 'value' => $v]);
        }
    }
}
