<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =['title','user_id'];

    //
     public function users()
     {
         return $this->hasOne('App\User');
     }
}
