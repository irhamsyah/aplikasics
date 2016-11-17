<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
});
/*Route::resource('custom/url','AplikasicsController@inputankirim' );*/

Route::resource('aplikasics','AplikasicsController@inputan' );

/*Simpan data*/
Route::resource('simpan','AplikasicsController@store' );
Route::resource('simpandokumen','AplikasicsController@simpandokumen' );
/*Show Data*/
Route::resource('aplikasi/{id}/show','AplikasicsController@lihat' );

/*Show Data Pengiriman Dokumen */
Route::resource('aplikasi/{id}/lihatkirim','AplikasicsController@lihatdokumen' );

Route::resource('aplikasi/{id}/editkirim','AplikasicsController@edit');
/*Penghapusan data*/
Route::resource('aplikasi/{id}/hapus','AplikasicsController@destroy' );
/*Hapus Data pengiriman Dokumen */
Route::resource('aplikasi/{id}/hapusdatakirim','AplikasicsController@hapus' );
Route::resource('aplikasi/{id}','AplikasicsController@show' );
/*Update Data*/
Route::resource('update/{id}','AplikasicsController@update' );

/*Update Data kirim dokumen*/
Route::resource('updatekirim/{id}','AplikasicsController@updatekirim' );

/*Hapus Data*/

Route::resource('pdf/{id}', 'AplikasicsController@cetakPDF');







