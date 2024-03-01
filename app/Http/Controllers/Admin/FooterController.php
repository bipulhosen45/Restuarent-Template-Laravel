<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::all();
        return view('admin.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'icon' => 'required',
            'url' => 'required',
            'date' => 'required',
        ]);

        $footer = new Footer();
        $footer->title = $request->title;
        $footer->sub_title = $request->sub_title;
        $footer->icon = $request->icon;
        $footer->url = $request->url;
        $footer->date = $request->date;
        $footer->save();
        

        return redirect()->route('footer.index');
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
        $footer = Footer::find($id);
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'icon' => 'required',
            'url' => 'required',
            'date' => 'required',
        ]);
        $footer = Footer::find($id);
        $footer->title = $request->title;
        $footer->sub_title = $request->sub_title;
        $footer->icon = $request->icon;
        $footer->url = $request->url;
        $footer->date = $request->date;
        $footer->save();
        

        return redirect()->route('footer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Footer::find($id)->delete();

        return redirect()->route('footer.index');
    }
}
