<?php

namespace App\Mail;

use App\Kantoor;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

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
    public function __construct(Request $request)
    {
        $this->data = $request->all();
        $this->kantoor = Kantoor::whereId($request['kantoor'])->first();
        $this->to = ["recipients" =>
                        [
                            "name" => $this->kantoor->name, 
                            "address" => $this->kantoor->email
                         ]
                    ];
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
