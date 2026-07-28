<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\DemoCategory;
use App\Models\DemoLink;
use App\Models\Gallery;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order', 'asc')->get();
        $packages = Package::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::latest()->get();
        $galleries = Gallery::orderBy('sort_order', 'asc')->get();

        $demoCategories = DemoCategory::with('links')->orderBy('sort_order', 'asc')->get()->map(function($cat) {
            return [
                'id' => $cat->cat_key,
                'title' => $cat->title,
                'subtitle' => $cat->subtitle,
                'icon' => $cat->icon,
                'image' => $cat->image,
                'demos' => $cat->links->map(function($link) {
                    return [
                        'name' => $link->name,
                        'url' => $link->url,
                        'badge' => $link->badge
                    ];
                })->toArray()
            ];
        })->toArray();

        return view('home', compact('services', 'demoCategories', 'packages', 'testimonials', 'blogs', 'galleries'));
    }

    public function packageDetail($id)
    {
        $package = Package::findOrFail($id);
        $allPackages = Package::all();
        return view('package-detail', compact('package', 'allPackages'));
    }

    public function privacyPolicy()
    {
        $policyText = \App\Models\SiteSetting::where('key', 'privacy_policy')->value('value') ?? 'WhatsUp i-Tech কাস্টমারের তথ্যের গোপনীয়তা রক্ষা করতে প্রতিশ্রুতিবদ্ধ।';
        return view('privacy-policy', compact('policyText'));
    }

    public function termsConditions()
    {
        $termsText = \App\Models\SiteSetting::where('key', 'terms_conditions')->value('value') ?? 'আমাদের সেবা গ্রহণের পূর্বে সকল নিয়ম ও শর্তাবলী ভালোভাবে পড়ে নিন।';
        return view('terms-conditions', compact('termsText'));
    }

    public function faq()
    {
        $faqText = \App\Models\SiteSetting::where('key', 'faq_content')->value('value') ?? "প্রশ্ন: আপনাদের ই-কমার্স ওয়েবসাইটে কী কী ফিচার থাকে?\nউত্তর: আমাদের ওয়েবসাইটে সম্পূর্ণ রেসপন্সিভ ডিজাইন, অ্যাডমিন প্যানেল, স্টক ম্যানেজমেন্ট, ওটিপি ভেরিফিকেশন ও কুরিয়ার ইন্টিগ্রেশন থাকে।\n\nপ্রশ্ন: ওয়েবসাইটের কাজ শেষ হতে কতদিন সময় লাগে?\nউত্তর: অর্ডারের পর সাধারণ ওয়েবসাইট ৩-৫ দিন এবং কাস্টম পোর্টাল ৭-১০ দিনের মধ্যে সম্পূর্ণ রেডি করে দেওয়া হয়।";
        return view('faq', compact('faqText'));
    }

    public function support()
    {
        $supportText = \App\Models\SiteSetting::where('key', 'support_content')->value('value') ?? "আমাদের ২৪/৭ কাস্টমার সাপোর্ট টিমের সাথে সরাসরি যোগাযোগ করুন:\n\nফোন: 01657-043577\nইমেইল: support@whatsupitech.com\nঅফিস: হাউজ - ২৬/বি, রোড - ০২, সেক্টর - ৩, উত্তরা, ঢাকা-১২৩০";
        return view('support', compact('supportText'));
    }

    public function submitContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'message' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message ?? 'No detail provided'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'ধন্যবাদ! আপনার বার্তাটি সফলভাবে পাঠানো হয়েছে। আমরা শীঘ্রই যোগাযোগ করব।'
        ]);
    }
}
