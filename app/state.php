<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    public function crimes(){
    	return $this->hasMany('App\Crime');
    }
}
