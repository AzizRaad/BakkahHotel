<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Season;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoomController extends Controller
{

    public function ShowRoomDetails(Room $room)
    {
        return view('frontend.room.room-details')->with('room', $room);
    }

    public function duringSeason($check_in, $check_out, $request, $room, $reservation_days)
    {
        $seasons = Season::all();

        for ($i = 0; $i < $reservation_days; $i++) {
            $current = $check_in->addDays($i);
            foreach ($seasons as $season) {
                if ($current->between($season->start, $season->end)) {
                    $notification = array(
                        'message' => 'Date is free for booking + Season Tax',
                        'alert-type' => 'success'
                    );
                    $tax = $season->increasement;
                    return view('frontend.room.booking-detail', compact('request', 'room', 'reservation_days','tax'))->with($notification);
                }
            }
        }
        $notification = array(
            'message' => 'Date is free for booking',
            'alert-type' => 'success'
        );
        $tax = 0;
        return view('frontend.room.booking-detail', compact('request', 'room', 'reservation_days','tax'))->with($notification);
    }

    public function checkout(Room $room, Request $request)
    {

        $check_in = Carbon::parse($request->check_in);
        $check_out = Carbon::parse($request->check_out);

        if ($check_in == $check_out) {
            $notification = array(
                'message' => 'Bookign date cant be the same day',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $bookings = Booking::where('room_id', $room->id)->get(); // all bookings done for this specific room
        $reservation_days = $check_in->diffInDays($check_out); //total numbers of days reserved

        // this for-loop takes every day of the desired booking period and checks if its already booked before
        for ($i = 0; $i < $reservation_days; $i++) {
            $current = $check_in->addDAys($i);
            //this foreach-loop goes through every booked date to check if it matches the user's desired booking date
            foreach ($bookings as $booking) {
                // this if-statement is triggered if theres conflict in new booking and old bookings data
                if ($current->between($booking->check_in, $booking->check_out)) {
                    $notification = array(
                        'message' => 'Date is already booked, Choose another date',
                        'alert-type' => 'error'
                    );
                    return redirect()->back()->with($notification);
                }
            }
        }
        // When there is no conflict the "else" is triggered to move on with the check out process
        // if (! $this->duringSeason($check_in, $check_out)) {
        //     $notification = array(
        //         'message' => 'Date is free for booking',
        //         'alert-type' => 'success'
        //     );
        //     return view('frontend.room.booking-detail', compact('request', 'room', 'reservation_days'))->with($notification);
        // }
        return $this->duringSeason($check_in, $check_out, $request, $room, $reservation_days);
    }

    public function placeOrder(Request $request) {

        Booking::create([
            'room_id' => $request->room_id,
            'building_id' => $request->building_id,
            'user_id' => $request->user_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        $notification = array(
            'message' => 'Booking Doen successfully, Enjoy your stay',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification);    }
}
