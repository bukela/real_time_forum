<?php

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
//     return view('home');
// });

Route::view('/', 'home');
Route::view('/{any}', 'home'); //zbog vue routera,laravel ne vidi rutu koju menja vue
Route::view('/{any}/{any1}', 'home'); //zbog vue routera,laravel ne vidi rutu koju menja vue
