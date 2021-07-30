<?php

use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api') //namespace per il raggruppamento del nome per le rotte relative alle api
    ->group(function(){
        Route::get('restaurants', 'RestaurantController@index')->name('api.restaurant'); 
        Route::get('restaurants/{id}','RestaurantController@show')->name('api.restaurantMenu');
    });