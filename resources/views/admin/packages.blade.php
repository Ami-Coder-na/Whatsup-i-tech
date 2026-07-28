@extends('layouts.admin')

@section('title', 'প্যাকেজ ও অফার প্রাইস ম্যানেজমেন্ট')

@section('admin_content')
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
    @foreach($packages as $pkg)
    <div class="card">
        <h3 style="font-size: 20px; font-weight: 800; color: #007bff; margin-bottom: 8px;">{{ $pkg->name }}</h3>
        <p style="font-size: 13px; color: #64748b; margin-bottom: 20px;">{{ $pkg->badge }}</p>

        <form action="{{ route('admin.packages.update', $pkg->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">বিশেষ অফার মূল্য (৳)</label>
                <input type="text" name="price" class="form-input" value="{{ $pkg->price }}" required>
            </div>

            <div class="form-group">
                <label class="form-label">নিয়মিত মূল্য (৳)</label>
                <input type="text" name="original_price" class="form-input" value="{{ $pkg->original_price }}" required>
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 8px;">
                <input type="checkbox" name="is_popular" id="pop_{{ $pkg->id }}" {{ $pkg->is_popular ? 'checked' : '' }}>
                <label for="pop_{{ $pkg->id }}" style="font-weight: 700; cursor: pointer;">জনপ্রিয় (Popular Tag)</label>
            </div>

            <div class="form-group">
                <label class="form-label">ফিচার তালিকা (প্রতি লাইনে একটি ফিচার লিখুন)</label>
                <textarea name="features" class="form-input" rows="12" required>{{ implode("\n", $pkg->features) }}</textarea>
            </div>

            <button type="submit" class="btn-submit" style="width: 100%;">আপডেট করুন</button>
        </form>
    </div>
    @endforeach
</div>
@endsection
