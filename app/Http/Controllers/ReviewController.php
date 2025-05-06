<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->all());

        return redirect()->back()->with('success', 'Thank you for your review!');
    }

    public function __construct()
    {
        $this->middleware('auth'); // ইউজার লগিন চেক
        $this->middleware('is_admin'); // ইউজারের রোল চেক
    }

    
}
