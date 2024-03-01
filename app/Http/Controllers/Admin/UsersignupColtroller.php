<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usersignup;
use App\Notifications\SignupConfirmed;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class UsersignupColtroller extends Controller
{
    public function index()
    {
        $usersignups = Usersignup::all();
        return view('admin.usersignup.index', compact('usersignups'));
    }

   
    public function status($id)
    {
        $usersignup = Usersignup::find($id);
        $usersignup->status = true;
        $usersignup->save();

        Notification::route('mail', $usersignup->email)->notify(new SignupConfirmed());

        return redirect()->back();
    }


    public function destroy($id){
        
        Usersignup::find($id)->delete();

        return redirect()->back();
    }
}
