<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TravelBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $formData)
    {
        $this->formData= $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        if(isset($this->formData['email'])) {
            return $this->from($this->formData['email'])
                        ->view('bookingtravel')
                        ->subject('Travel Booking Received');
        }
        // return $this->from($this->formData['email'])
        //             ->view('bookingtravel')
        //             ->subject('Travel Booking Received');
    }
}
