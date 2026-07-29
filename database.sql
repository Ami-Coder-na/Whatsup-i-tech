-- WhatsUp i-Tech Complete Database Dump (MySQL Compatible)
-- Generated for full project structure & clean imports

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `contact_messages`;
DROP TABLE IF EXISTS `site_settings`;
DROP TABLE IF EXISTS `galleries`;
DROP TABLE IF EXISTS `blogs`;
DROP TABLE IF EXISTS `testimonials`;
DROP TABLE IF EXISTS `packages`;
DROP TABLE IF EXISTS `demo_links`;
DROP TABLE IF EXISTS `demo_categories`;
DROP TABLE IF EXISTS `services`;
SET FOREIGN_KEY_CHECKS=1;

-- 1. Services Table Structure & Data
CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT '#',
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `link`, `sort_order`) VALUES
(1, 'ওয়েবসাইট ডেভেলপমেন্ট', 'আধুনিক ও রেসপন্সিভ ওয়েবসাইট যা আপনার বিজনেস বাড়াবে ৩ গুণ।', 'fa-laptop-code', '#', 1),
(2, 'ই-কমার্স ও ওয়েবসাইটস', 'সম্পূর্ণ নিয়ন্ত্রনসহ দ্রুত ও ফাস্ট ই-কমার্স পোর্টাল ম্যানেজমেন্ট সিস্টেম।', 'fa-shopping-cart', '#', 2),
(3, 'মোবাইল অ্যাপ ডেভেলপমেন্ট', 'অ্যান্ড্রয়েড এবং আইওএস প্ল্যাটফর্মের আধুনিক মোবাইল অ্যাপ।', 'fa-mobile-alt', '#', 3),
(4, 'কাস্টম সফটওয়্যার', 'আপনার ব্যবসায়ের জন্য মানানসই সফটওয়্যার সমাধান।', 'fa-cogs', '#', 4),
(5, 'ডিজিটাল মার্কেটিং', 'SEO, SMM, PPC সহ টার্গেটেড ব্র্যান্ডিং মার্কেটিং সার্ভিস।', 'fa-bullhorn', '#', 5),
(6, 'গ্রাফিক ডিজাইন', 'ব্র্যান্ডিং, লোগো, ব্যানারের সকল প্রিমিয়াম ডিজাইন সেবা।', 'fa-palette', '#', 6);

