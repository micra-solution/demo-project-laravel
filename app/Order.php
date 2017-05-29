<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function goods()
    {
    	return this->belogsTo('App\Good','goodId');
    }

    public function order_user()
    {
    	return $this->belongsTo('App\User','ClientId');
    }
}
