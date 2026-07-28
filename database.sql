-- ========================================================
-- WhatsUp I-Tech Company Website Full SQL Database Dump
-- Compatible with MySQL / MariaDB / phpMyAdmin
-- Generated Date: 2026-07-28
-- ========================================================

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Table structure for `services`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL DEFAULT '#00A8FF',
  `link` varchar(255) NOT NULL DEFAULT '#',
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `services`

INSERT INTO `services` (`id`, `title`, `subtitle`, `description`, `icon`, `color`, `link`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'ওয়েবসাইট ডেভেলপমেন্ট', NULL, 'আধুনিক ও রেসপন্সিভ ওয়েবসাইট যা আপনার বিজনেস বাড়াবে ৩ গুণ।', 'fa-laptop-code', '#00A8FF', '#', 1, NOW(), NOW()),
(2, 'ই-কমার্স ও ওয়েবসাইটস', NULL, 'সম্পূর্ণ নিয়ন্ত্রনসহ দ্রুত ও ফাস্ট ই-কমার্স পোর্টাল ম্যানেজমেন্ট সিস্টেম।', 'fa-shopping-cart', '#00A8FF', '#', 2, NOW(), NOW()),
(3, 'মোবাইল অ্যাপ ডেভেলপমেন্ট', NULL, 'অ্যান্ড্রয়েড এবং আইওএস প্ল্যাটফর্মের আধুনিক মোবাইল অ্যাপ।', 'fa-mobile-alt', '#00A8FF', '#', 3, NOW(), NOW()),
(4, 'কাস্টম সফটওয়্যার', NULL, 'আপনার ব্যবসায়ের জন্য মানানসই সফটওয়্যার সমাধান।', 'fa-cogs', '#00A8FF', '#', 4, NOW(), NOW()),
(5, 'ডিজিটাল মার্কেটিং', NULL, 'SEO, SMM, PPC সহ টার্গেটেড ব্র্যান্ডিং মার্কেটিং সার্ভিস।', 'fa-bullhorn', '#00A8FF', '#', 5, NOW(), NOW()),
(6, 'গ্রাফিক ডিজাইন', NULL, 'ব্র্যান্ডিং, লোগো, ব্যানারের সকল প্রিমিয়াম ডিজাইন সেবা।', 'fa-palette', '#00A8FF', '#', 6, NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `demo_categories`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `demo_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_key` varchar(255) NOT NULL UNIQUE,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'fa-layer-group',
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `demo_categories`

INSERT INTO `demo_categories` (`id`, `cat_key`, `title`, `subtitle`, `icon`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'ecommerce', 'E-Commerce Website', 'অনলাইন শপ ও শপিং পোর্টাল', 'fa-shopping-bag', '/images/cat_ecommerce.png', 1, NOW(), NOW()),
(2, 'restaurant', 'Restaurant & Food', 'রেস্টুরেন্ট, ফুড ও ক্যাফে ওয়েবসাইট', 'fa-utensils', '/images/cat_restaurant.png', 2, NOW(), NOW()),
(3, 'realestate', 'Real Estate & Properties', 'রিয়েল এস্টেট ও প্রপার্টি পোর্টাল', 'fa-building', '/images/cat_realestate.png', 3, NOW(), NOW()),
(4, 'travel', 'Travel & Agency', 'ট্রাভেল, ট্যুর ও বুকিং সাইট', 'fa-plane-departure', '/images/cat_travel.png', 4, NOW(), NOW()),
(5, 'school', 'School & Coaching', 'স্কুল, কলেজ ও কোচিং পোর্টাল', 'fa-graduation-cap', '/images/cat_school.png', 5, NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `demo_links`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `demo_links` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `demo_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `badge` varchar(255) NOT NULL DEFAULT 'Hot',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `demo_links_demo_category_id_foreign` (`demo_category_id`),
  CONSTRAINT `demo_links_demo_category_id_foreign` FOREIGN KEY (`demo_category_id`) REFERENCES `demo_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `demo_links`

INSERT INTO `demo_links` (`id`, `demo_category_id`, `name`, `url`, `badge`, `created_at`, `updated_at`) VALUES
(1, 1, 'Demo 1 (Fashion Store)', 'https://demo1.whatsupitech.com', 'Hot', NOW(), NOW()),
(2, 1, 'Demo 2 (Electronics & Gadgets)', 'https://demo2.whatsupitech.com', 'Popular', NOW(), NOW()),
(3, 1, 'Demo 3 (Grocery Superstore)', 'https://demo3.whatsupitech.com', 'New', NOW(), NOW()),
(4, 2, 'Demo 1 (Fast Food & Cafe)', 'https://restaurant1.whatsupitech.com', 'Popular', NOW(), NOW()),
(5, 2, 'Demo 2 (Fine Dining & Bakery)', 'https://restaurant2.whatsupitech.com', 'New', NOW(), NOW()),
(6, 3, 'Demo 1 (Property Listing Portal)', 'https://realestate1.whatsupitech.com', 'Featured', NOW(), NOW()),
(7, 3, 'Demo 2 (Apartment & Developer)', 'https://realestate2.whatsupitech.com', 'Popular', NOW(), NOW()),
(8, 4, 'Demo 1 (Tour & Travel Booking)', 'https://travel1.whatsupitech.com', 'Hot', NOW(), NOW()),
(9, 4, 'Demo 2 (Visa & Ticket Agency)', 'https://travel2.whatsupitech.com', 'New', NOW(), NOW()),
(10, 5, 'Demo 1 (School Management System)', 'https://school1.whatsupitech.com', 'Top Rated', NOW(), NOW()),
(11, 5, 'Demo 2 (Coaching & LMS Portal)', 'https://coaching2.whatsupitech.com', 'Popular', NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `packages`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `original_price` varchar(255) DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT 0,
  `features` json NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `packages`

INSERT INTO `packages` (`id`, `name`, `badge`, `price`, `original_price`, `is_popular`, `features`, `created_at`, `updated_at`) VALUES
(1, 'STARTER PACKAGE', 'ছোট ও নতুন অনলাইন ব্যবসার জন্য', '৯,৯৯৯', '২০,০০০', 0, '["সম্পূর্ণ Responsive E-commerce Website", "সহজ ও শক্তিশালী Admin Panel", "Product ও Category Management", "Stock Management", "Order Management", "Customer Information সংরক্ষণ", "Cash on Delivery সুবিধা", "Personal bKash ও Nagad Payment", "Coupon ও Basic Offer Management", "বাংলা ও English Language Support", "Mobile, Tablet ও Desktop Responsive Design", "SEO-Friendly Website Structure", "Fast-Loading Website", "আপনার Brand অনুযায়ী Colour ও Logo Setup", "প্রয়োজনীয় Basic Customization", "৫টি Ready-Made Landing Page", "১ বছরের ফ্রি Hosting", "১ বছরের Basic Server Maintenance", "Admin Training ও Launch Support", "প্রয়োজনীয় Technical Support"]', NOW(), NOW()),
(2, 'BUSINESS GROWTH PACKAGE', 'নিয়মিত বিক্রি করা Facebook Seller ও growing business-এর জন্য', '১২,৯৯০', '৩০,০০০', 1, '["Incomplete Order Tracking", "Area-Based Customer ও Order Filtering", "Real ও Suspicious Customer যাচাইয়ে সহায়তা", "Customer Phone Number ও বিস্তারিত তথ্য সংরক্ষণ", "পুরোনো কাস্টমারের তথ্য ব্যবহার করে Repeat Sale করার সুবিধা", "Courier Service ব্যবহারের সুবিধা", "OTP-Based Order Confirmation", "Coupon, Flash Sale ও Campaign Management", "Personal ও Merchant bKash Integration", "Nagad, Rocket, Bank Payment ও Cash on Delivery", "Facebook Pixel Setup", "Google Analytics Setup", "Marketing Event Tracking", "১০টি Ready-Made Landing Page", "১ বছরে সর্বোচ্চ ৫টি Customized Landing Page", "Super-Fast Managed Hosting", "প্রয়োজনীয় Basic Customization", "Admin Training ও Launch Support", "Priority Technical Support"]', NOW(), NOW()),
(3, 'PREMIUM AUTOMATION PACKAGE', 'বড় ব্যবসা, বেশি অর্ডার ও advanced marketing-এর জন্য', '১৯,৯৯০', '৫০,০০০', 0, '["সম্পূর্ণ Advanced E-commerce Website ও Admin Panel", "Advanced Product, Stock, Order ও Customer Management", "Advanced Incomplete Order Tracking", "Real ও Suspicious Customer Analysis", "Area-Based Advanced Order Filtering", "Customer Database ও Repeat Marketing সুবিধা", "OTP দিয়ে Call ছাড়াই Order Confirmation", "একাধিক Courier Service ব্যবহারের সুবিধা", "Advanced Coupon, Flash Sale ও Campaign Management", "SSLCOMMERZ Payment Gateway", "Personal ও Merchant bKash", "Nagad, Rocket, Bank Payment ও Cash on Delivery", "Facebook Pixel—Browser-Side Tracking", "Facebook Server-Side Tracking", "Conversion API Setup", "Event Deduplication Setup", "Stape Setup", "Google Analytics Setup", "Advanced Marketing Tracking", "SEO-Friendly ও High-Speed Optimization", "বাংলা ও English Language Support", "২০টি Ready-Made Landing Page", "১ বছরে সর্বোচ্চ ১০টি Customized Landing Page", "Brand অনুযায়ী Premium Colour ও Design Setup", "Super-Fast Managed Dedicated Server", "১ বছরের ফ্রি Hosting", "১ বছরের ফ্রি Basic Server Maintenance", "Admin Training ও Complete Launch Support", "Priority Technical Support", "Working Demo দেখে সিদ্ধান্ত নেওয়ার সুযোগ"]', NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `testimonials`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `testimonials`

INSERT INTO `testimonials` (`id`, `name`, `designation`, `avatar`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'তৌফিকুর রহমান', 'Founder, Daily Bazar', '/images/user1.jpg', 5, 'Whatsup i-Tech আমাদের জন্য একটি চমৎকার ই-কমার্স সাইট তৈরি করে দিয়েছে। তাদের সেবা সত্যিই অসাধারণ।', NOW(), NOW()),
(2, 'নাহিদা আক্তার', 'CEO, Fashion Gallery', '/images/user2.jpg', 5, 'তাদের ডিজাইন সেন্স অত্যন্ত ভালো এবং টাইম টু টাইম ডেলিভারি নিশ্চিত করে। কাজের মান খুবই উন্নত।', NOW(), NOW()),
(3, 'মো: জাহিদুল ইসলাম', 'Manager, Kurkuri Limited', '/images/user3.jpg', 5, 'আমাদের কোম্পানির ওয়েবসাইটটি এসে খুবই সুন্দরভাবে ডিজাইন এবং ডেভেলপ করা হয়েছে।', NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `blogs`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `views` varchar(255) NOT NULL DEFAULT '১.৫k',
  `image` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `blogs`

INSERT INTO `blogs` (`id`, `title`, `category`, `views`, `image`, `excerpt`, `created_at`, `updated_at`) VALUES
(1, 'ই-কমার্স ব্যবসা শুরু করার সম্পূর্ণ গাইড', 'ই-কমার্স', '১.৫k', '/images/blog1.png', 'অনলাইনে কেনাকাটার প্রবণতা বৃদ্ধির সাথে সাথে কীভাবে সহজে ব্যবসা শুরু করতে পারবেন তার বিস্তারিত বিবরণ।', NOW(), NOW()),
(2, 'ওয়েবসাইট কেন ব্যবসার জন্য কথা বলে?', 'ওয়েবসাইট', '৩k', '/images/blog2.png', 'ডিজিটাল যুগে একটি কাস্টম প্রফেশনাল ওয়েবসাইট আপনার ব্যবসাকে অনেক দূর এগিয়ে নিতে পারে।', NOW(), NOW()),
(3, 'SEO কি এবং কেন গুরুত্বপূর্ণ?', 'SEO', '১.৮k', '/images/blog3.png', 'সার্চ ইঞ্জিনে আপনার ওয়েবসাইট সবার উপরে আনার গোপন কৌশল ও বেসিক ধারণাসমূহ।', NOW(), NOW()),
(4, 'মোবাইল অ্যাপ ডেভেলপমেন্টের ভবিষ্যত', 'মোবাইল অ্যাপ', '২.১k', '/images/blog4.png', 'স্মার্টফোনের যুগে একটি কার্যকর মোবাইল অ্যাপ আপনার গ্রাহক অভিজ্ঞতাকে দ্বিগুণ করে তোলে।', NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `galleries`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `galleries`

INSERT INTO `galleries` (`id`, `title`, `subtitle`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'আমাদের আধুনিক অফিস পরিবেশ', 'WhatsUp I-Tech Workspace', '/images/gal1.png', 1, NOW(), NOW()),
(2, 'টিম মিটিং ও প্রজেক্ট আলোচনা', 'Brainstorming & Planning', '/images/gal2.png', 2, NOW(), NOW()),
(3, 'দক্ষ ও প্রফেশনাল ডেভেলপমেন্ট টিম', 'Developer Workstation', '/images/team.png', 3, NOW(), NOW()),
(4, 'ডিজিটাল সলিউশন ও মকআপ ড্যাশবোর্ড', 'Software Design Portfolio', '/images/hero-mockup.png', 4, NOW(), NOW());

-- --------------------------------------------------------
-- Table structure for `contact_messages`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `site_settings`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL UNIQUE,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `site_settings`

INSERT INTO `site_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'phone', '01657-043577', NOW(), NOW()),
(2, 'email', 'contact@whatsupitech.com', NOW(), NOW()),
(3, 'address', 'হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০', NOW(), NOW()),
(4, 'facebook', 'https://facebook.com', NOW(), NOW()),
(5, 'youtube', 'https://youtube.com', NOW(), NOW()),
(6, 'linkedin', 'https://linkedin.com', NOW(), NOW());

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
