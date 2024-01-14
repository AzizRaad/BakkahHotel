<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function ShowAbout() {
        return view('frontend.about.about');
    }

    public function ShowContact() {
        return view('frontend.contact.contact');
    }

    public function ShowAllRoom(Room $room) {

        $rooms = Room::all();
        return view('frontend.room.all-room',compact('rooms'));
    }

}
