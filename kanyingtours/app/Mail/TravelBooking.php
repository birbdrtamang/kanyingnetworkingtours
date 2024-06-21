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
    public function __construct($formData)
    {
        $this->formData= $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  
    public function build()
    {
        return $this->view('bookingtravel')
                    ->with('data', $this->formData)
                    ->subject('Booking Received');
    }
}
