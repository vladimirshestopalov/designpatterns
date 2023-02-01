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
Route::get('/structural',[ \App\Http\Controllers\structuralController::class,'start']);
Route::get('/structural/proxy',[ \App\Http\Controllers\structuralController::class,'proxy']);
Route::get('/structural/facade',[ \App\Http\Controllers\structuralController::class,'facade']);


Route::get('/Creational/FactoryMethod',[ \App\Http\Controllers\creationalController::class,'renderWindowsButton']);
Route::get('/Creational/Builder',[ \App\Http\Controllers\creationalController::class,'makeSportCar']);
Route::get('/Creational/Singleton',[ \App\Http\Controllers\creationalController::class,'testSingleton']);