-- 2. Demo Categories Table Structure & Data
CREATE TABLE `demo_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `demo_categories` (`id`, `cat_key`, `title`, `subtitle`, `icon`, `image`, `sort_order`) VALUES
(1, 'ecommerce', 'E-Commerce Website', 'অনলাইন শপ ও শপিং পোর্টাল', 'fa-shopping-bag', '/images/cat_ecommerce.png', 1),
(2, 'restaurant', 'Restaurant & Food', 'রেস্টুরেন্ট, ফুড ও ক্যাফে ওয়েবসাইট', 'fa-utensils', '/images/cat_restaurant.png', 2),
(3, 'realestate', 'Real Estate & Properties', 'রিয়েল এস্টেট ও প্রপার্টি পোর্টাল', 'fa-building', '/images/cat_realestate.png', 3),
(4, 'travel', 'Travel & Agency', 'ট্রাভেল, ট্যুর ও বুকিং সাইট', 'fa-plane-departure', '/images/cat_travel.png', 4),
(5, 'school', 'School & Coaching', 'স্কুল, কলেজ ও কোচিং পোর্টাল', 'fa-graduation-cap', '/images/cat_school.png', 5);

-- 3. Demo Links Table Structure & Data
CREATE TABLE `demo_links` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `demo_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT 'Hot',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `demo_links_category_idx` (`demo_category_id`),
  CONSTRAINT `demo_links_category_fk` FOREIGN KEY (`demo_category_id`) REFERENCES `demo_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `demo_links` (`id`, `demo_category_id`, `name`, `url`, `badge`) VALUES
(1, 1, 'Demo 1 (Fashion Store)', 'https://demo1.whatsupitech.com', 'Hot'),
(2, 1, 'Demo 2 (Electronics & Gadgets)', 'https://demo2.whatsupitech.com', 'Popular'),
(3, 1, 'Demo 3 (Grocery Superstore)', 'https://demo3.whatsupitech.com', 'New'),
(4, 2, 'Demo 1 (Fast Food & Cafe)', 'https://restaurant1.whatsupitech.com', 'Popular'),
(5, 2, 'Demo 2 (Fine Dining & Bakery)', 'https://restaurant2.whatsupitech.com', 'New'),
(6, 3, 'Demo 1 (Property Listing Portal)', 'https://realestate1.whatsupitech.com', 'Featured'),
(7, 3, 'Demo 2 (Apartment & Developer)', 'https://realestate2.whatsupitech.com', 'Popular'),
(8, 4, 'Demo 1 (Tour & Travel Booking)', 'https://travel1.whatsupitech.com', 'Hot'),
(9, 4, 'Demo 2 (Visa & Ticket Agency)', 'https://travel2.whatsupitech.com', 'New'),
(10, 5, 'Demo 1 (School Management System)', 'https://school1.whatsupitech.com', 'Top Rated'),
(11, 5, 'Demo 2 (Coaching & LMS Portal)', 'https://coaching2.whatsupitech.com', 'Popular');

-- 4. Packages Table Structure & Data
CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `original_price` varchar(255) DEFAULT NULL,
  `is_popular` tinyint(1) DEFAULT 0,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`features`)),
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `packages` (`id`, `name`, `badge`, `price`, `original_price`, `is_popular`, `features`) VALUES
(1, 'STARTER PACKAGE', 'ছোট ও নতুন অনলাইন ব্যবসার জন্য', '৪,৯৯০', '১০,০০০', 0, '["E-commerce Website (Single-Vendor)","Easy Product Management","Basic Order Management System","Courier Service Integration","Incomplete Order Tracking (Cart Abandonment)","Suspicious Customer Fraud Check","Payment Gateway Setup (bKash, Nagad, COD)","Facebook Pixel Integration","SEO-Friendly & Speed Optimized","৫টি Ready-Made Landing Page","১ বছরে ৩টি Customized Landing Page","Fast Managed Hosting","Admin Training & Basic Support","Priority Technical Support"]'),
(2, 'BUSINESS GROWTH PACKAGE', 'নিয়মিত বিক্রি করা Facebook Seller ও growing business-এর জন্য', '৯,৯৯০', '২৫,০০০', 1, '["Advanced E-commerce Website & Admin Panel","Advanced Product, Stock & Order Management","Advanced Incomplete Order Tracking","Real & Suspicious Customer Analysis","Area-Based Advanced Order Filtering","Customer Database & Repeat Marketing সুবিধা","OTP দিয়ে Call ছাড়াই Order Confirmation","একাধিক Courier Service ব্যবহারের সুবিধা","Advanced Coupon, Flash Sale & Campaign Management","SSLCOMMERZ Payment Gateway","Personal & Merchant bKash","Nagad, Rocket, Bank Payment & Cash on Delivery","Facebook Pixel—Browser-Side Tracking","Facebook Server-Side Tracking","Conversion API Setup","Event Deduplication Setup","Google Analytics Setup","Advanced Marketing Tracking","SEO-Friendly & High-Speed Optimization","বাংলা ও English Language Support","১০টি Ready-Made Landing Page","১ বছরে সর্বোচ্চ ৫টি Customized Landing Page","Super-Fast Managed Hosting","প্রয়োজনীয় Basic Customization","Admin Training ও Launch Support","Priority Technical Support"]'),
(3, 'PREMIUM AUTOMATION PACKAGE', 'বড় ব্যবসা, বেশি অর্ডার ও advanced marketing-এর জন্য', '১৯,৯৯০', '৫০,০০০', 0, '["সম্পূর্ণ Advanced E-commerce Website ও Admin Panel","Advanced Product, Stock, Order ও Customer Management","Advanced Incomplete Order Tracking","Real ও Suspicious Customer Analysis","Area-Based Advanced Order Filtering","Customer Database ও Repeat Marketing সুবিধা","OTP দিয়ে Call ছাড়াই Order Confirmation","একাধিক Courier Service ব্যবহারের সুবিধা","Advanced Coupon, Flash Sale ও Campaign Management","SSLCOMMERZ Payment Gateway","Personal ও Merchant bKash","Nagad, Rocket, Bank Payment ও Cash on Delivery","Facebook Pixel—Browser-Side Tracking","Facebook Server-Side Tracking","Conversion API Setup","Event Deduplication Setup","Stape Setup","Google Analytics Setup","Advanced Marketing Tracking","SEO-Friendly ও High-Speed Optimization","বাংলা ও English Language Support","২০টি Ready-Made Landing Page","১ বছরে সর্বোচ্চ ১০টি Customized Landing Page","Brand অনুযায়ী Premium Colour ও Design Setup","Super-Fast Managed Dedicated Server","১ বছরের ফ্রি Hosting","১ বছরের ফ্রি Basic Server Maintenance","Admin Training ও Complete Launch Support","Priority Technical Support","Working Demo দেখে সিদ্ধান্ত নেওয়ার সুযোগ"]');

-- 5. Testimonials Table Structure & Data
CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT 5,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `testimonials` (`id`, `name`, `designation`, `avatar`, `rating`, `comment`) VALUES
(1, 'তৌফিকুর রহমান', 'Founder, Daily Bazar', '/images/user1.jpg', 5, 'Whatsup i-Tech আমাদের জন্য একটি চমৎকার ই-কমার্স সাইট তৈরি করে দিয়েছে। তাদের সেবা সত্যিই অসাধারণ।'),
(2, 'নাহিদা আক্তার', 'CEO, Fashion Gallery', '/images/user2.jpg', 5, 'তাদের ডিজাইন সেন্স অত্যন্ত ভালো এবং টাইম টু টাইম ডেলিভারি নিশ্চিত করে। কাজের মান খুবই উন্নত।'),
(3, 'মো: জাহিদুল ইসলাম', 'Manager, Kurkuri Limited', '/images/user3.jpg', 5, 'আমাদের কোম্পানির ওয়েবসাইটটি এসে খুবই সুন্দরভাবে ডিজাইন এবং ডেভেলপ করা হয়েছে।');

-- 6. Blogs Table Structure & Data
CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `views` varchar(255) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blogs` (`id`, `title`, `category`, `views`, `image`, `excerpt`) VALUES
(1, 'ই-কমার্স ব্যবসা শুরু করার সম্পূর্ণ গাইড', 'ই-কমার্স', '১.৫k', '/images/blog1.png', 'অনলাইনে কেনাকাটার প্রবণতা বৃদ্ধির সাথে সাথে কীভাবে সহজে ব্যবসা শুরু করতে পারবেন তার বিস্তারিত বিবরণ।'),
(2, 'ওয়েবসাইট কেন ব্যবসার জন্য কথা বলে?', 'ওয়েবসাইট', '৩k', '/images/blog2.png', 'ডিজিটাল যুগে একটি কাস্টম প্রফেশনাল ওয়েবসাইট আপনার ব্যবসাকে অনেক দূর এগিয়ে নিতে পারে।'),
(3, 'SEO কি এবং কেন গুরুত্বপূর্ণ?', 'SEO', '১.৮k', '/images/blog3.png', 'সার্চ ইঞ্জিনে আপনার ওয়েবসাইট সবার উপরে আনার গোপন কৌশল ও বেসিক ধারণাসমূহ।'),
(4, 'মোবাইল অ্যাপ ডেভেলপমেন্টের ভবিষ্যত', 'মোবাইল অ্যাপ', '২.১k', '/images/blog4.png', 'স্মার্টফোনের যুগে একটি কার্যকর মোবাইল অ্যাপ আপনার গ্রাহক অভিজ্ঞতাকে দ্বিগুণ করে তোলে।');

