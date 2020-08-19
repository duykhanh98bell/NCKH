<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv_user extends Model
{
    protected $table = 'cv_users';
    protected $fillable = ['id_cv','id_user','nhom'];
}
