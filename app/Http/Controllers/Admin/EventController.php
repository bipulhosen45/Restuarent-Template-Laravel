<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'eventDate' => 'required',
            'header' => 'required',
            'title' => 'required',
            'dayDigit' => 'required',
            'dayName' => 'required',
            'houreDigit' => 'required',
            'houreName' => 'required',
            'minDigit' => 'required',
            'minName' => 'required',
            'secDigit' => 'required',
            'secName' => 'required',
            'image' => 'required',

        ]);
        $image = $request->file('image');
        $slug = str_slug($request->header);

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/event')){
                mkdir('uploads/event', 0777, true);
            }
            $image->move('uploads/event', $imageName);
        }else{
            $imageName = 'default.png';
        }
        $events = new Event();
        $events->eventDate = $request->eventDate;
        $events->header = $request->header;
        $events->title = $request->title;
        $events->dayDigit = $request->dayDigit;
        $events->dayName = $request->dayName;
        $events->houreDigit = $request->houreDigit;
        $events->houreName = $request->houreName;
        $events->minDigit = $request->minDigit;
        $events->minName = $request->minName;
        $events->secDigit = $request->secDigit;
        $events->secName = $request->secName;
        $events->image =  $imageName;
        $events->save();

        return redirect()->route('event.index');

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
        $events = Event::find($id);
        return view('admin.event.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'eventDate' => 'required',
            'header' => 'required',
            'title' => 'required',
            'dayDigit' => 'required',
            'dayName' => 'required',
            'houreDigit' => 'required',
            'houreName' => 'required',
            'minDigit' => 'required',
            'minName' => 'required',
            'secDigit' => 'required',
            'secName' => 'required',
            'image' => 'required',

        ]);
        $events = Event::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->header);

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/event')){
                mkdir('uploads/event', 0777, true);
            }
            $image->move('uploads/event', $imageName);
        }else{
            $imageName = $events->image;
        }
        $events->eventDate = $request->eventDate;
        $events->header = $request->header;
        $events->title = $request->title;
        $events->dayDigit = $request->dayDigit;
        $events->dayName = $request->dayName;
        $events->houreDigit = $request->houreDigit;
        $events->houreName = $request->houreName;
        $events->minDigit = $request->minDigit;
        $events->minName = $request->minName;
        $events->secDigit = $request->secDigit;
        $events->secName = $request->secName;
        $events->image =  $imageName;
        $events->save();

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $events = Event::find($id);

        if(file_exists('uploads/event/'.$events->image)){
            unlink('uploads/event/'.$events->image);
        };

        $events->delete();
        return redirect()->route('event.index');
    }
}
