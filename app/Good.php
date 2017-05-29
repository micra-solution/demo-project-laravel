<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'goods';

    public function orders() {

    	return $this->hasMany('App\Order','goodId');
    }
}
