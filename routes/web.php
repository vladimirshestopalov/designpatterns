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
Route::get('/structural/decorator',[ \App\Http\Controllers\structuralController::class,'decoration']);
Route::get('/structural/bridge',[ \App\Http\Controllers\structuralController::class,'bridge']);


Route::get('/Creational/FactoryMethod',[ \App\Http\Controllers\creationalController::class,'renderWindowsButton']);
Route::get('/Creational/Builder',[ \App\Http\Controllers\creationalController::class,'makeSportCar']);
Route::get('/Creational/Singleton',[ \App\Http\Controllers\creationalController::class,'testSingleton']);

//lab
Route::get('/Lab/links',[ \App\Http\Controllers\labController::class,'links']);
Route::get('/Lab/Callback',[ \App\Http\Controllers\labController::class,'callbackTst']);
Route::get('/Lab/vue',[ \App\Http\Controllers\labController::class,'vue']);


