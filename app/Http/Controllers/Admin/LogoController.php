<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Logo::all();
        return view('admin.logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.logo.create');
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
            if(!file_exists('uploads/logo')){
                mkdir('uploads/logo', 077, true);
            }
            $image->move('uploads/logo', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $logo = new Logo();
        $logo->title = $request->title;
        $logo->image = $imageName;
        $logo->save();
        

        return redirect()->route('logo.index');
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
        $logo = Logo::find($id);
        return view('admin.logo.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);
        $logo = Logo::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/logo')){
                mkdir('uploads/logo', 077, true);
            }
            $image->move('uploads/logo', $imageName);
        }else{
            $imageName = $logo->image;
        }
      
        $logo->title = $request->title;
        $logo->image = $imageName;
        $logo->save();
        

        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $logo = Logo::find($id);

        if(file_exists('uploads/logo/'.$logo->image)){
            unlink('uploads/logo/'.$logo->image);
        };

        $logo->delete();
        return redirect()->route('logo.index');
    }
}
