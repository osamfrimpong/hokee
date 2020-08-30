<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\HookRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HookMatched extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $hookRequest;
    public $messageType;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking, HookRequest $hookRequest, $messageType)
    {
        $this->booking = $booking;
        $this->hookRequest = $hookRequest;
        $this->messageType = $messageType;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.hook_matched');
    }
}
