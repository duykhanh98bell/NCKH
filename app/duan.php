<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duan extends Model
{
    protected $table = 'duans';
    protected $fillable = ['id','name','tomtat','deadline','status','create_at','update_at'];
}
