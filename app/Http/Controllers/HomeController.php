<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Building;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        return view('frontend.index');
    }

    public function ShowAbout() {
        return view('frontend.about.about');
    }
    public function ShowBuildings() {
        $buildings = Building::all();
        return view('frontend.building.all-building',compact('buildings'));
    }

    public function ShowBuildingRooms(Building $building) {
        $rooms = Room::where('building_id', $building->id)
        ->orderBy('created_at')
        ->get();
        return view('frontend.building.building-rooms',compact('rooms','building'));
    }

    public function ShowContact() {
        return view('frontend.contact.contact');
    }

    public function ShowAllRoom() {
        $rooms = Room::all();
        return view('frontend.room.all-room',compact('rooms'));
    }

}
