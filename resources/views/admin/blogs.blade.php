@extends('layouts.admin')

@section('title', 'ব্লগস ও আর্টিকেলস ম্যানেজমেন্ট')

@section('admin_content')
<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
    <!-- Add New Blog Form -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #007bff;">
            <i class="fa-solid fa-pen-to-square"></i> নতুন ব্লগ প্রকাশ করুন
        </h3>
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">ব্লগ শিরোনাম (Blog Title)</label>
                <input type="text" name="title" class="form-input" required placeholder="e.g. ই-কমার্স ওয়েবসাইট তৈরির গাইডলাইন">
            </div>

            <div class="form-group">
                <label class="form-label">ক্যাটাগরি (Category)</label>
                <input type="text" name="category" class="form-input" required placeholder="e.g. ওয়েব ডেভেলপমেন্ট / টেকনোলজি">
            </div>

            <div class="form-group">
                <label class="form-label">ফিচার্ড ইমেজ আপলোড (Blog Image)</label>
                <input type="file" name="image" class="form-input" accept="image/*">
            </div>

            <div class="form-group">
                <label class="form-label">ব্লগের সংক্ষিপ্ত বিবরণ (Excerpt / Short Description)</label>
                <textarea name="excerpt" class="form-input" rows="5" required placeholder="ব্লগের মূল বিষয়বস্তুর বিস্তারিত সংক্ষিপ্ত বিবরণ লিখুন..."></textarea>
            </div>

            <button type="submit" class="btn-submit" style="width: 100%; padding: 14px;">
                <i class="fa-solid fa-paper-plane"></i> ব্লগ পোস্ট প্রকাশ করুন
            </button>
        </form>
    </div>

    <!-- Blogs List Table -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #ff5722;">
            <i class="fa-solid fa-newspaper"></i> প্রকাশিত ব্লগসমূহ ({{ count($blogs) }}টি)
        </h3>
        
        @if(count($blogs) > 0)
        <table>
            <thead>
                <tr>
                    <th>ছবি</th>
                    <th>শিরোনাম ও বিবরণ</th>
                    <th>ক্যাটাগরি</th>
                    <th>তারিখ</th>
                    <th>অ্যাকশন</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="width: 60px; height: 45px; object-fit: cover; border-radius: 6px; border: 1px solid #e2e8f0;">
                    </td>
                    <td>
                        <strong>{{ $blog->title }}</strong>
                        <div style="font-size: 12px; color: #64748b; margin-top: 4px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $blog->excerpt }}
                        </div>
                    </td>
                    <td>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 700;">
                            {{ $blog->category }}
                        </span>
                    </td>
                    <td style="font-size: 12px; white-space: nowrap; color: #64748b;">
                        {{ $blog->created_at ? $blog->created_at->format('d M, Y') : 'N/A' }}
                    </td>
                    <td>
                        <form action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('ব্লগটি মুছে ফেলতে চান?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #ef4444; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 12px;">
                                <i class="fa-solid fa-trash"></i> মুছে ফেলুন
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div style="text-align: center; padding: 40px; color: #64748b;">
            <i class="fa-solid fa-newspaper fa-3x" style="margin-bottom: 12px; opacity: 0.4;"></i>
            <p>এখনো কোনো ব্লগ পোস্ট যোগ করা হয়নি।</p>
        </div>
        @endif
    </div>
</div>
@endsection
