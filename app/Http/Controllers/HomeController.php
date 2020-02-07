<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function projects()
    {
    	return view('projects');
    }
    public function check()
    {
    	return view('check');
    }
}
