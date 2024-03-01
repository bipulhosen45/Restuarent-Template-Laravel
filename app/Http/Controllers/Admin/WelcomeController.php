<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $welcomes = Welcome::all();
        return view('admin.welcome.index', compact('welcomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'header' => 'required',
            'sub_title' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/welcome')){
                mkdir('uploads/welcome', 077, true);
            }
            $image->move('uploads/welcome', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $welcome = new Welcome();
        $welcome->title = $request->title;
        $welcome->header = $request->header;
        $welcome->sub_title = $request->sub_title;
        $welcome->link = $request->link;
        $welcome->image = $imageName;
        $welcome->save();
        

        return redirect()->route('welcome.index');
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
        $welcome = Welcome::find($id);
        return view('admin.welcome.edit', compact('welcome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'header' => 'required',
            'sub_title' => 'required',
            'link' => 'required',
        ]);
        $welcome = Welcome::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/welcome')){
                mkdir('uploads/welcome', 077, true);
            }
            $image->move('uploads/welcome', $imageName);
        }else{
            $imageName = $welcome->image;
        }
      
        $welcome->title = $request->title;
        $welcome->header = $request->header;
        $welcome->sub_title = $request->sub_title;
        $welcome->link = $request->link;
        $welcome->image = $imageName;
        $welcome->save();
        

        return redirect()->route('welcome.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $welcome = Welcome::find($id);

        if(file_exists('uploads/welcome/'.$welcome->image)){
            unlink('uploads/welcome/'.$welcome->image);
        };

        $welcome->delete();
        return redirect()->route('welcome.index');
    }
}
