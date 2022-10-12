<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Certificates;
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
    return view('index');
})->name('index');

Route::get('/sir', function () {
    return view('sir');
})->name('sir');
Route::post('/store',[Certificates::class,'store'])->name('store');
Route::get('/search',[Certificates::class,'search'])->name('search');
