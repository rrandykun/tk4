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


Route::view('/', 'home');
Route::view('unggah', 'form_unggah');
Route::get('video', 'VideoController@daftarvideo');
Route::post('prosesunggah', 'VideoController@proses_upload');