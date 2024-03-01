<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
       $sliders = Slider::all(); 
       return view('admin.slider.index', compact('sliders')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/slider')){
                mkdir('uploads/slider', 077, true);
            }
            $image->move('uploads/slider', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $slider            = new Slider();
        $slider->title     = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->link      = $request->link;
        $slider->image     = $imageName;
        $slider->save();
        

        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.show', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $slider = Slider::find($id);
        return view ('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'link' => 'required',
        ]);

        $slider =  Slider::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/slider')){
                mkdir('uploads/slider', 077, true);
            }
            $image->move('uploads/slider', $imageName);
        }else{
            $imageName = $slider->image;
        }
    
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->link = $request->link;
        $slider->image = $imageName;
        $slider->save();
        

        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);

        if(file_exists('uploads/slider/'.$slider->image)){
            unlink('uploads/slider/'.$slider->image);
        };

        $slider->delete();
        return redirect()->route('slider.index');
    }
}