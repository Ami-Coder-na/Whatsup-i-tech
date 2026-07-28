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
