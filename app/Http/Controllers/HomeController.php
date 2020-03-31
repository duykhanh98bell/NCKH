<?php

namespace App\Http\Controllers;
use App\duan;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function projects()
    {
        $listduan = duan::all();
    	return view('projects',[
            'duan'=>$listduan
        ]);
    }
    public function createProject()
    {
        return view('create-project');
    }
    public function saveProject(Request $Request)
    {
        //dd($Request);
        duan::create([
            'name'=>$Request->duan_name,
            'tomtat'=>$Request->duan_tomtat,
            'deadline'=>$Request->duan_deadline,
            'status'=>$Request->duan_status
        ]);

        return redirect()->route('projects');
    }
    public function editProject($id)
    {
        $id = duan::find($id);
        return view('edit-project',['id'=>$id]);
    }
    public function updateProject($id, Request $Request)
    {
        $id = duan::find($id);
        $id->update([
            'name'=>$Request->duan_name,
            'tomtat'=>$Request->duan_tomtat,
            'deadline'=>$Request->duan_deadline,
            'status'=>$Request->duan_status
        ]);
        return redirect()->route('projects');
    }

    public function projectDetail()
    {
    	return view('project-detail');
    }
    
    
}
