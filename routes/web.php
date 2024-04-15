<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\EmailController;

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
    return view('layouts.principal');
});

/*Route::get('/persona', function () {
    return view('persona.index');
});*/

Route::get('/equipo', function () {
    return view('equipo');
});

route::resource('/persona','App\Http\Controllers\PersonaController');

route::resource('/telefono','App\Http\Controllers\TelefonoController');
route::get('/telefono/{id}/{id2}',[TelefonoController::class,'show']);
route::get('/telefono/{id}/{id2}',[TelefonoController::class,'create']);

route::resource('/correo','App\Http\Controllers\EmailController');
route::get('/correo/{id}/{id2}',[EmailController::class,'show']);
route::get('/correo/{id}/{id2}',[EmailController::class,'create']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
