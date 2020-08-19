<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\duan;
use App\congviec;
use App\cv_user;
use App\User;

class TimelineController extends Controller
{
    function get_timeline(Request $Request){

        if($Request->findUser == null && $Request->status == null ){
            $listDuan = duan::all();
        }else if($Request->findUser == null && $Request->status != null){
            $listDuan = duan::where(['status'=>$Request->status])
            ->get();
        }else if($Request->findUser != null && $Request->status == null){
            $listDuan = duan::join('da_users','da_users.id_da','=','duans.id')
            ->where(['id_user'=>$Request->findUser, 'isActive'=>'True'])
            ->get();
        }else if($Request->findUser != null && $Request->status != null){
            $listDuan = duan::join('da_users','da_users.id_da','=','duans.id')
            ->where(['id_user'=>$Request->findUser, 'isActive'=>'True', 'status'=>$Request->status])
            ->get();
        }
        
        $listUsers = User::all();
        return view('timeline', 
        [
            'duans'=>$listDuan,
            'users'=>$listUsers
        ]);
    }
    function get_timeline_cv(Request $Request, $id){
        //dd($Request);
        if($Request->findUser_job == null && $Request->status_job == null ){
            $listCv = congviec::where(['id_da'=>$id])
            ->get();
        }elseif($Request->findUser_job == null && $Request->status_job != null){
            $listCv = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
            ->where(['status_job'=>$Request->status_job, 'id_da'=>$id])
            ->get();
        }elseif($Request->findUser_job != null && $Request->status_job == null){
            $listCv = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
            ->join('cv_users', 'cv_users.id_cv', '=', 'congviecs.id')
            ->join('users', 'users.id', '=', 'cv_users.id_user')
            ->where(['duans.id'=>$id, 'cv_users.id_user'=>$Request->findUser_job])
            ->get();
        }elseif($Request->findUser_job != null && $Request->status_job != null){
            $listCv = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
            ->join('cv_users', 'cv_users.id_cv', '=', 'congviecs.id')
            ->join('users', 'users.id', '=', 'cv_users.id_user')
            ->where(['id_user'=>$Request->findUser_job,'status_job'=>$Request->status_job])
            ->get();
        }
        //dd($listCv);
        
        $listUsers = User::all();
        $us = "";
        if($Request->status_job != null){
            $us = "$Request->status_job";
            $checkUser = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
            ->join('cv_users', 'cv_users.id_cv', '=', 'congviecs.id')
            ->join('users', 'users.id', '=', 'cv_users.id_user')
            ->where(['duans.id'=>$id,'status_job'=>$us ])
            ->get();
        }else{
            $checkUser = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
            ->join('cv_users', 'cv_users.id_cv', '=', 'congviecs.id')
            ->join('users', 'users.id', '=', 'cv_users.id_user')
            ->where(['duans.id'=>$id ])
            ->get();
        }
        //dd($checkUser);
        return view('/timelineName',[
            'congViecs'=>$listCv,
            'users'=>$listUsers,
            'checkedUser'=>$checkUser
        ]);
    }
    function get_time(){
        $listUsers = User::all();
        return view('/time', ['users'=>$listUsers]);
    }
    function get_timeline_user(Request $Request, $id){
        $listUsers = User::all();
        $listCv = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
            ->join('cv_users', 'cv_users.id_cv', '=', 'congviecs.id')
            ->join('users', 'users.id', '=', 'cv_users.id_user')
            ->where(['cv_users.id_user'=>$id])
            ->get();
        //dd($listCv);
        return view('/timelineDetail',['congViecs'=>$listCv, 'users'=>$listUsers]);
    }
}
