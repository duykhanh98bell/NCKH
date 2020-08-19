<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tailieu extends Model
{
    protected $table = 'tailieus';
    protected $fillable = ['id','id_da','link','create_at','update_at'];
}
