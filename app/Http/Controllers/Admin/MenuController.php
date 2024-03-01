<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
       $menus = Menu::all(); 
       return view('admin.menu.index', compact('menus')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->category);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/menu')){
                mkdir('uploads/menu', 077, true);
            }
            $image->move('uploads/menu', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $menu            = new Menu();
        $menu->category  = $request->category;
        $menu->title     = $request->title;
        $menu->sub_title = $request->sub_title;
        $menu->price     = $request->price;
        $menu->image     = $imageName;
        $menu->save();
        

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $menu = Menu::find($id);
        return view ('admin.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'price' => 'required',
        ]);

        $menu            = Menu::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->category);
        
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/menu')){
                mkdir('uploads/menu', 077, true);
            }
            $image->move('uploads/menu', $imageName);
        }else{
            $imageName = $menu->image;
        }
        $menu->category  = $request->category;
        $menu->title     = $request->title;
        $menu->sub_title = $request->sub_title;
        $menu->price     = $request->price;
        $menu->image     = $imageName;
        $menu->save();
        

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);

        if(file_exists('uploads/menu/'.$menu->image)){
            unlink('uploads/menu/'.$menu->image);
        };

        $menu->delete();
        return redirect()->route('menu.index');
    }
}