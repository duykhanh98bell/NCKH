<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class da_user extends Model
{
    protected $table = 'da_users';
    protected $fillable = ['id_da','id_user', 'isActive'];
}
