<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Topbar;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Slider;
use App\Models\Usersignup;
use App\Models\Video;
use App\Models\Welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        $topbars = Topbar::all();
        $galleries = Gallery::all();
        $gallery_categories = GalleryCategory::all();
        $sliders = Slider::all();
        $welcomes = Welcome::all();
        $abouts = About::all();
        $menus = Menu::all();
        $events = Event::all();
        $footers = Footer::all();
        $contacts = Contact::all();
        $videos = Video::all();
        $blogs = Blog::all();
        $images = Image::all();
        return view('welcome', compact('logos', 'topbars', 'galleries', 'gallery_categories', 'sliders', 'welcomes', 'abouts', 'menus', 'events', 'footers', 'contacts', 'blogs', 'videos', 'images'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'person' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->person = $request->person;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->status = false;
        $reservation->save();

        return redirect()->back();
    }
    public function signup(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
        ]);

        $usersignup = new Usersignup();
        $usersignup->email = $request->email;
        $usersignup->status = false;
        $usersignup->save();

        return redirect()->back();
    }
}
