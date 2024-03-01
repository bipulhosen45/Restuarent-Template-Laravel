<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedController extends Controller
{
    public function index()
    {
        return view('fronted.about');
    }
    public function menu()
    {
        return view('fronted.menu');
    }
    public function reservation()
    {
        return view('fronted.reservation');
    }
    public function gallery()
    {
        return view('fronted.gallery');
    }
    public function blog_details()
    {
        return view('fronted.blog-detail');
    }
    public function blog()
    {
        return view('fronted.blog');
    }
    public function contact()
    {
        return view('fronted.contact');
    }
}
