<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('Frontend.index');
    }

    public function choose()
    {
        return view('Frontend.choose_us');
    }

    public function contact()
    {
        return view('Frontend.contact_us');
    }

    public function pricing()
    {
        return view('Frontend.pricing');
    }

    public function review_us()
    {
        $reviews = Review::latest()->take(10)->get();
        return view('Frontend.review', compact('reviews'));
    }

    public function services()
    {
        return view('Frontend.services');
    }

    public function sitemap()
    {
        return view('Frontend.sitemap');
    }


}
