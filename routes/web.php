<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Final Activity
 //master

Route::get('/index',[HomeController::class,'index']);

Route::get('/generic',[HomeController::class,'generic']);

Route::get('/elements',[HomeController::class,'elements']);

