<?php

namespace App\Mail;

use App\Kantoor;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OfficeContact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $kantoor;

    /**
     * Create a new message instance.
     *
     * @param Kantoor $kantoor
     * @param Request $request
     */
    public function __construct(Kantoor $kantoor, Request $request)
    {
        $this->data = $request->all();
        $this->kantoor = $kantoor;
        $this->to = ["recipients" =>
                        [
                            "name" => $this->kantoor->name, 
                            "address" => $this->kantoor->email
                         ],
                         [
                            "name" => "Simon Heggermont",
                            "address" => "simon.heggermont@amby.be"
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
        return $this->from('noreply@amby.be')->subject('Contactformulier')->markdown('email.office-contact');
    }
}
