<?php

use App\Http\Controllers\userwebcontroller;
use App\Http\Controllers\dataenwebcontroler;

  use Illuminate\Support\Facades\Route;

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
    return view('welcome');
}); 




 
    Route::get('loginform',[userwebcontroller::class,'loginform']);
    Route::post('login',[userwebcontroller::class,'login'])->name('home');
    
    Route::get('registerform',[userwebcontroller::class,'registerform']);
    Route::post('register',[userwebcontroller::class,'register']);
    
    
    Route::get('profile',[userwebcontroller::class,'profile']);
    Route::post('profilehome',[userwebcontroller::class,'profilehome']);
    Route::post('updateform',[userwebcontroller::class,'updateform']);

    Route::post('logout',[userwebcontroller::class,'logout']);

     /*    Route::get('showhospitalsearch',[admincontroler::class,'showhospitalsearch']);
         Route::post('hospitalsearch',[admincontroler::class,'hospitalsearch']);
         Route::post('addhospita',[admincontroler::class,'addhospital']);       
         Route::get('destroyhospital/{id}',[admincontroler::class,'destroyhospital']);
         Route::put('updatehos/{id}',[admincontroler::class,'updatehospital']);

         Route::get('showdiseasessearch',[admincontroler::class,'showdiseasessearch']);
         Route::post('diseasessearch',[admincontroler::class,'diseasessearch']);
         Route::post('adddiseases',[admincontroler::class,'adddiseases']);       
         Route::get('destroydiseases/{id}',[admincontroler::class,'destroydiseases']);
         Route::put('updatediseases/{id}',[admincontroler::class,'updatediseases']);

         Route::get('showmedicalsearch',[admincontroler::class,'showmedicalsearch']);
         Route::post('medicalsearch',[admincontroler::class,'medicalsearch']);
         Route::post('addmedical',[admincontroler::class,'addmedical']);       
         Route::get('destroymedical/{id}',[admincontroler::class,'destroymedical']);
         Route::put('updatemedical/{id}',[admincontroler::class,'updatemedical']);

         Route::get('showdoctorsearch',[admincontroler::class,'showdoctorsearch']);
         Route::post('doctorsearch',[admincontroler::class,'doctorsearch']);
         Route::post('adddoctor',[admincontroler::class,'adddoctor']);       
         Route::get('destroydoctor/{id}',[admincontroler::class,'destroydoctor']);
         Route::put('updatedoctor/{id}',[admincontroler::class,'updatedoctor']);

          */
         
          Route::get('dataentryloginform',[dataenwebcontroler::class,'loginform']);
          Route::post('dataentrylogin',[dataenwebcontroler::class,'login']);
          Route::post('userdata',[dataenwebcontroler::class,'usersearch']);





    Route::get('updatediseasesform',[dataenwebcontroler::class,'updatediseasesform']);
    Route::put('updatediseases/{id}',[dataenwebcontroler::class,'updatediseases']);
    Route::get('updatemedicalform',[dataenwebcontroler::class,'updatemedicalform']);
    Route::post('updatemedical',[dataenwebcontroler::class,'updatemedical']);

   
 