<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WhatsUp I-Tech | ডিজিটাল আইটি সার্ভিসেস ও সফটওয়্যার সমাধান</title>
    
    <!-- Google Fonts for Bengali & Modern Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Inline Custom Styles matching 100% design fidelity -->
    <style>
        :root {
            --primary-navy: #050b1e;
            --secondary-navy: #0a132c;
            --accent-orange: #ff5722;
            --accent-orange-hover: #e04818;
            --accent-blue: #007bff;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --card-bg: #ffffff;
            --border-color: #e2e8f0;
            --bg-light: #f8fafc;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Hind Siliguri', 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Container */
        .container {
            max-width: 1650px;
            margin: 0 auto;
            padding: 0 30px;
        }

        /* Top Announcement Bar */
        .top-bar {
            background-color: var(--primary-navy);
            color: #94a3b8;
            font-size: 13px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar-left span {
            color: #e2e8f0;
        }

        .top-bar-right {
            display: flex;
            gap: 18px;
            align-items: center;
        }

        .top-bar-right a {
            color: #94a3b8;
            transition: color 0.2s ease;
        }

        .top-bar-right a:hover {
            color: var(--accent-orange);
        }

        /* Main Navbar */
        .header {
            background-color: var(--primary-navy);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-box {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            font-weight: 800;
            font-size: 18px;
            width: 38px;
            height: 38px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-text {
            color: white;
            font-weight: 800;
            font-size: 22px;
            letter-spacing: -0.5px;
        }

        .brand-text span {
            color: var(--accent-orange);
            font-size: 14px;
            display: block;
            font-weight: 600;
            margin-top: -4px;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: #cbd5e1;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .nav-links a.active, .nav-links a:hover {
            color: #ffffff;
            font-weight: 600;
        }

        .nav-right-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .phone-link {
            color: white;
            font-weight: 700;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .phone-link i {
            color: var(--accent-orange);
        }

        .btn-primary {
            background: linear-gradient(90deg, #ff5722, #ff7043);
            color: white;
            padding: 10px 22px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 87, 34, 0.3);
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 87, 34, 0.45);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 10px 22px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Hero Banner */
        .hero-section {
            background: radial-gradient(circle at top right, #111d42 0%, #050b1e 60%);
            color: white;
            height: 750px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 40px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 42px;
            line-height: 1.25;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-content h1 span {
            color: var(--accent-orange);
        }

        .hero-content p {
            color: #94a3b8;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 35px;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255,255,255,0.05);
            padding: 8px 16px;
            border-radius: 50px;
            width: fit-content;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .avatar-group {
            display: flex;
        }

        .avatar-group img {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 2px solid var(--primary-navy);
            margin-left: -8px;
        }

        .avatar-group img:first-child {
            margin-left: 0;
        }

        .trust-text {
            font-size: 13px;
            color: #cbd5e1;
            font-weight: 500;
        }

        .hero-media {
            position: relative;
            text-align: center;
        }

        .hero-media img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 15px 30px rgba(0,0,0,0.5));
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }

        /* Stats Pill Row */
        .stats-bar {
            background: white;
            border-radius: 16px;
            padding: 24px 30px;
            margin-top: -45px;
            position: relative;
            z-index: 10;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-right: 15px;
            border-right: 1px solid #f1f5f9;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: #eff6ff;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .stat-num {
            font-size: 22px;
            font-weight: 800;
            color: var(--text-dark);
            line-height: 1;
        }

        .stat-desc {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 4px;
        }

        /* Section Styling */
        .section {
            padding: 80px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-subtitle {
            color: var(--accent-orange);
            font-weight: 600;
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
        }

        .section-title {
            font-size: 32px;
            font-weight: 800;
            color: var(--text-dark);
        }

        /* Services Cards Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .service-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            border-color: #e0f2fe;
        }

        .service-icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 14px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }

        .service-card:nth-child(1) .service-icon-wrapper { background: #eff6ff; color: #2563eb; }
        .service-card:nth-child(2) .service-icon-wrapper { background: #f0fdf4; color: #16a34a; }
        .service-card:nth-child(3) .service-icon-wrapper { background: #fef2f2; color: #dc2626; }
        .service-card:nth-child(4) .service-icon-wrapper { background: #fff7ed; color: #ea580c; }
        .service-card:nth-child(5) .service-icon-wrapper { background: #faf5ff; color: #9333ea; }
        .service-card:nth-child(6) .service-icon-wrapper { background: #f0f9ff; color: #0284c7; }

        .service-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .service-desc {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .service-link {
            color: #007bff;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .service-link i {
            transition: transform 0.2s ease;
        }

        .service-card:hover .service-link i {
            transform: translateX(4px);
        }

        /* Why Choose Us Section */
        .why-us-section {
            background: #ffffff;
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .why-us-images {
            position: relative;
        }

        .why-us-images img {
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .experience-badge {
            position: absolute;
            bottom: -20px;
            left: 20px;
            background: white;
            padding: 16px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
            display: flex;
            align-items: center;
            gap: 12px;
            border-left: 4px solid var(--accent-orange);
        }

        .experience-badge h3 {
            font-size: 24px;
            color: var(--accent-orange);
            font-weight: 800;
        }

        .why-us-list {
            list-style: none;
            margin: 24px 0 35px;
        }

        .why-us-list li {
            font-size: 15px;
            color: #334155;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .why-us-list li i {
            color: #007bff;
            font-size: 16px;
        }

        .callout-box {
            background: var(--primary-navy);
            color: white;
            border-radius: 14px;
            padding: 25px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .callout-box h4 {
            font-size: 18px;
            font-weight: 700;
        }

        .callout-box p {
            font-size: 13px;
            color: #94a3b8;
        }

        /* Portfolio / Recent Projects */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .project-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
        }

        .project-img {
            width: 100%;
            height: 180px;
            background: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            overflow: hidden;
            position: relative;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-info {
            padding: 16px;
        }

        .project-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .project-cat {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* Pricing Packages */
        .packages-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            align-items: stretch;
        }

        .package-card {
            background: white;
            border-radius: 16px;
            padding: 35px 28px;
            border: 1px solid #e2e8f0;
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .package-card.popular {
            border: 2px solid var(--accent-orange);
            box-shadow: 0 15px 35px rgba(255, 87, 34, 0.15);
        }

        .popular-badge {
            position: absolute;
            top: -14px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--accent-orange);
            color: white;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 16px;
            border-radius: 20px;
        }

        .pkg-name {
            font-size: 20px;
            font-weight: 800;
            text-align: center;
        }

        .pkg-badge {
            text-align: center;
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 4px;
            margin-bottom: 20px;
        }

        .pkg-price {
            text-align: center;
            font-size: 32px;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 25px;
        }

        .pkg-price span {
            font-size: 16px;
            font-weight: 400;
            color: var(--text-muted);
            text-decoration: line-through;
            margin-left: 6px;
        }

        .pkg-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .pkg-features li {
            font-size: 14px;
            color: #475569;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .pkg-features li i {
            color: #007bff;
        }

        /* Work Flow / Process */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
            text-align: center;
        }

        .process-step {
            background: white;
            border-radius: 12px;
            padding: 20px 10px;
            border: 1px solid #f1f5f9;
        }

        .process-num {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }

        .process-title {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .process-desc {
            font-size: 11px;
            color: var(--text-muted);
        }

        /* Testimonials */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testimonial-card {
            background: white;
            border-radius: 14px;
            padding: 25px;
            border: 1px solid #e2e8f0;
        }

        .stars {
            color: #ffb800;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .testimonial-comment {
            font-size: 14px;
            color: #334155;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .client-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .client-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #cbd5e1;
        }

        .client-name {
            font-size: 14px;
            font-weight: 700;
        }

        .client-role {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* Blog Section */
        .blogs-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .blog-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .blog-img {
            height: 160px;
            background: #1e293b;
            position: relative;
            overflow: hidden;
        }

        .blog-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover .blog-img img {
            transform: scale(1.05);
        }

        .blog-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: #ffffff;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .blog-content {
            padding: 20px 18px;
        }

        .blog-title {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.45;
            color: var(--text-dark);
        }

        .blog-excerpt {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Contact Form Banner */
        .contact-section {
            background: #080e21;
            color: white;
            padding: 50px 45px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 40px;
            align-items: center;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .form-input {
            width: 100%;
            padding: 14px 18px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(255,255,255,0.04);
            color: white;
            font-size: 14px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input::placeholder {
            color: #64748b;
        }

        .form-input:focus {
            border-color: var(--accent-orange);
            background: rgba(255,255,255,0.08);
        }

        .btn-submit {
            background: linear-gradient(90deg, #ff5722, #ff7043);
            color: white;
            padding: 14px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 15px;
            border: none;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 87, 34, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 87, 34, 0.45);
        }

        /* Footer */
        .footer {
            background: #030712;
            color: #94a3b8;
            padding: 60px 0 20px;
            font-size: 14px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1.5fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h5 {
            color: white;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.08);
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        /* Responsiveness */
        @media (max-width: 992px) {
            .hero-grid, .why-us-grid, .contact-grid { grid-template-columns: 1fr; }
            .services-grid, .packages-grid, .testimonials-grid { grid-template-columns: 1fr 1fr; }
            .projects-grid, .blogs-grid { grid-template-columns: 1fr 1fr; }
            .process-grid { grid-template-columns: repeat(3, 1fr); }
            .stats-bar { grid-template-columns: repeat(2, 1fr); }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 600px) {
            .services-grid, .packages-grid, .testimonials-grid, .projects-grid, .blogs-grid, .process-grid, .stats-bar { grid-template-columns: 1fr; }
            .nav-links { display: none; }
            .form-row { grid-template-columns: 1fr; }
            .hero-content h1 { font-size: 30px; }
        }

        /* Floating Action Buttons */
        .floating-container {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            z-index: 9999;
            align-items: center;
        }

        .floating-btn {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff !important;
            font-size: 24px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            border: none;
            cursor: pointer;
        }

        .floating-btn:hover {
            transform: scale(1.12) translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }

        .floating-btn.whatsapp {
            background: #25D366;
        }

        .floating-btn.messenger {
            background: linear-gradient(135deg, #00B2FF, #006AFF);
        }

        .floating-btn.scroll-top {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            opacity: 0;
            visibility: hidden;
            transform: scale(0.8);
        }

        .floating-btn.scroll-top.show {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }

        .floating-tooltip {
            position: absolute;
            right: 65px;
            background: rgba(15, 23, 42, 0.9);
            color: #ffffff;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease, transform 0.2s ease;
            transform: translateX(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .floating-btn:hover .floating-tooltip {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>
<body>

    @if(session('success'))
    <div style="background: #10b981; color: white; text-align: center; padding: 12px; font-weight: 700; font-size: 15px; position: fixed; top: 0; left: 0; right: 0; z-index: 99999; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
        <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
    </div>
    @endif

    @yield('content')

    <!-- Floating Action Buttons (WhatsApp, Messenger, Scroll to Top) -->
    <div class="floating-container">
        <a href="https://wa.me/8801657043577" target="_blank" class="floating-btn whatsapp" aria-label="WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
            <span class="floating-tooltip">হোয়াটসঅ্যাপে চ্যাট করুন</span>
        </a>
        <a href="https://m.me/whatsupitech" target="_blank" class="floating-btn messenger" aria-label="Messenger">
            <i class="fa-brands fa-facebook-messenger"></i>
            <span class="floating-tooltip">মেসেঞ্জারে চ্যাট করুন</span>
        </a>
        <button id="scrollTopBtn" class="floating-btn scroll-top" aria-label="Scroll to top" onclick="scrollToTop()">
            <i class="fa-solid fa-arrow-up"></i>
            <span class="floating-tooltip">উপরে যান</span>
        </button>
    </div>

    <!-- Success Modal / Toast Notification Script -->
    <script>
        // Scroll to Top Functionality
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        if (scrollTopBtn) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    scrollTopBtn.classList.add('show');
                } else {
                    scrollTopBtn.classList.remove('show');
                }
            });
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(form);
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const alertBox = document.getElementById('formAlert');

                    submitBtn.disabled = true;
                    submitBtn.innerText = 'পাঠানো হচ্ছে...';

                    fetch('{{ route("contact.submit") }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        submitBtn.disabled = false;
                        submitBtn.innerText = 'মেসেজ পাঠান';
                        if (data.success) {
                            alertBox.style.display = 'block';
                            alertBox.style.background = '#10b981';
                            alertBox.style.color = '#ffffff';
                            alertBox.innerText = data.message;
                            form.reset();
                        } else {
                            alertBox.style.display = 'block';
                            alertBox.style.background = '#ef4444';
                            alertBox.style.color = '#ffffff';
                            alertBox.innerText = 'অনুগ্রহ করে সঠিক তথ্য দিন।';
                        }
                    })
                    .catch(() => {
                        submitBtn.disabled = false;
                        submitBtn.innerText = 'মেসেজ পাঠান';
                        alertBox.style.display = 'block';
                        alertBox.style.background = '#ef4444';
                        alertBox.style.color = '#ffffff';
                        alertBox.innerText = 'ত্রুটি ঘটেছে, আবার চেষ্টা করুন।';
                    });
                });
            }
        });
    </script>
</body>
</html>
