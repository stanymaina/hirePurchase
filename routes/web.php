<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories','CategoryController');
Route::resource('products','ProductsController');
Route::get('edit-product', function(){
    return View::make('product.edit');
});
Route::resource('orders','OrdersController');
Route::get('product/{product}/plan/{plan}/price/{price}',[
    'as' => 'makeOrder',
    'uses'=> 'OrdersController@makeOrder'
]);
Route::resource('hire','HiresController');
