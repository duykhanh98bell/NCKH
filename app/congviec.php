<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class congviec extends Model
{
    protected $table = 'congviecs';
    protected $fillable = ['id','id_da','name_job','mota_job','deadline_job','deadline_nowjob','file_job','uutien','status_job','created_at','updated_at'];
}
