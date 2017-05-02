<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Kantoor;
use Illuminate\Contracts\Queue\ShouldQueue;

class OfficeContact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $kantoor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Kantoor $kantoor, Request $request)
    {
        $this->data = $request->all();
        $this->kantoor = $kantoor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.office-contact');
    }
}
