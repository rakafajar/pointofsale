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

// Route Grup Middleware untuk pembatasan Hak Akses
// CekUser merupakan hak akses yang dapat dilakukan oleh user dengan level 1 yaitu admin
Route::group(['middleware'=>['web', 'cekuser:1']],
	function(){
		// Route Kategori
		Route::get('kategori/data', 'kategoriController@listdata')->name('kategori.data');
		Route::resource('kategori', 'kategoriController');

		//
	});

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Percobaan Konversi
Route::get('tanggal', function(){
	echo tanggal_indonesia(date('Y-m-d'));
});

Route::get('uang', function(){
	echo "Rp. ".format_uang(12500000);
});

Route::get('terbilang', function(){
	echo ucwords(terbilang(12570));
});
// Akhir Percobaan
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
