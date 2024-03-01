<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
       $abouts = About::all(); 
       return view('admin.about.index', compact('abouts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/about')){
                mkdir('uploads/about', 077, true);
            }
            $image->move('uploads/about', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $about            = new About();
        $about->title     = $request->title;
        $about->sub_title = $request->sub_title;
        $about->image     = $imageName;
        $about->save();
        

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $about = About::find($id);
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $about = About::find($id);
        return view ('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        $about =  About::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/about')){
                mkdir('uploads/about', 077, true);
            }
            $image->move('uploads/about', $imageName);
        }else{
            $imageName = $about->image;
        }
    
        $about->title = $request->title;
        $about->sub_title = $request->sub_title;
        $about->image = $imageName;
        $about->save();
        

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);

        if(file_exists('uploads/about/'.$about->image)){
            unlink('uploads/about/'.$about->image);
        };

        $about->delete();
        return redirect()->route('about.index');
    }
}
