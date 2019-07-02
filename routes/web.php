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

Route::get('/', 'LoperViewController@Dashboard');

Auth::routes();

//Route Front Page
Route::get('/daftarPekerja', 'LoperViewController@DaftarPekerja');
Route::get('/listPerusahaan', 'LoperViewController@ListPerusahaan');
Route::get('/listLowongan', 'LoperViewController@ListLowongan');
Route::get('/listPekerja', 'LoperViewController@ListPekerja');
Route::get('/detailPekerja', 'LoperViewController@DetailPekerja');
Route::get('/detailLowongan', 'LoperViewController@DetailLowongan');
Route::get('/detailPerusahaan', 'LoperViewController@DetailPerusahaan');
//Route Front Page Perusahaan
Route::get('/perusahaan', 'LoperViewController@Perusahaan');
//login
Route::get('home', function()
{
    if (Auth::user()->status == 'pekerja') {
        return view('pekerja/dashboard');
    } 
    if (Auth::user()->status == 'perusahaan') {
        return view('perusahaan/dashboard');
    } 
});

