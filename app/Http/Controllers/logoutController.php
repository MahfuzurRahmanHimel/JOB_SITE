<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class logoutController extends Controller
{
    public function index(Request $request){
    	Session::flush();
    	$request->session()->regenerate();
    	return redirect('/');
    }
}
