<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //

    // protected $table = 'vehicles';

    public function owner() {
    	return $this->belongsTo('App\Owner', 'owners_id');
    }
}
