@extends('layouts.admin')

@section('title', 'ক্লায়েন্ট রিভিউ ম্যানেজমেন্ট')

@section('admin_content')
<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
    <!-- Add New Testimonial Form -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #007bff;">
            <i class="fa-solid fa-star"></i> নতুন ক্লায়েন্ট রিভিউ যোগ করুন
        </h3>
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">ক্লায়েন্টের নাম (Name) <span style="color:#ef4444;">*</span></label>
                <input type="text" name="name" class="form-input" required placeholder="e.g. মোঃ রহিম উদ্দিন">
            </div>

            <div class="form-group">
                <label class="form-label">পদবি / Designation <span style="color:#ef4444;">*</span></label>
                <input type="text" name="designation" class="form-input" required placeholder="e.g. CEO, ABC Company">
            </div>

            <div class="form-group">
                <label class="form-label">ক্লায়েন্টের ছবি (Avatar)</label>
                <input type="file" name="avatar" class="form-input" accept="image/*">
                <small style="color: #64748b; font-size: 12px; margin-top: 4px; display: block;">সর্বোচ্চ ২MB (JPG, PNG, WEBP)</small>
            </div>

            <!-- Avatar Preview -->
            <div id="avatar-preview" style="display: none; margin-bottom: 16px; text-align: center;">
                <img id="avatar-preview-img" src="" alt="Avatar Preview" style="width: 80px; height: 80px; border-radius: 50%; border: 3px solid #e2e8f0; object-fit: cover;">
            </div>

            <div class="form-group">
                <label class="form-label">⭐ রেটিং (Star Rating) <span style="color:#ef4444;">*</span></label>
                <select name="rating" class="form-input" required>
                    <option value="5">⭐⭐⭐⭐⭐ (5 Stars)</option>
                    <option value="4">⭐⭐⭐⭐ (4 Stars)</option>
                    <option value="3">⭐⭐⭐ (3 Stars)</option>
                    <option value="2">⭐⭐ (2 Stars)</option>
                    <option value="1">⭐ (1 Star)</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">ক্লায়েন্টের মতামত / রিভিউ <span style="color:#ef4444;">*</span></label>
                <textarea name="comment" class="form-input" rows="5" required placeholder="ক্লায়েন্টের মতামত এখানে লিখুন..."></textarea>
            </div>

            <button type="submit" class="btn-submit" style="width: 100%; padding: 14px;">
                <i class="fa-solid fa-paper-plane"></i> রিভিউ যোগ করুন
            </button>
        </form>
    </div>

    <!-- Testimonials List -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #ff5722;">
            <i class="fa-solid fa-comments"></i> ক্লায়েন্ট রিভিউসমূহ ({{ count($testimonials) }}টি)
        </h3>

        @if(count($testimonials) > 0)
        <div style="display: flex; flex-direction: column; gap: 16px;">
            @foreach($testimonials as $testimonial)
            <div style="background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0; padding: 18px; display: flex; gap: 16px; align-items: flex-start; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(0,0,0,0.08)';" onmouseout="this.style.transform='none'; this.style.boxShadow='none';">
                <!-- Client Avatar -->
                <div style="flex-shrink: 0;">
                    <img src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->name }}" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; border: 3px solid #e2e8f0;">
                </div>

                <!-- Review Content -->
                <div style="flex: 1; min-width: 0;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 6px;">
                        <div>
                            <div style="font-weight: 800; font-size: 15px; color: #0f172a;">{{ $testimonial->name }}</div>
                            <div style="font-size: 12px; color: #64748b; font-weight: 600;">{{ $testimonial->designation }}</div>
                        </div>
                        <form action="{{ route('admin.testimonials.delete', $testimonial->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('রিভিউটি মুছে ফেলতে চান?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #ef4444; color: white; border: none; padding: 5px 10px; border-radius: 6px; cursor: pointer; font-size: 11px; white-space: nowrap;">
                                <i class="fa-solid fa-trash"></i> মুছুন
                            </button>
                        </form>
                    </div>

                    <!-- Star Rating Display -->
                    <div style="margin-bottom: 8px;">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $testimonial->rating)
                                <i class="fa-solid fa-star" style="color: #f59e0b; font-size: 13px;"></i>
                            @else
                                <i class="fa-regular fa-star" style="color: #cbd5e1; font-size: 13px;"></i>
                            @endif
                        @endfor
                        <span style="font-size: 11px; color: #94a3b8; margin-left: 6px;">({{ $testimonial->rating }}/5)</span>
                    </div>

                    <!-- Review Text -->
                    <div style="font-size: 13px; color: #475569; line-height: 1.6; background: white; padding: 10px 14px; border-radius: 8px; border: 1px solid #f1f5f9;">
                        "{{ $testimonial->comment }}"
                    </div>

                    <div style="font-size: 10px; color: #94a3b8; margin-top: 8px;">
                        {{ $testimonial->created_at ? $testimonial->created_at->format('d M, Y h:i A') : 'N/A' }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div style="text-align: center; padding: 50px; color: #64748b;">
            <i class="fa-solid fa-comments fa-3x" style="margin-bottom: 12px; opacity: 0.4;"></i>
            <p>এখনো কোনো ক্লায়েন্ট রিভিউ যোগ করা হয়নি।</p>
        </div>
        @endif
    </div>
</div>

<script>
    // Avatar preview on file select
    document.querySelector('input[name="avatar"]').addEventListener('change', function(e) {
        const preview = document.getElementById('avatar-preview');
        const img = document.getElementById('avatar-preview-img');
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(ev) {
                img.src = ev.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(this.files[0]);
        } else {
            preview.style.display = 'none';
        }
    });
</script>
@endsection
