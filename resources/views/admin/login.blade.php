@extends('layouts.app')

@section('content')
<div style="min-height: 100vh; background: radial-gradient(circle at top right, #111d42 0%, #050b1e 60%); display: flex; align-items: center; justify-content: center; padding: 20px;">
    <div style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; width: 100%; max-width: 440px; box-shadow: 0 20px 50px rgba(0,0,0,0.5); color: white;">
        
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('images/logo.png') }}" alt="WhatsUp i-Tech Logo" style="height: 60px; width: auto; object-fit: contain; margin-bottom: 12px; filter: drop-shadow(0 2px 8px rgba(0,0,0,0.5));">
            <h2 style="font-size: 22px; font-weight: 800; color: white;">অ্যাডমিন প্যানেল লগইন</h2>
            <p style="font-size: 14px; color: #94a3b8; margin-top: 4px;">এডমিন ড্যাশবোর্ডে প্রবেশ করতে লগইন করুন</p>
        </div>

        @if(session('error'))
            <div style="background: rgba(239, 68, 68, 0.2); border: 1px solid #ef4444; color: #fca5a5; padding: 12px; border-radius: 8px; font-size: 14px; margin-bottom: 20px; text-align: center; font-weight: 600;">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #cbd5e1;">ইউজারনেম / ইমেইল</label>
                <div style="position: relative;">
                    <i class="fa-solid fa-user" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b;"></i>
                    <input type="text" name="username" value="admin" required placeholder="admin" style="width: 100%; padding: 12px 14px 12px 42px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); border-radius: 10px; color: white; font-size: 15px; outline: none; transition: 0.3s;">
                </div>
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #cbd5e1;">পাসওয়ার্ড</label>
                <div style="position: relative;">
                    <i class="fa-solid fa-lock" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b;"></i>
                    <input type="password" name="password" required placeholder="••••••••" style="width: 100%; padding: 12px 14px 12px 42px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); border-radius: 10px; color: white; font-size: 15px; outline: none; transition: 0.3s;">
                </div>
            </div>

            <button type="submit" style="width: 100%; background: linear-gradient(135deg, var(--accent-orange), #f97316); color: white; border: none; padding: 14px; border-radius: 10px; font-weight: 800; font-size: 16px; cursor: pointer; transition: 0.3s; box-shadow: 0 10px 20px rgba(255,87,34,0.3);">
                <i class="fa-solid fa-right-to-bracket"></i> লগইন করুন
            </button>
        </form>
    </div>
</div>
@endsection
