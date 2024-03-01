<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        $gallery_categories = GalleryCategory::all();
        return view('admin.gallery.index', compact('galleries', 'gallery_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gallery_categories = GalleryCategory::all();

        return view('admin.gallery.create', compact('gallery_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gallery_categories_id' => 'required',
            'name' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/gallery')){
                mkdir('uploads/gallery', 077, true);
            }
            $image->move('uploads/gallery', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $galleries = new Gallery();
        $galleries->gallery_categories_id = $request->gallery_categories_id;
        $galleries->name = $request->name;
        $galleries->image = $imageName;
        $galleries->save();

          // toastr Allert use
        if ($galleries instanceof Gallery) {
            toastr()->success('Data has been saved successfully!', 'Save');

            return redirect()->route('gallery.index');
        }

        toastr()->error('An error has occurred please try again later.');

        return back();
        // return redirect()->route('gallery.index');
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
        $galleries = Gallery::find($id);
        $gallery_categories = GalleryCategory::all();
        return view('admin.gallery.edit', compact('galleries', 'gallery_categories'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'gallery_categories_id' => 'required',
            'name' => 'required',
        ]);
        $galleries = Gallery::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/gallery')){
                mkdir('uploads/gallery', 077, true);
            }
            $image->move('uploads/gallery', $imageName);
        }else{
            $imageName = $galleries->image;
        }
      
        $galleries->gallery_categories_id = $request->gallery_categories_id;
        $galleries->name = $request->name;
        $galleries->image = $imageName;
        $galleries->save();
        
        if ($galleries instanceof Gallery) {
            toastr()->success('Data has been updated successfully!', 'Update');
            return redirect()->route('gallery.index');
        }
        toastr()->error('An error has occurred please try again later.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galleries = Gallery::find($id);

        if(file_exists('uploads/gallery/'.$galleries->image)){
            unlink('uploads/gallery/'.$galleries->image);
        };
        $galleries->delete();
        return redirect()->route('gallery.index');
    }

}
