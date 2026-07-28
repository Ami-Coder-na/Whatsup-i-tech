<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\DemoCategory;
use App\Models\DemoLink;
use App\Models\Gallery;
use App\Models\ContactMessage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'services' => Service::count(),
            'packages' => Package::count(),
            'demos' => DemoLink::count(),
            'blogs' => Blog::count(),
            'messages' => ContactMessage::count()
        ];
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentMessages'));
    }

    // Services Management
    public function services()
    {
        $services = Service::orderBy('sort_order', 'asc')->get();
        return view('admin.services', compact('services'));
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string'
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'sort_order' => Service::count() + 1
        ]);

        return back()->with('success', 'সার্ভিস সফলভাবে তৈরি করা হয়েছে!');
    }

    public function deleteService($id)
    {
        Service::findOrFail($id)->delete();
        return back()->with('success', 'সার্ভিস মুছে ফেলা হয়েছে!');
    }

    // Packages Management
    public function packages()
    {
        $packages = Package::all();
        return view('admin.packages', compact('packages'));
    }

    public function updatePackage(Request $request, $id)
    {
        $pkg = Package::findOrFail($id);
        $request->validate([
            'price' => 'required|string',
            'original_price' => 'required|string',
            'features' => 'required|string'
        ]);

        $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));

        $pkg->update([
            'price' => $request->price,
            'original_price' => $request->original_price,
            'is_popular' => $request->has('is_popular'),
            'features' => array_values($featuresArray)
        ]);

        return back()->with('success', 'প্যাকেজ সফলভাবে আপডেট করা হয়েছে!');
    }

    // Demo Links Management
    public function demos()
    {
        $categories = DemoCategory::with('links')->get();
        return view('admin.demos', compact('categories'));
    }

    public function storeDemoLink(Request $request)
    {
        $request->validate([
            'demo_category_id' => 'required|exists:demo_categories,id',
            'name' => 'required|string',
            'url' => 'required|url',
            'badge' => 'nullable|string'
        ]);

        DemoLink::create([
            'demo_category_id' => $request->demo_category_id,
            'name' => $request->name,
            'url' => $request->url,
            'badge' => $request->badge ?? 'Hot'
        ]);

        return back()->with('success', 'নতুন ডেমো লিঙ্ক সফলভাবে যোগ করা হয়েছে!');
    }

    public function deleteDemoLink($id)
    {
        DemoLink::findOrFail($id)->delete();
        return back()->with('success', 'ডেমো লিঙ্ক মুছে ফেলা হয়েছে!');
    }

    // Messages
    public function messages()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    // Site Settings (Logo, Favicon, Contact Info, Privacy Policy, Terms)
    public function settings()
    {
        $settings = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        // Handle File Uploads (Logo & Favicon)
        if ($request->hasFile('logo')) {
            $logoName = 'logo.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path('images'), 'logo.png');
            \App\Models\SiteSetting::updateOrCreate(['key' => 'logo'], ['value' => '/images/logo.png']);
        }

        if ($request->hasFile('favicon')) {
            $faviconName = 'favicon.' . $request->file('favicon')->getClientOriginalExtension();
            $request->file('favicon')->move(public_path('images'), 'favicon.ico');
            \App\Models\SiteSetting::updateOrCreate(['key' => 'favicon'], ['value' => '/images/favicon.ico']);
        }

        // Text settings update
        $textKeys = ['phone', 'email', 'address', 'facebook', 'youtube', 'linkedin', 'privacy_policy', 'terms_conditions'];
        foreach ($textKeys as $key) {
            if ($request->has($key)) {
                \App\Models\SiteSetting::updateOrCreate(['key' => $key], ['value' => $request->input($key)]);
            }
        }

        return back()->with('success', 'ওয়েবসাইট সেটিং ও পলিসি তথ্য সফলভাবে আপডেট করা হয়েছে!');
    }
}
