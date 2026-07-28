@extends('layouts.admin')

@section('title', 'সার্ভিসেস ম্যানেজমেন্ট')

@section('admin_content')
<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
    <!-- Add New Service -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px;">নতুন সার্ভিস যোগ করুন</h3>
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">সার্ভিসের শিরোনাম</label>
                <input type="text" name="title" class="form-input" required placeholder="e.g. মোবাইল অ্যাপ ডেভেলপমেন্ট">
            </div>

            <div class="form-group">
                <label class="form-label">সার্ভিস বিবরণ</label>
                <textarea name="description" class="form-input" rows="3" required placeholder="সংক্ষিপ্ত বিবরণ লিখুন..."></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">FontAwesome আইকন ক্লাস (e.g. fa-laptop-code)</label>
                <input type="text" name="icon" class="form-input" required value="fa-laptop-code">
            </div>

            <button type="submit" class="btn-submit">সার্ভিস যোগ করুন</button>
        </form>
    </div>

    <!-- Services Table -->
    <div class="card">
        <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 20px;">বর্তমান সার্ভিসেস তালিকা</h3>
        <table>
            <thead>
                <tr>
                    <th>আইকন</th>
                    <th>শিরোনাম</th>
                    <th>বিবরণ</th>
                    <th>অ্যাকশন</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $s)
                <tr>
                    <td><i class="fa-solid {{ $s->icon }} fa-lg" style="color: #007bff;"></i></td>
                    <td><strong>{{ $s->title }}</strong></td>
                    <td>{{ $s->description }}</td>
                    <td>
                        <form action="{{ route('admin.services.delete', $s->id) }}" method="POST">
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
</div>
@endsection
