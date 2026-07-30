@extends('layouts.admin')

@section('title', 'গ্যালারি ম্যানেজমেন্ট')

@section('admin_content')
<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
    <!-- Add New Gallery Item Form -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #007bff;">
            <i class="fa-solid fa-cloud-arrow-up"></i> নতুন ইমেজ আপলোড করুন
        </h3>
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">ইমেজ শিরোনাম (Title) <span style="color:#ef4444;">*</span></label>
                <input type="text" name="title" class="form-input" required placeholder="e.g. অফিস ইভেন্ট / প্রোজেক্ট লঞ্চ">
            </div>

            <div class="form-group">
                <label class="form-label">সাব-টাইটেল (Optional)</label>
                <input type="text" name="subtitle" class="form-input" placeholder="e.g. ২০২৬ সালের ইভেন্ট">
            </div>

            <div class="form-group">
                <label class="form-label">ইমেজ আপলোড করুন <span style="color:#ef4444;">*</span></label>
                <input type="file" name="image" class="form-input" accept="image/*" required>
                <small style="color: #64748b; font-size: 12px; margin-top: 4px; display: block;">সর্বোচ্চ ৫MB (JPG, PNG, WEBP)</small>
            </div>

            <!-- Image Preview -->
            <div id="gallery-preview" style="display: none; margin-bottom: 16px; text-align: center;">
                <img id="gallery-preview-img" src="" alt="Preview" style="max-width: 100%; max-height: 200px; border-radius: 8px; border: 2px solid #e2e8f0; object-fit: cover;">
            </div>

            <button type="submit" class="btn-submit" style="width: 100%; padding: 14px;">
                <i class="fa-solid fa-upload"></i> গ্যালারিতে যোগ করুন
            </button>
        </form>
    </div>

    <!-- Gallery Items List -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px; color: #ff5722;">
            <i class="fa-solid fa-images"></i> গ্যালারি ইমেজসমূহ ({{ count($galleries) }}টি)
        </h3>

        @if(count($galleries) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 16px;">
            @foreach($galleries as $gallery)
            <div style="background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; position: relative; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.1)';" onmouseout="this.style.transform='none'; this.style.boxShadow='none';">
                <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}" style="width: 100%; height: 140px; object-fit: cover;">
                <div style="padding: 10px;">
                    <div style="font-weight: 700; font-size: 13px; color: #1e293b; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $gallery->title }}</div>
                    @if($gallery->subtitle)
                    <div style="font-size: 11px; color: #64748b; margin-top: 2px;">{{ $gallery->subtitle }}</div>
                    @endif
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                        <span style="font-size: 10px; color: #94a3b8;">{{ $gallery->created_at ? $gallery->created_at->format('d M, Y') : 'N/A' }}</span>
                        <form action="{{ route('admin.gallery.delete', $gallery->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('ইমেজটি মুছে ফেলতে চান?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #ef4444; color: white; border: none; padding: 4px 8px; border-radius: 4px; cursor: pointer; font-size: 11px;">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div style="text-align: center; padding: 50px; color: #64748b;">
            <i class="fa-solid fa-images fa-3x" style="margin-bottom: 12px; opacity: 0.4;"></i>
            <p>এখনো কোনো গ্যালারি ইমেজ যোগ করা হয়নি।</p>
        </div>
        @endif
    </div>
</div>

<script>
    // Image preview on file select
    document.querySelector('input[name="image"]').addEventListener('change', function(e) {
        const preview = document.getElementById('gallery-preview');
        const img = document.getElementById('gallery-preview-img');
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
