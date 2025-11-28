<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()

    {
        return view('Home.Booking');

    }
    public function store(Request $request,Booking $booking)
    {

        $data = $request->all();
        $booking = Booking::create($data);
        return redirect('/')->with('success', 'Booking created successfully!');

    }
}
