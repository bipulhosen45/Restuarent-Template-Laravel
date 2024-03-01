<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view ('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'time' => 'required',
            'day' => 'required',
        ]);

        $contacts = new Contact();
        $contacts->address = $request->address;
        $contacts->phone = $request->phone;
        $contacts->email = $request->email;
        $contacts->time = $request->time;
        $contacts->day = $request->day;
        $contacts->save();

        return redirect()->route('contact.index');
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
        $contacts = Contact::find($id);
        return view('admin.contact.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'time' => 'required',
            'day' => 'required',
        ]);

        $contacts = Contact::find($id);
        $contacts->address = $request->address;
        $contacts->phone = $request->phone;
        $contacts->email = $request->email;
        $contacts->time = $request->time;
        $contacts->day = $request->day;
        $contacts->save();

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::find($id)->delete();

        return redirect()->route('contact.intex');
    }
}
