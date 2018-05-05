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

Route::get('/','homecontroller@showinforview');
Route::get('/trangchu','homecontroller@showinforview');
Route::get('/vohocsinh','homecontroller@vohocsinh');
Route::get('/sachgiaokhoa','homecontroller@sachgiaokhoa');
Route::get('/thongtin','homecontroller@thongtin');
Route::get('/danhmuc','homecontroller@danhmuc');
Route::get('/lienhe','homecontroller@lienhe');
Route::get('/lichlienket','homecontroller@lichlienket');
Route::get('/chitiet&{id}','homecontroller@chitiet($id)');
Route::get('/chitietvo&{id}','homecontroller@chitietvo');
Route::get('/chitietsach&{id}','homecontroller@chitietsach');
