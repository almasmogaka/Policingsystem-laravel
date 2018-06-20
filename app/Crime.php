<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    public function scopeSearch($list, $found){
        return $list->where('name', 'like', '&'.$found.'&');
    }
    
    public function user()
    {
    	return $this->belongsTo('App\User');
    } 

    public function crimetype(){

    	return $this->belongsTo('App\Crimetype');
    }
    public function state(){
    	return $this->belongsTo('App\State');
    }

	
}
