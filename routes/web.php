<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/create',[MessageController::class,'create']);
Route::get('/message/{id}',[MessageController::class,'view']);
Route::get('/message/delete/{id}',[MessageController::class,'deletem']);
Route::get('/message/update/{id}',[MessageController::class,'update']);
Route::get('/message/edits/{id}',[MessageController::class,'edits']);
Route::post('/message/edit/{id}',[MessageController::class,'edit']);