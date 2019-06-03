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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil/eo', function(){
    return view('pages.profil_eo');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::get('/paket/detail/nama_paket', function(){
    return view('pages.detail_paket');
});

Route::get('/notifications', function(){
    return view('pages.notifications');
});

Route::get('/transactions/detail/id_transaksi', function(){
    return view('pages.detail_transaction');
});