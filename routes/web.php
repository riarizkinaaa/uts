<?php

use App\Http\Controllers\Kebutuhan;
use App\Http\Controllers\Bagian;
use App\Http\Controllers\Profil;
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

Route::resource('bagian',Bagian::class);
Route::resource('kebutuhan',Kebutuhan::class);
Route::resource('profil',Profil::class);