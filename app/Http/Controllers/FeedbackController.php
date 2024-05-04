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
        // Mail::to('birbdrtamang03@gmail.com')->send(new Feedback($feedback));
        Mail::to('birbdrtamang03@gmail.com')->send(new Feedback($validatedData));

        return redirect()->back()->with('message', 'Feedback sent successfully!');
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
        // Mail::to('birbdrtamang03@gmail.com')->send(new Feedback($feedback));
        Mail::to('birbdrtamang03@gmail.com')->send(new TravelBooking($bookingData));
        // Send email to your application's email address
        // Mail::send([], [], function ($message) use ($bookingData) {
        //     $message->to('12200038.gcit@rub.edu.bt')
        //             // ->subject($validatedData[''])
        //             ->text($bookingData['message'])
        //             ->from($bookingData['email']);
        // });

        return redirect()->back()->with('message', 'Booking Successfull!');
    }


}
