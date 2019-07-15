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
        return App::call('App\Http\Controllers\PekerjaController@Dashboard');
    } 
    if (Auth::user()->status == 'perusahaan') {
        return App::call('App\Http\Controllers\PerusahaanController@Dashboard');
    }
    else{
        return view('akunsalah');
    }
});

//Pekerja
Route::get('pekerja/cv', 'PekerjaController@ViewCv');
Route::get('pekerja/listPerusahaan', 'PekerjaController@ViewListPerusahaan');
Route::get('pekerja/detailPerusahaan/{id}', 'PekerjaController@ViewDetailPerusahaan');
Route::get('pekerja/listLowongan', 'PekerjaController@ViewListLowongan');
Route::get('pekerja/detailLowongan/{id}', 'PekerjaController@ViewDetailLowongan');
//CV
Route::get('pekerja/editCv', 'PekerjaController@EditCv');
Route::put('pekerja/updateCV/{id}', 'PekerjaController@UpdateCv');
Route::get('pekerja/detailPerusahaan/kirimCv/{id}', 'PekerjaController@KirimCv');
Route::get('pekerja/detailPerusahaan/tarikCv/{id}', 'PekerjaController@TarikCv');
Route::get('pekerja/cvTerkirim', 'PekerjaController@CvTerkirim');

//Perusahaan
Route::get('perusahaan/profile', 'PerusahaanController@ViewProfilePerusahaan');
Route::get('perusahaan/editProfile', 'PerusahaanController@EditProfilePerusahaan');
Route::put('perusahaan/updateProfile/{id}', 'PerusahaanController@updateProfilePerusahaan');
Route::get('perusahaan/pekerja', 'PerusahaanController@ViewListPekerja');
Route::get('perusahaan/pekerja/{id}', 'PerusahaanController@ViewDetailPekerja');
Route::get('perusahaan/lowongan', 'PerusahaanController@ViewListLowongan');

//Perusahaan Mengelola Lowongan
Route::resource('perusahaan/lowongan/dashboard', 'LowonganController');
Route::get('perusahaan/lowongan/delete/{id}', 'LowonganController@DeleteLowongan');
Route::get('perusahaan/lowongan/public', 'LowonganController@ShowAllPublicLowongan');