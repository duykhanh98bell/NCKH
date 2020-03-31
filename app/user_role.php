<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    protected $table = 'user_roles';
    protected $fillable = [
    	'id', 'user_id','role_id','created_at', 'updated_at'
    ];
}
