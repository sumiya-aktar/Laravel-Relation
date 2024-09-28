<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CountryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer',[CustomerController::class, 'index']);
Route::get('/post',[PostController::class, 'index']);
Route::get('/user',[UserController::class, 'index']);
Route::get('/mechanic',[MechanicController::class, 'index']);
Route::get('/countries', [CountryController::class, 'index']);