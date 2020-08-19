<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duan extends Model
{
    protected $table = 'duans';
    protected $fillable = ['id','name_duan', 'ma_duan', 'tomtat','deadline', 'deadline_now','status','create_at','update_at'];
}
