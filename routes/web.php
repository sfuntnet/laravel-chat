<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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


Route::get('/',[Home::class,'login'])->name('login');
Route::get('/kayıt-ol',[Home::class,'kayıt'])->name('kayıt');
Route::get('/kayıtol-controller',[Home::class,'kayıtolregister'])->name('register');
Route::post('/login-controller',[Home::class,'logincontrol'])->name('logincontrol');
Route::get('/yonetim',[Home::class,'yonetim'])->name('yonetim');
Route::get('/cikis-yap',[Home::class,'cikisyap'])->name('cikis');
Route::get('/yonetim/profil-duzenle',[Home::class,'profilduzenle'])->name('profilduzenle');
Route::post('/yonetim/isimguncelle',[Home::class,'isimgüncelle'])->name('isimguncelle');
Route::post('/yonetim/emailguncelle',[Home::class,'emailguncelle'])->name('emailguncelle');
Route::post('/yonetim/sifreguncelle',[Home::class,'sifreguncelle'])->name('sifreguncelle');
Route::get('/yonetim/kullanicilar',[Home::class,'kullanicilar'])->name('kullanicilar');
Route::get('/yonetim/mesajgonder',[Home::class,'mesajgonder'])->name('mesajgonder');
Route::get('/yonetim/ozelmesaj',[Home::class,'ozelmesaj'])->name('ozelmesaj');
Route::get('/yonetim/ozelmesajgonder',[Home::class,'ozelmesajgonder'])->name('ozelmesajgonder');
Route::get('/yonetim/ozelmesajkullanici/{id}',[Home::class,'ozelmesajkullanici'])->name('ozelmesajkullanıcı');
Route::get('/yonetim/kullanicigonder',[Home::class,'kullanicigonder'])->name('kullanicigonder');
Route::get('/yonetim/gelenmesajlar',[Home::class,'gelenmesajlar'])->name('gelenmesajlar');
Route::get('/yonetim/ozelmesajdetail/{id}',[Home::class,'ozelmesajdetail'])->name('ozelmesajdetail');
Route::get('/yonetim/search',[Home::class,'search'])->name('search');
