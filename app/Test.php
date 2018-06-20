<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{ 
    //
    protected $fillable = [
      'fname', 'lname','address','p_residence', 'phone_no','l_occurred', 'l_address','op','suspect',
    ];
}
