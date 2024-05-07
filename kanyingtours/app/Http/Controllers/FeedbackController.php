<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use App\Mail\TravelBooking;

use Illuminate\Support\Facades\Mail;


class FeedbackController extends Controller
{
    function sendFeedback(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        Mail::to('kanying1020@gmail.com')->send(new Feedback($validatedData));

        return redirect()->back()->with('success', 'Feedback Sent Successfully!');
    }

    function bookTravel(Request $request){
        $bookingData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'contact' => 'required|numeric',
            'tour_type' => 'required|string',
            'message' => 'required|string',
        ]);
        Mail::to('kanying1020@gmail.com')->send(new TravelBooking($bookingData));
        return redirect()->back()->with('success', 'Booking Successfull!');
    }


}
