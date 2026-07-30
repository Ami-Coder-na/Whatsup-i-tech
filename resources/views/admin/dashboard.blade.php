@extends('layouts.admin')

@section('title', 'অ্যাডমিন ড্যাশবোর্ড')

@section('admin_content')
<div class="stats-grid" style="grid-template-columns: repeat(3, 1fr);">
    <div class="stat-card">
        <div class="stat-icon"><i class="fa-solid fa-laptop-code"></i></div>
        <div>
            <div class="stat-num">{{ $stats['services'] }}</div>
            <div class="stat-label">মোট সার্ভিস</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon" style="background: #fff7ed; color: #ea580c;"><i class="fa-solid fa-tags"></i></div>
        <div>
            <div class="stat-num">{{ $stats['packages'] }}</div>
            <div class="stat-label">প্যাকেজ সংখ্যা</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon" style="background: #f0fdf4; color: #16a34a;"><i class="fa-solid fa-globe"></i></div>
        <div>
            <div class="stat-num">{{ $stats['demos'] }}</div>
            <div class="stat-label">লাইভ ডেমো লিঙ্ক</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon" style="background: #fef2f2; color: #dc2626;"><i class="fa-solid fa-envelope"></i></div>
        <div>
            <div class="stat-num">{{ $stats['messages'] }}</div>
            <div class="stat-label">কন্টাক্ট মেসেজ</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon" style="background: #fdf4ff; color: #a855f7;"><i class="fa-solid fa-images"></i></div>
        <div>
            <div class="stat-num">{{ $stats['galleries'] }}</div>
            <div class="stat-label">গ্যালারি ইমেজ</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon" style="background: #fffbeb; color: #f59e0b;"><i class="fa-solid fa-star"></i></div>
        <div>
            <div class="stat-num">{{ $stats['testimonials'] }}</div>
            <div class="stat-label">ক্লায়েন্ট রিভিউ</div>
        </div>
    </div>
</div>

    <div class="card" style="margin-top: 30px;">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #1e293b;">সাম্প্রতিক ইনকয়ারি মেসেজ (Leads)</h3>
    <table>
        <thead>
            <tr>
                <th>তারিখ</th>
                <th>নাম</th>
                <th>ইমেইল</th>
                <th>ফোন নম্বর</th>
                <th>মেসেজ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentMessages as $msg)
            <tr>
                <td>{{ $msg->created_at->format('d M, Y h:i A') }}</td>
                <td><strong>{{ $msg->name }}</strong></td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->phone }}</td>
                <td>{{ $msg->message }}</td>
            </tr>
            @endforeach
            @if(count($recentMessages) == 0)
            <tr>
                <td colspan="5" style="text-align: center; color: #94a3b8;">এখনো কোনো নতুন মেসেজ আসেনি।</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
