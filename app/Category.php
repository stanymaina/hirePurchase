<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps =   true;

    public $fillables  =    [
        'category_name',
    ];

    public function product(){
        return $this->hasMany('App\Product');
    }
}
