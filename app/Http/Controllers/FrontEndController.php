<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pricing;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $logo = Logo::where('status', 1)->first(); // active logo only
        return view('Frontend.index', compact('logo'));
    }

    public function choose()
    {
        $logo = Logo::where('status', 1)->first(); 
        return view('Frontend.choose_us', compact('logo'));
    }

    public function contact()
    {
        $logo = Logo::where('status', 1)->first();
        return view('Frontend.contact_us' , compact('logo'));
    }

    public function pricing()
    {
        $logo = Logo::where('status', 1)->first();
        $pricing = Pricing::get()->all();
        return view('Frontend.pricing', compact('logo', 'pricing'));
    }

    public function review_us()
    {
        $logo = Logo::where('status', 1)->first();
        $reviews = Review::latest()->take(10)->get();
        return view('Frontend.review', compact('reviews','logo'));
    }

    public function services()
    {
        $logo = Logo::where('status', 1)->first();
        $services = Service::get()->all();
        return view('Frontend.services', compact('services', 'logo'));
    }

    public function sitemap()
    {
        $logo = Logo::where('status', 1)->first();
        return view('Frontend.sitemap', compact('logo'));
    }


}
