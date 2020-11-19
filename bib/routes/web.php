<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::post('/home',[App\Http\Controllers\HomeController::class, 'storeMenu'])->name('save-menu');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'showMenu'])->name('show-menu');
    //Route::get('/tester',[App\Http\Controllers\MenuController::class, 'storeMenu'])->name('save-menu');

});
