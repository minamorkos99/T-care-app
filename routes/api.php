<?php

use App\Http\Controllers\userappcontroller;
use App\Http\Controllers\doctorappcontroler;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


route::group([ 'middleware'=>'api','prefix'=>'auth'],function($router)
{
    Route::post('login',[userappcontroller::class,'login']); 
    Route::post('logout',[userappcontroller::class,'logout']); 
    //Route::post('destroyuser/{id}',[userappcontroller::class,'login']); 
    Route::post('register',[userappcontroller::class,'register']);

    Route::post('updatediseases',[userappcontroller::class,'updatediseases']);
    Route::post('adddiseases/{id}',[userappcontroller::class,'adddiseases']);
    
    Route::get('showde/{id}',[userappcontroller::class,'showde']);
    Route::get('userview/{id}',[userappcontroller::class,'userview']);
 
    Route::get('viewserdata/{id}',[userappcontroller::class,'viewserdata']);





});