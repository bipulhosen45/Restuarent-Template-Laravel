<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery_categories = GalleryCategory::all();
        return view('admin.gallery_category.index', compact('gallery_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $gallery_category = new GalleryCategory();
        $gallery_category->name = $request->name;
        $gallery_category->slug = str_slug($request->name);
        
        $gallery_category->save();
        

        return redirect()->route('gallery-category.index');
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
        $gallery_category = GalleryCategory::find($id);
        return view('admin.gallery_category.edit', compact('gallery_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $gallery_category = GalleryCategory::find($id);
      
        $gallery_category->name = $request->name;
        $gallery_category->slug = str_slug($request->name);
        $gallery_category->save();
        

        return redirect()->route('gallery-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery_category = GalleryCategory::find($id);

        $gallery_category->delete();
        return redirect()->route('gallery-category.index');
    }

}
