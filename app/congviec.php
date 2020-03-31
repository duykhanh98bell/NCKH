<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class congviec extends Model
{
    protected $table = 'congviecs';
    protected $fillable = ['id','id_da','id_nv','name','mota','image','uutien','created_at','updated_at'];
}