-- 7. Galleries Table Structure & Data
CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `galleries` (`id`, `title`, `subtitle`, `image`, `sort_order`) VALUES
(1, 'আমাদের আধুনিক অফিস পরিবেশ', 'WhatsUp I-Tech Workspace', '/images/gal1.png', 1),
(2, 'টিম মিটিং ও প্রজেক্ট আলোচনা', 'Brainstorming & Planning', '/images/gal2.png', 2),
(3, 'দক্ষ ও প্রফেশনাল ডেভেলপমেন্ট টিম', 'Developer Workstation', '/images/team.png', 3),
(4, 'ডিজিটাল সলিউশন ও মকআপ ড্যাশবোর্ড', 'Software Design Portfolio', '/images/hero-mockup.png', 4);

-- 8. Site Settings Table Structure & Data
CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL UNIQUE,
  `value` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `site_settings` (`key`, `value`) VALUES
('phone', '01657-043577'),
('email', 'contact@whatsupitech.com'),
('address', 'হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০'),
('facebook', 'https://facebook.com'),
('youtube', 'https://youtube.com'),
('linkedin', 'https://linkedin.com'),
('whatsapp', 'https://wa.me/8801657043577'),
('messenger', 'https://m.me/whatsupitech'),
('instagram', 'https://instagram.com'),
('privacy_policy', 'WhatsUp i-Tech কাস্টমারের তথ্যের গোপনীয়তা রক্ষা করতে প্রতিশ্রুতিবদ্ধ।'),
('terms_conditions', 'আমাদের সেবা গ্রহণের পূর্বে সকল নিয়ম ও শর্তাবলী ভালোভাবে পড়ে নিন।'),
('faq_content', 'প্রশ্ন: আপনাদের ই-কমার্স ওয়েবসাইটে কী কী ফিচার থাকে?\nউত্তর: আমাদের ওয়েবসাইটে সম্পূর্ণ রেসপন্সিভ ডিজাইন, অ্যাডমিন প্যানেল, স্টক ম্যানেজমেন্ট, ওটিপি ভেরিফিকেশন ও কুরিয়ার ইন্টিগ্রেশন থাকে।'),
('support_content', 'আমাদের ২৪/৭ কাস্টমার সাপোর্ট টিমের সাথে সরাসরি যোগাযোগ করুন:\n\nফোন: 01657-043577\nইমেইল: support@whatsupitech.com\nঅফিস: হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০');

-- 9. Contact Messages Table Structure
CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
