<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/image')){
                mkdir('uploads/image', 077, true);
            }
            $image->move('uploads/image', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $image = new Image();
        $image->title = $request->title;
        $image->image = $imageName;
        $image->save();
        

        return redirect()->route('image.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = Image::find($id);
        return view('admin.image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);
        $images = Image::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/image')){
                mkdir('uploads/image', 077, true);
            }
            $image->move('uploads/image', $imageName);
        }else{
            $imageName = $images->image;
        }
        $images->title = $request->title;
        $images->image = $imageName;
        $images->save();
        

        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Image::find($id);

        if(file_exists('uploads/image/'.$image->image)){
            unlink('uploads/image/'.$image->image);
        };

        $image->delete();
        return redirect()->route('image.index');
    }
}
