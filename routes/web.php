<?php

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

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('cars', \App\Http\Controllers\CarController::class);
Route::resource('cars.instances', \App\Http\Controllers\CarInstanceController::class);
Route::get('/user/profile', [\App\Http\Controllers\UserProfileController::class, 'show'])->name('profile.show');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::any('/datatable/ajax/{model}', 'DataTableController@index')->name('portal.datatable.ajax');
});
