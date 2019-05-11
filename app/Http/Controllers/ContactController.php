<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
	public function execute(Request $request) {
    	return view('layouts.contact');
		
		}
}
