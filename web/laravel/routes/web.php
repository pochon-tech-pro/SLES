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

Route::get('/', function () {
    return view('welcome');
});
// Laravel 8 からは、名前空間をしっかりと定義する必要がありそう
// https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83
Route::resource('order', 'App\Http\Controllers\OrderController');