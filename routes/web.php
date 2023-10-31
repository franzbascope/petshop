<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pets/create',[\App\Http\Controllers\PetController::class,'create'])->name("pet_create");
Route::get('/pets',[\App\Http\Controllers\PetController::class,'index'])->name("pets");
Route::post('/pets',[\App\Http\Controllers\PetController::class,'store'])->name("pets_store");
