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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/login', 'App\Http\Controllers\AuthController@index');
Route::post('/login', 'App\Http\Controllers\AuthController@authenticate');
Route::get('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/register', 'App\Http\Controllers\AuthController@store');


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {
    Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
    Route::get('/post', 'App\Http\Controllers\KegiatanController@index');
    Route::get('/addpost', 'App\Http\Controllers\KegiatanController@addpost');
    Route::post('/addpost', 'App\Http\Controllers\KegiatanController@store');
    Route::get('/detailpost/{id}', 'App\Http\Controllers\KegiatanController@detailpost');
    Route::get('/editpost/{id}', 'App\Http\Controllers\KegiatanController@editpost');
    Route::post('/ubahdata/update/{id}', 'App\Http\Controllers\KegiatanController@updatepost');
    Route::get('/deletepost/{id}', 'App\Http\Controllers\KegiatanController@deletepost');
});


Route::get('/kegiatan', 'App\Http\Controllers\HomeController@kegiatan');
Route::get('/detailkegiatan/{id}', 'App\Http\Controllers\HomeController@detailkegiatan');
Route::get('/jadwalkegiatan', 'App\Http\Controllers\HomeController@jadwal');
Route::get('/video', 'App\Http\Controllers\HomeController@video');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
