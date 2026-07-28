@extends('layouts.admin')

@section('title', 'ডেমো লিঙ্কস ম্যানেজমেন্ট')

@section('admin_content')
<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
    <!-- Add New Demo Form -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px;">নতুন ডেমো লিঙ্ক যোগ করুন</h3>
        <form action="{{ route('admin.demos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">ডেমো ক্যাটাগরি</label>
                <select name="demo_category_id" class="form-input" required>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">ডেমোর নাম (e.g. Demo 4 - Furniture Store)</label>
                <input type="text" name="name" class="form-input" required placeholder="Demo Name">
            </div>

            <div class="form-group">
                <label class="form-label">লাইভ URL (Live Link)</label>
                <input type="url" name="url" class="form-input" required placeholder="https://demo.whatsupitech.com">
            </div>

            <div class="form-group">
                <label class="form-label">অফার ব্যাজ (e.g. Hot, Popular, New)</label>
                <input type="text" name="badge" class="form-input" value="Hot">
            </div>

            <button type="submit" class="btn-submit">ডেমো সাইট যোগ করুন</button>
        </form>
    </div>

    <!-- Demos List -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px;">বিদ্যমান ডেমো সাইটসমূহ</h3>
        
        @foreach($categories as $cat)
        <div style="margin-bottom: 25px; background: #f8fafc; border-radius: 10px; padding: 16px; border: 1px solid #e2e8f0;">
            <h4 style="font-size: 16px; font-weight: 800; color: #007bff; margin-bottom: 12px;">
                <i class="fa-solid {{ $cat->icon }}"></i> {{ $cat->title }} ({{ count($cat->links) }}টি ডেমো)
            </h4>
            <table>
                <thead>
                    <tr>
                        <th>ডেমো নেম</th>
                        <th>অফার ব্যাজ</th>
                        <th>লাইভ লিংক</th>
                        <th>অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cat->links as $link)
                    <tr>
                        <td><strong>{{ $link->name }}</strong></td>
                        <td><span style="background: #ff5722; color: white; padding: 2px 8px; border-radius: 6px; font-size: 11px;">{{ $link->badge }}</span></td>
                        <td><a href="{{ $link->url }}" target="_blank" style="color: #007bff;">{{ $link->url }}</a></td>
                        <td>
                            <form action="{{ route('admin.demos.delete', $link->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: #ef4444; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 12px;">মুছে ফেলুন</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>
@endsection
