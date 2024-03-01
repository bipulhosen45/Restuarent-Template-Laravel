<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
       $videos = Video::all(); 
       return view('admin.video.index', compact('videos')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.video.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/video')){
                mkdir('uploads/video', 077, true);
            }
            $image->move('uploads/video', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $video            = new Video();
        $video->title     = $request->title;
        $video->url      = $request->url;
        $video->image     = $imageName;
        $video->save();
        

        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video = Video::find($id);
        return view('admin.video.show', compact('videos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $video = Video::find($id);
        return view ('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        $video =  Video::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/video')){
                mkdir('uploads/video', 077, true);
            }
            $image->move('uploads/video', $imageName);
        }else{
            $imageName = $video->image;
        }
    
        $video->title = $request->title;
        $video->url = $request->url;
        $video->image = $imageName;
        $video->save();
        

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::find($id);

        if(file_exists('uploads/video/'.$video->image)){
            unlink('uploads/video/'.$video->image);
        };

        $video->delete();
        return redirect()->route('video.index');
    }
}
