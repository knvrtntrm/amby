<?php

namespace App\Http\Controllers;

use App\Kantoor;
use Illuminate\Http\Request;
use App\Mail\OfficeContact;

class KantorenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kantoren = Kantoor::all();
        return view('pages.kantoren.index', compact('kantoren'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Kantoor $kantoor)
    {
        $this->validate(request(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|max:255',
            'bericht' => 'required'
            ], $this->messages());

        \Mail::to($kantoor->email)->send(new OfficeContact($kantoor, request()));

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
        'bericht.required' => 'Gelieve een bericht na te laten'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kantoor  $kantoor
     * @return \Illuminate\Http\Response
     */
    public function show(Kantoor $kantoor)
    {
        return view('pages.kantoren.show', compact('kantoor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kantoor  $kantoor
     * @return \Illuminate\Http\Response
     */
    public function edit(Kantoor $kantoor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kantoor  $kantoor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kantoor $kantoor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kantoor  $kantoor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kantoor $kantoor)
    {
        //
    }
}
