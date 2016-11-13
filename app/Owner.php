<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{

    // protected $table = 'owners';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function vehicles() {
    	return $this->hasMany('App\Vehicle');
    }
}
