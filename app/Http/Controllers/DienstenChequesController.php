<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DienstenChequesController extends Controller
{
    public function index(){
    	return view('pages.dienstencheques.index');
    }
}
