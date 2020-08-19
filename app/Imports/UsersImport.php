<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
use App\duan;
use App\congviec;
use App\cv_user;
use App\User;
  
class UsersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // dd($rows);
        // if(sizeof($rows[1])==5){
        //     for($row=1 ; $row<sizeof($rows); $row++){
        //         try{
                    
        //             var_dump($row[$rows]);
        //         }catch(\Exception $e){

        //         }
        //     }
        // }


       //dd($rows);
        foreach($rows as $row)
        {
            
                //dd($row);
                $insert_data[] = array(
                    'id_da'=>trim($row[0],"DA"),
                    'name_job'=>$row[1],
                    'mota_job'=>$row[2],
                    // 'deadline_job'=>$row[3],
                    'uutien'=>$row[3],
                    'status_job'=>$row[4]

                );
                
            
        }
            
        if(!empty($insert_data))
        {
            $congViec = congviec::insert($insert_data);
        }
    }
}
