<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialtiesController;
use App\Http\Controllers\MedcineController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;




Auth::routes(['register' => true]);
Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('auth.login');
    });
});



Route::group(['middleware' => ['auth']], function() {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//////////////// specialties
     Route::resource('specialties',SpecialtiesController::class);

//////////////// Medcine
     Route::resource('medcine',MedcineController::class);


    Route::resource('roles',RoleController::class);
    Route::resource('users',UserController::class);


});