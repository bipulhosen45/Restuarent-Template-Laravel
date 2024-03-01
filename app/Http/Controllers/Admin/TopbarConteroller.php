<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topbar;
use Illuminate\Http\Request;

class TopbarConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topbars = Topbar::all();
        return view('admin.topbar.index', compact('topbars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.topbar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);

        $topbar = new Topbar();
        $topbar->name = $request->name;
        $topbar->icon = $request->icon;
        $topbar->save();
        

        return redirect()->route('topbar.index');
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
        $topbar = Topbar::find($id);
        return view('admin.topbar.edit', compact('topbar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $topbar = Topbar::find($id);
        $topbar->name = $request->name;
        $topbar->icon = $request->icon;
        $topbar->save();
        

        return redirect()->route('topbar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Topbar::find($id)->delete();

        return redirect()->route('topbar.index');
    }
}
