<?php

use App\Http\Controllers\DemandeDavisController;
use App\Http\Controllers\MedcineController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SpecialtiesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => true]);
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //////////////// specialties
    Route::resource('specialties', SpecialtiesController::class);

    //////////////// Medcine
    Route::resource('medcine', MedcineController::class);

    //////////////// Roles
    Route::resource('roles', RoleController::class);
    //////////////// Users
    Route::resource('users', UserController::class);
    //////////////// Users
    Route::resource('demandeDavis', DemandeDavisController::class);
    Route::get('/craetedavis/{medcine_1}/{medcine_2}', [DemandeDavisController::class, 'create'])->name('craetedavis');
    Route::get('/affiche/{id}', [DemandeDavisController::class, 'affiche'])->name('affiche');
    Route::get('telecharge_picesjoint/{id}/{imagePath}', [DemandeDavisController::class, 'telecharge_picesjoint'])->name('telecharge_picesjoint');
    Route::get('telecharge_pdf_davis/{id}', [DemandeDavisController::class, 'telecharge_pdf_davis'])->name('telecharge_pdf_davis');

});
