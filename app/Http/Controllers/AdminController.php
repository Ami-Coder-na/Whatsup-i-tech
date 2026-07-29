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
    public function __construct()
    {
        // Enforce session login check for all admin actions except login page and login process
        if (request()->routeIs('admin.*') && !request()->routeIs('admin.login') && !request()->routeIs('admin.login.submit')) {
            if (!session('admin_logged_in')) {
                redirect()->route('admin.login')->with('error', 'অ্যাডমিন ড্যাশবোর্ডে প্রবেশ করতে লগইন করুন।')->send();
                exit;
            }
        }
    }
    public function showLoginForm()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === 'admin') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard')->with('success', 'স্বাগতম! সফলভাবে লগইন করা হয়েছে।');
        }

        return back()->with('error', 'ইউজারনেম অথবা পাসওয়ার্ড ভুল হয়েছে!');
    }

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
        // Destination directory for uploads (Handle Vercel read-only filesystem)
        $uploadDir = is_writable(public_path('images')) ? public_path('images') : '/tmp/images';
        if (!file_exists($uploadDir)) {
            @mkdir($uploadDir, 0777, true);
        }

        // Handle File Uploads (Logo & Favicon)
        if ($request->hasFile('logo')) {
            try {
                $request->file('logo')->move($uploadDir, 'logo.png');
                \App\Models\SiteSetting::updateOrCreate(['key' => 'logo'], ['value' => '/images/logo.png']);
            } catch (\Throwable $e) {
                // Log or ignore
            }
        }

        if ($request->hasFile('favicon')) {
            try {
                $favFile = $request->file('favicon');
                $favFile->move($uploadDir, 'favicon.ico');
                if (file_exists($uploadDir . '/favicon.ico')) {
                    @copy($uploadDir . '/favicon.ico', public_path('favicon.ico'));
                    @copy($uploadDir . '/favicon.ico', $uploadDir . '/favicon.png');
                }
                \App\Models\SiteSetting::updateOrCreate(['key' => 'favicon'], ['value' => '/images/favicon.ico']);
            } catch (\Throwable $e) {
                // Log or ignore
            }
        }

        // Text settings update
        $textKeys = ['phone', 'email', 'address', 'facebook', 'instagram', 'youtube', 'linkedin', 'whatsapp_number', 'messenger_link', 'privacy_policy', 'terms_conditions', 'faq_content', 'support_content'];
        foreach ($textKeys as $key) {
            if ($request->has($key)) {
                \App\Models\SiteSetting::updateOrCreate(['key' => $key], ['value' => $request->input($key)]);
            }
        }

        return back()->with('success', 'ওয়েবসাইট সেটিং ও পলিসি তথ্য সফলভাবে আপডেট করা হয়েছে!');
    }

    // Blogs Management
    public function blogs()
    {
        $blogs = \App\Models\Blog::latest()->get();
        return view('admin.blogs', compact('blogs'));
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $imagePath = 'images/blog1.png';
        if ($request->hasFile('image')) {
            try {
                $uploadDir = is_writable(public_path('images')) ? public_path('images') : '/tmp/images';
                $filename = 'blog_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move($uploadDir, $filename);
                $imagePath = 'images/' . $filename;
            } catch (\Throwable $e) {
                // Fallback default image
            }
        }

        \App\Models\Blog::create([
            'title' => $request->title,
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'image' => $imagePath,
            'views' => '১.৫k'
        ]);

        return back()->with('success', 'নতুন ব্লগ পোস্ট সফলভাবে প্রকাশ করা হয়েছে!');
    }

    public function deleteBlog($id)
    {
        \App\Models\Blog::findOrFail($id)->delete();
        return back()->with('success', 'ব্লগ পোস্ট মুছে ফেলা হয়েছে!');
    }
}
