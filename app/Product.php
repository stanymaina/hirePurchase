<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps  =   true;
    public $fillables   =   [
        'product_name',
        'product_category_id',
        'product_price',
        'product_hire_pruchase_type',
    ];

    public function category(){
        return $this->belongsTo('App\Category' , 'product_category_id');
    }
    public function order(){
        return $this->hasMany('App\Order');
    }
}
