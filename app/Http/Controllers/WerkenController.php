<?php

namespace App\Http\Controllers;

use App\Kantoor;
use App\Mail\ApplicationContact;

class WerkenController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $kantoren = Kantoor::all();
        return view('pages.werken.index', compact('kantoren'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|numeric',
            'kantoor' => 'required',
            'cv' => 'mimes:pdf',
            'motivatie' => 'required'
        ], $this->messages());

        request()->file('cv')->storeAs('cv', request()->get('name') . '.' . request()->file('cv')->getClientOriginalName() );

        \Mail::send(new ApplicationContact(request()));

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
            'email.required' => 'Gelieve uw email adres in te vullen',
            'email.email' => 'Gelieve een correct email adres in te vullen',
            'telefoon.required' => 'Gelieve uw telefoonnummer in te vullen',
            'telefoon.numeric' => 'Een telefoonnummer kan enkel cijfers bevatten',
            'kantoor.required' => 'Gelieve een kantoor te selecteren',
            'bericht.required' => 'Gelieve een bericht na te laten',
            'cv.mimes' => 'Gelieve een PDF bestand te kiezen'
        ];
    }
}
