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
    public function contact()
    {
    	return view('contact');
    }
    public function projectDetail()
    {
    	return view('project-detail');
    }
    public function createProject()
    {
    	return view('create-project');
    }
    public function createJob()
    {
    	return view('create-job');
    }
}
