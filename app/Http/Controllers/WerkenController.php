<?php

namespace App\Http\Controllers;

use App\Kantoor;
use Illuminate\Http\Request;
use App\Mail\ApplicationContact;

class WerkenController extends Controller
{
    public function index(){
    	$kantoren = Kantoor::all();
    	return view('pages.werken.index', compact('kantoren'));
    }

    public function store(){
    	$this->validate(request(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|max:255',
            'kantoor' => 'required',
            'motivatie' => 'required'
            ], $this->messages());

    	$kantoor = Kantoor::whereId(request('kantoor'))->first();

        \Mail::to($kantoor->email)->send(new ApplicationContact($kantoor, request()));

        return back()->with('success', 'Bedankt, uw formulier werd succesvol verzonden!');
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
        'name.required' => 'Gelieve uw naam in te vullen',
        'email.required'  => 'Gelieve uw email adres in te vullen',
        'email.email' => 'Gelieve een correct email adres in te vullen',
        'telefoon.required' => 'Gelieve uw telefoonnummer in te vullen',
        'kantoor.required' => 'Gelieve een kantoor te selecteren',
        'bericht.required' => 'Gelieve een bericht na te laten'
        ];
    }
}
