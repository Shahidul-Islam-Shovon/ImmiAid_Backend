<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('Backend.home');
    }

    public function __construct()
    {
        $this->middleware('auth'); // ইউজার লগিন চেক
        $this->middleware('is_admin'); // ইউজারের রোল চেক
    }
}
