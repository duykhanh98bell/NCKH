<?php

namespace App\Http\Controllers;

use App\duan;
use App\tailieu;
use App\User;
use App\da_user;
use App\congviec;
use Carbon\Carbon;
use DB;
use Excel;
use App\Imports\UsersImport;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function projects()
    {
        $listduan = duan::join('tailieus', 'duans.id', '=', 'tailieus.id_da')->get();
        //dd($listduan[0]);
        $userInDuan = duan::join('da_users', 'duans.id', '=', 'da_users.id_da')
        ->join('users', 'da_users.id_user', '=', 'users.id')
        ->get();
        //dd($userInDuan);
        $total = congviec::join('duans', 'duans.id', '=', 'congviecs.id_da')
        // ->where('duans.id', $listduan)
        ->count();
        //dd($total);
    	return view('projects',[
            'duan'=>$listduan,
            'user'=>$userInDuan,
            'total'=>$total
        ]);

    }
    public function createProject()
    {
        $listUser = User::all();
        return view('create-project',['listUser'=>$listUser]);
    }
    public function saveProject(Request $Request)
    {
        //dd($Request);
        //print_r($Request->input('user'));
        // exit();
        $duan = duan::create([
            'name_duan'=>$Request->duan_name,
            'tomtat'=>$Request->duan_tomtat,
            'deadline'=>$Request->duan_deadline,
            'status'=>$Request->duan_status,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        $duan->update([
            'name_duan'=>$Request->duan_name,
            'ma_duan'=>"DA".$duan->id,
            'tomtat'=>$Request->duan_tomtat,
            'deadline'=>$Request->duan_deadline,
            'status'=>$Request->duan_status,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
        ]);

            // 
        
            //print_r($Request->input('user'));
        // if(isset($Request->input('user')))
        {
            foreach($Request->input('user') as $us)
            {
                da_user::create([
                    'id_da'=>$duan->id,
                    'id_user'=>$us,
                    'isActive'=>'True'
                ]);
            }
            $user = User::all();
            foreach($user as $ull)
            {
                $check = da_user::where(['id_user'=>$ull->id, 'id_da'=>$duan->id])->first();
                //dd($check);
                if($check == null){
                    da_user::create([
                        'id_da'=>$duan->id,
                        'id_user'=>$ull->id,
                        'isActive'=>'False'
                    ]);
                }
            }
        }
        
       
        

        ////// import excel
        // $tailieu = '';
        // $this->validate($Request, [
        //     'tailieu'=>'required|mimes:xls,xlsx'
        // ]);
        // $path = $Request->file('tailieu')->getRealPath();
        // $data = Excel::load($path)->get();
        Excel::import(new UsersImport,request()->file('tailieu'));

    	if ($Request->has('tailieu')) {
    		//$avatar = $Request->file('avatar')->store('avatar');
    		$file = $Request->tailieu;
    		$file->move(base_path('/tailieu'),$file->getClientOriginalName());
    		$tailieu = $file->getClientOriginalName();
    	}
        tailieu::create([
            'id_da'=>$duan->id,
            'link'=>$tailieu
        ]);

        return redirect()->route('projects');
    }
    public function editProject($id)
    {
        $listUser = da_user::join('users','users.id','=','da_users.id_user')->where(['isActive'=> 'False','id_da'=>$id ])->get();
        //dd($listUser);
        // $daUser = da_user::where(['id_da'=>$id])->get();
        //dd($daUser);
        $detail = duan::find($id);
        //dd($detail);
        return view('edit-project',[ 'detail'=>$detail, 'listUser'=>$listUser]);
    }
    public function updateProject(Request $Request, $id)
    {
        //dd($Request->deadline_now);
        //print_r($Request->input('user'));
        duan::find($id)->update([
            'name_duan'=>$Request->duan_name,
            'tomtat'=>$Request->duan_tomtat,
            'deadline_now'=>$Request->deadline_now,
            'status'=>$Request->duan_status,
            'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        //print_r($Request->input('user'));
        $cc = $Request->input('user');
        if(isset($cc))
        {
            foreach($Request->input('user') as $us){
                da_user::where(['id_da'=> $id, 'id_user'=>$us])->update([
                    'id_da'=>$id,
                    'id_user'=>$us,
                    'isActive'=>"True"
                ]);
            }
        }
        
        
        return redirect()->route('projects');
    }

    public function projectDetail()
    {
    	return view('project-detail');
    }
    
    
}
