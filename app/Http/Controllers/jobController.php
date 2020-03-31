<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\duan;
use App\congviec;

class jobController extends Controller
{
	public function check($id_da)
    {
        $cv = congviec::where(['id_da'=>$id_da])->get();
    	return view('check',['cv'=>$cv]);
    }
    function createJob($id_da)
    {
    	return view('create-job');
    }
    function saveJob($id_da)
    {
    	return view('create-job');
    }
}
