<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    //

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    // protected $table = 'vehicles';

    public function owner() {
    	return $this->belongsTo('App\Owner', 'owners_id');
    }
}
