<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps  =   true;
    public $fillables   =   [
        'user_id',
        'product_id',
        'hire_purchase_id',
        'order_price',
        'payment_status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function planId(){
        return $this->belongsTo('App\Hirepurchase', 'hire_purchase_id');
    }

}
