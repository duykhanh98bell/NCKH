<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\duan;
use App\congviec;
use App\cv_user;
use App\User;

class jobController extends Controller
{
	public function check($id_da)
    {
        
        $cv = duan::join('congviecs', 'duans.id', '=', 'congviecs.id_da')
        ->where('duans.id', $id_da)
        ->get();
        //dd($cv);
        // $congViec = congviecs::all();
        $checkUser = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
        ->join('cv_users', 'cv_users.id_cv', '=', 'congviecs.id')
        ->join('users', 'users.id', '=', 'cv_users.id_user')
        ->where('duans.id',$id_da)
        ->get();

        //dd($checkUser);
    	return view('check',['cv'=>$cv, 'id' => $id_da, 'checkUser'=> $checkUser]);
    }
    function createJob($id_da)
    {
        $user = User::join('da_users', 'da_users.id_user', '=', 'users.id')
        ->where(['da_users.id_da'=>$id_da, 'isActive'=>'True'])
        ->get();
    	return view('create-job',[ 'user'=>$user ]);
    }
    function saveJob(Request $Req, $id_da)
    {
        //dd($Req);
        $file_job = '';
    	if ($Req->has('file_job')) {
    		//$avatar = $Request->file('avatar')->store('avatar');
    		$file = $Req->file_job;
    		$file->move(base_path('/fileJob'),$file->getClientOriginalName());
    		$file_job = $file->getClientOriginalName();
    	}
        
        $congViec = congviec::create([
            'id_da'=>$id_da,
            'name_job'=>$Req->name_job,
            'mota_job'=>$Req->mota_job,
            'deadline_job'=>$Req->deadline_job,
            'file_job'=>$file_job,
            'uutien'=>$Req->uutien,
            'status_job'=>$Req->status_job,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
        ]);
         
        cv_user::create([
            'id_cv'=>$congViec->id,
            'id_user'=>$Req->addUser
        ]);
    	return Redirect()->to('check/'.$id_da);
    }
    function editJob($id_cv, $id_da)
    {
        $editCv = congviec::where('congviecs.id',$id_cv)
        ->get();
        $selectCv = cv_user::join('users', 'cv_users.id_user', '=', 'users.id')
        ->join('congviecs', 'cv_users.id_cv', '=', 'congviecs.id')
        ->where('congviecs.id',$id_cv)
        ->get(); 
        //dd($selectCv);
        $user = User::join('da_users', 'da_users.id_user', '=', 'users.id')
        ->where(['da_users.id_da'=>$id_da, 'isActive'=>'True'])
        ->get();
        //dd($user);
    	return view('editJob',[ 'editCv'=>$editCv[0], 'user'=>$user, 'selectCv'=>$selectCv ]);
    }
    function updateJob(Request $Req, $id_cv, $id_da)
    {
        //dd($Req);
        $file_job = '';
    	if ($Req->has('file_job')) {
    		//$avatar = $Request->file('avatar')->store('avatar');
    		$file = $Req->file_job;
    		$file->move(base_path('/fileJob'),$file->getClientOriginalName());
    		$file_job = $file->getClientOriginalName();
    	}
        
        $congViec = Congviec::where('id',$id_cv)->update([
            'name_job'=>$Req->name_job,
            'mota_job'=>$Req->mota_job,
            'deadline_job'=>$Req->deadline_job,
            'deadline_nowjob'=>$Req->deadline_nowjob,
            // 'file_job'=>$file_job,
            'uutien'=>$Req->uutien,
            'status_job'=>$Req->status_job
        ]);
        $bool = cv_user::where(['id_cv'=>$id_cv])->get();
        $count = cv_user::where(['id_cv'=>$id_cv])->count();
        // if($count == NULL){
        //     echo "true";
        // }
        // dd($count);
        if($count != 0){
            cv_user::where(['id_cv'=>$id_cv])->update([
                'id_user'=>$Req->addUser
            ]);
        }else{
            cv_user::create([
                'id_cv'=>$id_cv,
                'id_user'=>$Req->addUser
            ]);
        }
    	return Redirect()->to('check/'.$id_da);
    }
}
