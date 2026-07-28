@extends('layouts.admin')

@section('title', 'কন্টাক্ট ইনবক্স (Leads)')

@section('admin_content')
<div class="card">
    <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px;">সকল কন্টাক্ট ও কনসালটেশন মেসেজ তালিকা</h3>
    <table>
        <thead>
            <tr>
                <th>তারিখ ও সময়</th>
                <th>নাম</th>
                <th>ইমেইল এড্রেস</th>
                <th>ফোন নম্বর</th>
                <th>মেসেজ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $msg)
            <tr>
                <td>{{ $msg->created_at->format('d M, Y h:i A') }}</td>
                <td><strong>{{ $msg->name }}</strong></td>
                <td><a href="mailto:{{ $msg->email }}" style="color: #007bff;">{{ $msg->email }}</a></td>
                <td><a href="tel:{{ $msg->phone }}" style="color: #10b981; font-weight: 700;">{{ $msg->phone }}</a></td>
                <td>{{ $msg->message }}</td>
            </tr>
            @endforeach
            @if(count($messages) == 0)
            <tr>
                <td colspan="5" style="text-align: center; color: #94a3b8; padding: 25px;">এখনো কোনো নতুন মেসেজ আসেনি।</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
