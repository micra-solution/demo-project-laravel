<?php
 // use lluminate\Support\Facades\Auth;

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

Auth::routes();


Route::get('admin/','admin\HomeController@index');
Route::post('admin/login','admin\HomeController@login');

Route::group(['prefix'=>'admin','middleware'=>'authenticate'],function(){

	
	Route::get('logout','admin\HomeController@logout');
	Route::get('manageuser', 'admin\UserController@getIndex')
    ->name('datatables');
    Route::get('datatables.data', 'admin\UserController@anyData')
    ->name('datatables.data');
    Route::get('oreders','admin\OredrController@index');
    Route::get('goods','admin\GoodsController@index');
    Route::get('goods-date','admin\GoodsController@getData')
    ->name('goods.data');
    Route::get('orders-date','admin\OredrController@getData')
    ->name('orders.data');
    Route::get('Edit/{id}','admin\GoodsController@Edit');
    Route::post('Edit-do','admin\GoodsController@Edit_do');
    
});


