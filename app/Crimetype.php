<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crimetype extends Model
{
    public function crimes(){

    	return $this->hasMany('App\Crime');
    }
}
