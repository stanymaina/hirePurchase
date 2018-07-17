<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hirepurchase extends Model
{
    public $timestamps  =   true;
    
    public $fillables   =   [
        'hire_purchase_name',
        'hire_purchase_percentage',
        'hire_purchase_payment_duration',
        'hire_purchase_percentage_principle',
        'hire_purchase_min_price',
        'hire_purchase_max_price',
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
