<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhayamController;
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

//Route::get('/', function () {return view('welcome');});
Route::get('/',[HomeController::class, 'Home']);
Route::get('/Sum-Method', [KhayamController::class, 'SumMethod'])->name('Sum-Method');
Route::get('factorial-Method', [KhayamController::class, 'FactorialModel'])->name('Factorial-Method');
