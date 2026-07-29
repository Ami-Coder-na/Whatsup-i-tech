-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: whatsupitech
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `views` varchar(255) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'ই-কমার্স ব্যবসা শুরু করার সম্পূর্ণ গাইড','ই-কমার্স','১.৫k','/images/blog1.png','অনলাইনে কেনাকাটার প্রবণতা বৃদ্ধির সাথে সাথে কীভাবে সহজে ব্যবসা শুরু করতে পারবেন তার বিস্তারিত বিবরণ।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(2,'ওয়েবসাইট কেন ব্যবসার জন্য কথা বলে?','ওয়েবসাইট','৩k','/images/blog2.png','ডিজিটাল যুগে একটি কাস্টম প্রফেশনাল ওয়েবসাইট আপনার ব্যবসাকে অনেক দূর এগিয়ে নিতে পারে।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(3,'SEO কি এবং কেন গুরুত্বপূর্ণ?','SEO','১.৮k','/images/blog3.png','সার্চ ইঞ্জিনে আপনার ওয়েবসাইট সবার উপরে আনার গোপন কৌশল ও বেসিক ধারণাসমূহ।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(4,'মোবাইল অ্যাপ ডেভেলপমেন্টের ভবিষ্যত','মোবাইল অ্যাপ','২.১k','/images/blog4.png','স্মার্টফোনের যুগে একটি কার্যকর মোবাইল অ্যাপ আপনার গ্রাহক অভিজ্ঞতাকে দ্বিগুণ করে তোলে।','2026-07-29 07:34:17','2026-07-29 07:34:17');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
INSERT INTO `contact_messages` VALUES (1,'wtsupit designer','wtsupitdesigner@gmail.com','01744874952',NULL,'tfryhgfhfhf','2026-07-29 02:28:21','2026-07-29 02:28:21');
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demo_categories`
--

DROP TABLE IF EXISTS `demo_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demo_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demo_categories`
--

LOCK TABLES `demo_categories` WRITE;
/*!40000 ALTER TABLE `demo_categories` DISABLE KEYS */;
INSERT INTO `demo_categories` VALUES (1,'ecommerce','E-Commerce Website','অনলাইন শপ ও শপিং পোর্টাল','fa-shopping-bag','/images/cat_ecommerce.png',1,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(2,'restaurant','Restaurant & Food','রেস্টুরেন্ট, ফুড ও ক্যাফে ওয়েবসাইট','fa-utensils','/images/cat_restaurant.png',2,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(3,'realestate','Real Estate & Properties','রিয়েল এস্টেট ও প্রপার্টি পোর্টাল','fa-building','/images/cat_realestate.png',3,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(4,'travel','Travel & Agency','ট্রাভেল, ট্যুর ও বুকিং সাইট','fa-plane-departure','/images/cat_travel.png',4,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(5,'school','School & Coaching','স্কুল, কলেজ ও কোচিং পোর্টাল','fa-graduation-cap','/images/cat_school.png',5,'2026-07-29 07:34:17','2026-07-29 07:34:17');
/*!40000 ALTER TABLE `demo_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demo_links`
--

DROP TABLE IF EXISTS `demo_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demo_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `demo_category_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT 'Hot',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `demo_links_category_idx` (`demo_category_id`),
  CONSTRAINT `demo_links_category_fk` FOREIGN KEY (`demo_category_id`) REFERENCES `demo_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demo_links`
--

LOCK TABLES `demo_links` WRITE;
/*!40000 ALTER TABLE `demo_links` DISABLE KEYS */;
INSERT INTO `demo_links` VALUES (1,1,'Demo 1 (Fashion Store)','https://demo1.whatsupitech.com','Hot','2026-07-29 07:34:17','2026-07-29 07:34:17'),(2,1,'Demo 2 (Electronics & Gadgets)','https://demo2.whatsupitech.com','Popular','2026-07-29 07:34:17','2026-07-29 07:34:17'),(3,1,'Demo 3 (Grocery Superstore)','https://demo3.whatsupitech.com','New','2026-07-29 07:34:17','2026-07-29 07:34:17'),(4,2,'Demo 1 (Fast Food & Cafe)','https://restaurant1.whatsupitech.com','Popular','2026-07-29 07:34:17','2026-07-29 07:34:17'),(5,2,'Demo 2 (Fine Dining & Bakery)','https://restaurant2.whatsupitech.com','New','2026-07-29 07:34:17','2026-07-29 07:34:17'),(6,3,'Demo 1 (Property Listing Portal)','https://realestate1.whatsupitech.com','Featured','2026-07-29 07:34:17','2026-07-29 07:34:17'),(7,3,'Demo 2 (Apartment & Developer)','https://realestate2.whatsupitech.com','Popular','2026-07-29 07:34:17','2026-07-29 07:34:17'),(8,4,'Demo 1 (Tour & Travel Booking)','https://travel1.whatsupitech.com','Hot','2026-07-29 07:34:17','2026-07-29 07:34:17'),(9,4,'Demo 2 (Visa & Ticket Agency)','https://travel2.whatsupitech.com','New','2026-07-29 07:34:17','2026-07-29 07:34:17'),(10,5,'Demo 1 (School Management System)','https://school1.whatsupitech.com','Top Rated','2026-07-29 07:34:17','2026-07-29 07:34:17'),(11,5,'Demo 2 (Coaching & LMS Portal)','https://coaching2.whatsupitech.com','Popular','2026-07-29 07:34:17','2026-07-29 07:34:17');
/*!40000 ALTER TABLE `demo_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'আমাদের আধুনিক অফিস পরিবেশ','WhatsUp I-Tech Workspace','/images/gal1.png',1,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(2,'টিম মিটিং ও প্রজেক্ট আলোচনা','Brainstorming & Planning','/images/gal2.png',2,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(3,'দক্ষ ও প্রফেশনাল ডেভেলপমেন্ট টিম','Developer Workstation','/images/team.png',3,'2026-07-29 07:34:17','2026-07-29 07:34:17'),(4,'ডিজিটাল সলিউশন ও মকআপ ড্যাশবোর্ড','Software Design Portfolio','/images/hero-mockup.png',4,'2026-07-29 07:34:17','2026-07-29 07:34:17');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `original_price` varchar(255) DEFAULT NULL,
  `is_popular` tinyint(1) DEFAULT 0,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`features`)),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'STARTER PACKAGE','ছোট ও নতুন অনলাইন ব্যবসার জন্য','৪,৯৯০','১০,০০০',0,'[\"E-commerce Website (Single-Vendor)\",\"Easy Product Management\",\"Basic Order Management System\",\"Courier Service Integration\",\"Incomplete Order Tracking (Cart Abandonment)\",\"Suspicious Customer Fraud Check\",\"Payment Gateway Setup (bKash, Nagad, COD)\",\"Facebook Pixel Integration\",\"SEO-Friendly & Speed Optimized\",\"৫টি Ready-Made Landing Page\",\"১ বছরে ৩টি Customized Landing Page\",\"Fast Managed Hosting\",\"Admin Training & Basic Support\",\"Priority Technical Support\"]','2026-07-29 07:34:17','2026-07-29 07:34:17'),(2,'BUSINESS GROWTH PACKAGE','নিয়মিত বিক্রি করা Facebook Seller ও growing business-এর জন্য','৯,৯৯০','২৫,০০০',1,'[\"Advanced E-commerce Website & Admin Panel\",\"Advanced Product, Stock & Order Management\",\"Advanced Incomplete Order Tracking\",\"Real & Suspicious Customer Analysis\",\"Area-Based Advanced Order Filtering\",\"Customer Database & Repeat Marketing সুবিধা\",\"OTP দিয়ে Call ছাড়াই Order Confirmation\",\"একাধিক Courier Service ব্যবহারের সুবিধা\",\"Advanced Coupon, Flash Sale & Campaign Management\",\"SSLCOMMERZ Payment Gateway\",\"Personal & Merchant bKash\",\"Nagad, Rocket, Bank Payment & Cash on Delivery\",\"Facebook Pixel—Browser-Side Tracking\",\"Facebook Server-Side Tracking\",\"Conversion API Setup\",\"Event Deduplication Setup\",\"Google Analytics Setup\",\"Advanced Marketing Tracking\",\"SEO-Friendly & High-Speed Optimization\",\"বাংলা ও English Language Support\",\"১০টি Ready-Made Landing Page\",\"১ বছরে সর্বোচ্চ ৫টি Customized Landing Page\",\"Super-Fast Managed Hosting\",\"প্রয়োজনীয় Basic Customization\",\"Admin Training ও Launch Support\",\"Priority Technical Support\"]','2026-07-29 07:34:17','2026-07-29 07:34:17'),(3,'PREMIUM AUTOMATION PACKAGE','বড় ব্যবসা, বেশি অর্ডার ও advanced marketing-এর জন্য','১৯,৯৯০','৫০,০০০',0,'[\"সম্পূর্ণ Advanced E-commerce Website ও Admin Panel\",\"Advanced Product, Stock, Order ও Customer Management\",\"Advanced Incomplete Order Tracking\",\"Real ও Suspicious Customer Analysis\",\"Area-Based Advanced Order Filtering\",\"Customer Database ও Repeat Marketing সুবিধা\",\"OTP দিয়ে Call ছাড়াই Order Confirmation\",\"একাধিক Courier Service ব্যবহারের সুবিধা\",\"Advanced Coupon, Flash Sale ও Campaign Management\",\"SSLCOMMERZ Payment Gateway\",\"Personal ও Merchant bKash\",\"Nagad, Rocket, Bank Payment ও Cash on Delivery\",\"Facebook Pixel—Browser-Side Tracking\",\"Facebook Server-Side Tracking\",\"Conversion API Setup\",\"Event Deduplication Setup\",\"Stape Setup\",\"Google Analytics Setup\",\"Advanced Marketing Tracking\",\"SEO-Friendly ও High-Speed Optimization\",\"বাংলা ও English Language Support\",\"২০টি Ready-Made Landing Page\",\"১ বছরে সর্বোচ্চ ১০টি Customized Landing Page\",\"Brand অনুযায়ী Premium Colour ও Design Setup\",\"Super-Fast Managed Dedicated Server\",\"১ বছরের ফ্রি Hosting\",\"১ বছরের ফ্রি Basic Server Maintenance\",\"Admin Training ও Complete Launch Support\",\"Priority Technical Support\",\"Working Demo দেখে সিদ্ধান্ত নেওয়ার সুযোগ\"]','2026-07-29 07:34:17','2026-07-29 07:34:17');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT '#',
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'ওয়েবসাইট ডেভেলপমেন্ট','আধুনিক ও রেসপন্সিভ ওয়েবসাইট যা আপনার বিজনেস বাড়াবে ৩ গুণ।','fa-laptop-code','#',1,'2026-07-29 07:34:16','2026-07-29 07:34:16'),(2,'ই-কমার্স ও ওয়েবসাইটস','সম্পূর্ণ নিয়ন্ত্রনসহ দ্রুত ও ফাস্ট ই-কমার্স পোর্টাল ম্যানেজমেন্ট সিস্টেম।','fa-shopping-cart','#',2,'2026-07-29 07:34:16','2026-07-29 07:34:16'),(3,'মোবাইল অ্যাপ ডেভেলপমেন্ট','অ্যান্ড্রয়েড এবং আইওএস প্ল্যাটফর্মের আধুনিক মোবাইল অ্যাপ।','fa-mobile-alt','#',3,'2026-07-29 07:34:16','2026-07-29 07:34:16'),(4,'কাস্টম সফটওয়্যার','আপনার ব্যবসায়ের জন্য মানানসই সফটওয়্যার সমাধান।','fa-cogs','#',4,'2026-07-29 07:34:16','2026-07-29 07:34:16'),(5,'ডিজিটাল মার্কেটিং','SEO, SMM, PPC সহ টার্গেটেড ব্র্যান্ডিং মার্কেটিং সার্ভিস।','fa-bullhorn','#',5,'2026-07-29 07:34:16','2026-07-29 07:34:16'),(6,'গ্রাফিক ডিজাইন','ব্র্যান্ডিং, লোগো, ব্যানারের সকল প্রিমিয়াম ডিজাইন সেবা।','fa-palette','#',6,'2026-07-29 07:34:16','2026-07-29 07:34:16'),(7,'ok','test','fa-laptop-code','#',7,'2026-07-29 01:57:43','2026-07-29 01:57:43');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('0lPUSVzrhmB5BoLhygeoqWU0R9VnGy5aDR6KGgWW',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNHlMekN1a2FIbzQ5NGpxRXU4VnhzY241N1dsOVI4RXdZVDJ6Z2ZCYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311067),('1iFhXPT9jMZEjsUE73FONBjdnL2JtCSuKRcOKddu',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRHpEZnZEbkpIa2lqaVlEU1lsa0NDMnUwS2RuQzFsWHdqdzcycEpGcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312949),('2t0PNkrhqUAE68BNWnGawpBhAWdi42b6tG6800dL',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiODZ0czdSc3JRSU8yUERHOGl2UUZGRkEwbnNRbGVidW5tRThJYkpRWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785310885),('38lY2paUNKU4WoHaYBKhQgnVfDkJmwAYrkZWxDEl',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiV01ZaVEzUTV1T0JBeVlnU1dWWW1XTUN0Zm55WFF2amE0ZUtUaVF0MCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785310885),('3Ra6sPFNkIRHpzAzkiW9QOjqThkEZNK58P7BtuHA',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoidmxlTlR0aWhtRzFZTG9LenczS3JMbkQyc2tYOWdjejhSbmk2TjdQYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312587),('3ZYAwkEKfQMle0yd3xmLPBaHuWgbWpU384AKRilm',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY0JtS2RiQWI4cnd2eG13UndPaUpDbjdPTjN5SnhwVjdiNXBienNYWCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXR0aW5ncyI7czo1OiJyb3V0ZSI7czoxNDoiYWRtaW4uc2V0dGluZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE1OiJhZG1pbl9sb2dnZWRfaW4iO2I6MTt9',1785313983),('7aRjgVAc7WNTNzkaAU8pVCPiAXLMKlKEtF3qoRV4',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXJzWjhRVWNZSlZvcmJ5bEZsR1VyZ3AwSTRqa0JZMVJDWDlxUEdqdCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312136),('7QRzZLjEfT7fnxyo8A6lG9nQrSQ6Jo4IUdLmtUvP',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1JLNWdhNDVYVFpzSllJdXRKWHlBYjdWcUpTWWxlaXZSMGN0ZU5vWiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785310465),('7rsAETJv0P5JORfRSKs5yO5KhADduxaA5ST9GaJ5',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoibUVBWEJMOHl4QzFERkpsdUJWdUtUdnRKcGFEcGxQdU50V0R6cVJDYSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoxMToiYWRtaW4ubG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1785313147),('7V6CPLfzXC8kgPNIyUQkTVREJNLAn4aYrH4u9quC',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoieFlWazJBUlZjREhpa1huYVl0enNneEtuNlB1Nk0xdkJIdkluRFd0QSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312305),('8ortvcuXk11tYKRDKu3fsihUjArQuTA1TN9vvE7p',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiekxYYmVSQTllWmpsaE5KNlhlVmpLYzJoaWE0aUp0ZklQakNEMTFHbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785310465),('a9ceVdycefpVSqhucvFNXFOAWebE3fqkiWhEcpbh',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoidlZkejlPMlJnZzVEb1pjemw2MTZKN2Q4MHo3YWthSjdicEpVMHlEUSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312225),('amAWi8gxqNnDtbcVmftkoh5qCuwm2joRuCqTVHu2',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVJsQWdBelRtc3FmQ1hnMEE1dHlObzRsZGdZWjFnZEdEd3BMeGtTMyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311530),('b0tmF0b02ojwFqMedysEO9i6knexjjD0DzuI57q9',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoibU9seWVXbmV0NjJ5cTc5UnE2UlZHZUpHZmZ4R1FUS1VQU2pzQnZ3ZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785314121),('bElE3siEjvjloajKdSiksGKTdkA5kd9JxJIG5578',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZE11SFVBSTV6NElqVW9Bd29jc2Z1Vkd5OHJlbjNHdGtpR25wU0tWRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311331),('bXkayfuqgR5AoKHxY5seRr9VOtLe8mKmBcwMA3nn',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTDFMTXh5WEp3eFhYR2RvWEhwOFRKcWpOemJPV1ZLREMzUnNSY2ZJeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312093),('Ccm62lwWXzjLUGTo98cUVjY83tgfaZZ7TT3H8hq6',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZW0ySm52QUU1R21DNU9YQ1lXbnFGazY3Y2tsZGo4aVk0b3lrZWhoUSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXBwb3J0IjtzOjU6InJvdXRlIjtzOjc6InN1cHBvcnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1785312950),('CIGSjwGGVee0HN0fzBQ7ZQ93772K8QGcCYZXOL61',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiYm5ER0JXSTE2NERMZUNoU1VTUFFQbWkxd2VsUnpteW9SNGNnb0thdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311664),('efyo7YYk8mIGxGzzOxykHpihnuH2bvIl2KIe0ua5',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3F0anl3clJHNkVqUENWTWJFQkdCdDJ5YnBHZ2dBMzZkRU10OWJDRiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312506),('eNr28SdTf4q6PfHg6M432HOlSKyIFHCpPRduf2CL',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVktlUE9lNks0cm9sUzBsV3Noc25JbG9oam5YN1p1N0NXOU9XampLcyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312117),('F7HxPAPycEDFHnfkSXSbiWjqy86M8JybGwWQAj3p',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoibzRndUtSR2N6cWZibkh3azhUZ1VTNWpXTWcxSEltdnNXQ09jNXNWeSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313558),('fh4t58ejYRtnvnAVSNGzSUwd1Mr7s31z8jZ7rbcP',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNHprMFZTSThxb0hzeWpsVkJYa0Ewcll4RTVhYVZwOVppSXAwMUx6RCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312587),('Flc0zWzzNflAkJgrZdh3KC48DQzkwQFL5uzry4iN',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3NvT3czUTZtbmFDVGRSMzJGNUZJYUoyU2RaNXZpaHVtOGUzUlVZdSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312673),('g2lEcZ1zU5ESacxpgIvypI22lYOByJUqOO0q5a5D',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGo2YWw4ZTFKVVNVY1AxeHVVdlFUajNYN0dSc21zcHp0cG1UdzcxVCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311664),('g7Au2TZ1J2L80z0hoBsFyrZlcNHud0Ibkn0N9DxZ',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzFUVVZhUzFwcXFlRFRIdUNpQUF1elh2aTNvcjVYZ0NMREJuamtBcCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311960),('HK56nqyTYlRWTFigC0AWqOuCZadrpqzNK4R2pQzE',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoibzNYNFVKSDM1ZVp0d0FPTWJObndDY1l2ak9UN2tkQVpsMlF5cXBHaCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312305),('HqWDHJx53idfKfLMOYW5knNDugjU4pJHsA99q0V7',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiV2FLcTZBd2xvZzNUWkZOdGl0aERkWXNYZVNUNldyU1MyTkZtR2tPeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313002),('i9FXhrGcWEyOr1bU9eJVIYoh0qY8bmImHztb2mSK',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoia2g1TFhEd3c5dFVwRjlYOU4yRGFyek9BWEdwV0VhcXV4cVhBdDg5dCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311068),('IlcS22TMYTEn3DUwlI74v07rxn0wYGjIaXGcaPtI',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY0NaQ1Bva1NHZTd3NXY5VmNIaG40RzgwcWlYUW1POVV0VHZxVXBOMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312505),('jGoqKcvulj28U9reaW0SMEAfDuAYhlYBqZBhW8J9',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoickVKNHBtWG1OSmJqMjBJOU96Z1oxTWgwalN6cXZKRDBoVTRFVzlsdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785314120),('lygI2i2uZX1N1G8G7ZPz4tMpWuMQfsmnnbaeKU41',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzB6V0U0Z2ZTeFhNUUxLSnJ3V2hpQTd6cnRRQ1p2YklGMG1nRjQ0ZyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoxMToiYWRtaW4ubG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1785310467),('nFo317nslUY9zbksgLgEHaINa7itxj6CubIprnlA',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZVFDeVpFVVk5eURtSkxmc3VzalVVT2dqSFNMN096RXFqMGMybjN2RCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311529),('No27dCRFSCA5nkjmabCQCKYdZQjztrnysam31yxN',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0x1Y2V2TDRhNmJNemlVSk5tczJTZlFlQlFjb2RmUWpMWjkwdmlFdiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mYXEiO3M6NToicm91dGUiO3M6MzoiZmFxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313008),('No7dbuAjCy64B8CDRsbGkj4zmPF2kQkSznAYDT3b',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUZNVWFMTk9kMlZTcEVkTFVsVXdGWG9nWW40NXdqdHBia3RtV1FvRSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311307),('O6OgM4tzJWQrLAsMNfL6pP7nOK839U7Wmyx4QHeO',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWFgyT2l1RW5ycUwzUkZSZU5UTTNjaXY1ZFZ6OXBGeXc1OVFxc2c3ZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312136),('om1mGIbOcy0HoarG0p8asCg5EF6nMxOlKLZnZSuh',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.19041.7548','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRUtITDdheURQeDhWVXJDWkIyREtXbEVBWTEzVWpQYzVQNzNKSGhoTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313664),('pNL7si5SUfF01JsX5ttFvubHeHvYRKqXCtdY5qfB',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSTZxcmRrMVdtZGl5RjN6YjBxVUdJQndLajdQUGdnWUx6YWJKTGNnYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312225),('qHViCKF0s1GNobUfrMeiN2veHxxEaUga5o8hZ0wI',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXIzWWVyenNhRzR0aVQwZ1dWVE14cGFqc3o4T0lHa1VNTlRvODNiayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoxMToiYWRtaW4ubG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1785312093),('Rh6mbU4qmROhUjiIcrcrqKqS0wg5kz0Jyn4EuECc',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWnpGVFpzOW9DVDFPZFd6MFNQWm05enRIV3RYdkN5ZzRqZGdWaFpFZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785310467),('s3U54ihqW2tc2GhoWatMcy6qaAYikVPPDYkDGuvw',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVGFlbTgzSEZ0b1ZEcXBQUnNuT2tIcWlOMFVUS01Pc3dHV0VtbktXMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312116),('SEOEPvmOnkgRDBxmoJNE2lhv5jEh2xUqz8Sd9Psl',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRmxXU1UwTHhBQmVremZwNlhtRmdhUUR5U0pLNUhaV3RONkJjMGNRdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313147),('WaUgQ0UuewSNWLRkUZRVilUFjsdU10EpGiNyQibO',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVlQN1lDTXV1WlpLNkJQRVI5Vk1VcE1ab2J2dUF3Zkk4TGRGQzFhVyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311331),('WergWvVPEyHkBq0bax1dNEKp7IDSGAM0v3gJgoMd',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY1FocjNtZm90YVlGSXNkMzFTWHZDemFwZlQwWGFnM1FwMEdFRThHciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311799),('Wzqz2NsxrVWFsqgRYH7Ubcb5wYttxmcSXZ3GXruA',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUFRLS0xTbkpEc1NsRkxJTU15eTFZUXI5RlNyejQ5ak03b3FCNWhCaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313558),('XdGUra5cAE36Xa4zkatznw8DLYOeKkLlH2nI4tVp',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiakt0bkNTZTlDaTNWcXRJR092Tkw0R0hsdXp2QjV0ODYzSXRjcHZJMSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311157),('xhytxNg5DX0QkwdlctMTVXvaY9xIc31Jx2hUYhWh',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoib3NxYXhhTVdLODQ4OTNnYXhaNHl0ZFNjcm5ydGpEZTYxc1ZzSDM2cyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311799),('Y3NAdAYDDkTj6MEtItMwjmU6uDJfyDCCzp4TGubz',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoibG5LdFhJNE9HcW50WXZGZkxlNnlYcloyWmtJVXMzZWl4OUluZkxDeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785313007),('ZjK9R6cyw31MR7O3RMsj9xuYQdTOmSTOTqb0IxMK',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoibnprTENnSnRxazZBTTJuamlCVzlhRG9HT09jNFZ5eG5aazBnOHgwVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785311157),('ZYlIFPTCW8PyIUuq8Vec1RehnMT703pEsaRwUrT7',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3BKT29PbTNqTkhpMmpPbDVXUVBPNThkdHVsdkNPcUdHS01ON2x2USI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXBwb3J0IjtzOjU6InJvdXRlIjtzOjc6InN1cHBvcnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1785313003),('ZzPYqB0lVXS7MkHYWMCksErYW7hKt8VmD6VsUzw5',NULL,'127.0.0.1','Go-http-client/1.1','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWXhTRWN3MldHNE9iNVM0Q29ZN01wcnNVbzc3dFlkMDJOR2MyMVhUUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1785312673);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'phone','100000000000','2026-07-29 07:34:17','2026-07-29 01:55:39'),(2,'email','admin@whatsupitech.com','2026-07-29 07:34:17','2026-07-29 02:32:37'),(3,'address','হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩,','2026-07-29 07:34:17','2026-07-29 02:31:09'),(4,'facebook','https://facebook.com','2026-07-29 07:34:17','2026-07-29 07:34:17'),(5,'youtube',NULL,'2026-07-29 07:34:17','2026-07-29 02:33:03'),(6,'linkedin','https://linkedin.com','2026-07-29 07:34:17','2026-07-29 07:34:17'),(7,'whatsapp','https://wa.me/8801657043577','2026-07-29 07:34:17','2026-07-29 07:34:17'),(8,'messenger','https://m.me/whatsupitech','2026-07-29 07:34:17','2026-07-29 07:34:17'),(9,'instagram','https://instagram.com','2026-07-29 07:34:17','2026-07-29 07:34:17'),(10,'privacy_policy','WhatsUp i-Tech কাস্টমারের তথ্যের গোপনীয়তা রক্ষা করতে প্রতিশ্রুতিবদ্ধ।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(11,'terms_conditions','আমাদের সেবা গ্রহণের পূর্বে সকল নিয়ম ও শর্তাবলী ভালোভাবে পড়ে নিন।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(12,'faq_content','প্রশ্ন: আপনাদের ই-কমার্স ওয়েবসাইটে কী কী ফিচার থাকে?\r\nউত্তর: আমাদের ওয়েবসাইটে সম্পূর্ণ রেসপন্সিভ ডিজাইন, অ্যাডমিন প্যানেল, স্টক ম্যানেজমেন্ট, ওটিপি ভেরিফিকেশন ও কুরিয়ার ইন্টিগ্রেশন থাকে।','2026-07-29 07:34:17','2026-07-29 01:35:12'),(13,'support_content','আমাদের ২৪/৭ কাস্টমার সাপোর্ট টিমের সাথে সরাসরি যোগাযোগ করুন:\r\n\r\nফোন: 111111111111111111111111111111\r\nইমেইল: support@whatsupitech.com\r\nঅফিস: হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০','2026-07-29 07:34:17','2026-07-29 01:52:25'),(14,'logo','/images/logo.png','2026-07-29 01:37:55','2026-07-29 01:37:55'),(15,'favicon','/images/favicon.ico','2026-07-29 01:48:50','2026-07-29 01:48:50'),(16,'whatsapp_number','1222222222222222','2026-07-29 01:51:23','2026-07-29 01:51:23'),(17,'messenger_link','https://m.me/whatsupitech','2026-07-29 01:51:23','2026-07-29 01:51:23'),(18,'hero_banner','images/hero_banner_1785313387.jpg','2026-07-29 02:23:07','2026-07-29 02:23:07'),(19,'hero_banners','[\"images\\/hero_banner_1785313618_936_0.jpg\",\"images\\/hero_banner_1785313678_586_0.png\"]','2026-07-29 02:26:58','2026-07-29 02:28:02');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT 5,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'তৌফিকুর রহমান','Founder, Daily Bazar','/images/user1.jpg',5,'Whatsup i-Tech আমাদের জন্য একটি চমৎকার ই-কমার্স সাইট তৈরি করে দিয়েছে। তাদের সেবা সত্যিই অসাধারণ।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(2,'নাহিদা আক্তার','CEO, Fashion Gallery','/images/user2.jpg',5,'তাদের ডিজাইন সেন্স অত্যন্ত ভালো এবং টাইম টু টাইম ডেলিভারি নিশ্চিত করে। কাজের মান খুবই উন্নত।','2026-07-29 07:34:17','2026-07-29 07:34:17'),(3,'মো: জাহিদুল ইসলাম','Manager, Kurkuri Limited','/images/user3.jpg',5,'আমাদের কোম্পানির ওয়েবসাইটটি এসে খুবই সুন্দরভাবে ডিজাইন এবং ডেভেলপ করা হয়েছে।','2026-07-29 07:34:17','2026-07-29 07:34:17');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-29 14:35:50
