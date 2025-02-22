<?php

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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
   });
   Route::get('/multable/{number?}', function ($number = null) {
    $j = $number??2;
    return view('multable', compact('j')); //multable.blade.php
   });
   
   Route::get('/even', function () {
    return view('even'); //even.blade.php
   });
   Route::get('/prime', function () {
    return view('prime'); //prime.blade.php
   });
