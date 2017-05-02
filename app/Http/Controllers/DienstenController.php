<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DienstenController extends Controller
{
    public function index(){
    	return view('pages.diensten.index');
    }
}
