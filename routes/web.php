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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/login', 'AuthController@index');
Route::get('/registration', 'AuthController@registration');


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::get('/mahasiswa/{student}', 'MahasiswaController@show');

Route::get('/mahasiswa/{student}/edit', 'MahasiswaController@edit');
Route::patch('/mahasiswa/{student}', 'MahasiswaController@update');
Route::delete('/mahasiswa/{student}', 'MahasiswaController@destroy');