<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sandevistancontroller;
use \Database\seeders\entrySeeder;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\sandevistancontroller::class, 'index']);
Route::get('/edit',[\App\Http\Controllers\sandevistancontroller::class, 'edit']);
Route::get('/edit1',[\App\Http\Controllers\sandevistancontroller::class, 'editreal']);
Route::get('/delete',[\App\Http\Controllers\sandevistancontroller::class, 'delete']);
Route::get('/maak',[\App\Http\Controllers\sandevistancontroller::class, 'maak']);
Route::post('/maak',[\App\Http\Controllers\sandevistancontroller::class, 'maak4real']);
