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

// Route::get('/','Homecontroller@index');

// Route::get('home', function () {
//     return view('home1');
// });
// Route::get('dashboard','pagecontroller@bukadashboard');
Route::get('createby','pagecontroller@bukacreateby')->name('buatan');

Route::get('callcreateby', function () {
    return redirect()->route('buatan');
});
Route::get('about', 'pagecontroller@bukaabout');
Route::get('koleksiterbaru', 'pagecontroller@bukakoleksiterbaru');
Route::get('register', 'pagecontroller@bukaregister');

Route::get('katalog', 'pagecontroller@bukakatalog');
Route::get('settinguser', 'pagecontroller@settinguser');
Route::get('settinghak', 'pagecontroller@settinghak');

//guestbook
Route::get('/', 'pagecontroller@bukadashboard');
Route::get('guestbookadmin', 'pagecontroller@guestbookadmin');//sementara blm digunakan
route::post('simpanbg','guestbook@store');
 
Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('profile', 'profile@index');
Route::get('editprofile', 'profile@show');
Route::get('dashboard', 'dashboard@index');
Route::get('history', 'guestbook@index');
// home page
// Route::resource('home', 'HomeController');
//buku
Route::resource('buku', 'bukucontroller');
//anggota
Route::resource('anggota', 'anggotacontroller');
//peminjaman
Route::resource('peminjaman', 'peminjamancontroller');
//cetakexcel
Route::post('buktipinjamexcel', 'peminjamancontroller@buktipinjamexcel');
//riwayat peminjaman
Route::resource('peminjamandetail', 'peminjamandetail');
//profile
Route::resource('profile', 'profile');
//riwayat
Route::resource('history', 'guestbook');

Route::get('judul/{kodebuku}', 'peminjamancontroller@judul');
//Route::get('riwayat', 'peminjamancontroller@riwayat');

