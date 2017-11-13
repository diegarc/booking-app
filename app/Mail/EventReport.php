<?php

namespace App\Mail;

use App\Models\Visit;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventReport extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The visits instance.
     *
     * @var Visit
     */
    public $visits;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($visits)
    {
        $this->visits = $visits;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('diegarc@gmail.com')
            ->view('emails.event-report');
    }
}
