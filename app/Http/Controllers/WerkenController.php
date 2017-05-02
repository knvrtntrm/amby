<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WerkenController extends Controller
{
    public function index(){
    	return view('pages.werken.index');
    }
}
