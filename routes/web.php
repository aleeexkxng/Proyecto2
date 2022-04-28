<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('/camisas', function () {
    $camisas= DB::table('camisas')->get();
    return view('indexCamisas',compact('camisas'));
});
Route::get('/formularioC', function () {
    $camisas= DB::table('camisas')->get();
    return view('formularioCamisa',compact('camisas'));
});
Route::post('/store', function () {
    
});