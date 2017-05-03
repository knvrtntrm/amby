<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Kantoor;
use Illuminate\Http\Request;

class ApplicationContact extends Mailable
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
        return $this->markdown('email.application');
    }
}
