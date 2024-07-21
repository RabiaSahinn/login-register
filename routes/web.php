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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::namespace("App\Http\Controllers\Proje1")->group( function() {
    Route::get("/" , "DefaultController@login");

    Route::get("girisyap" , "DefaultController@login")->name("GirisYap");
    Route::post("uyegiris" , "DefaultController@authenticate")->name("UyeGiris");
    Route::get("uyeol" , "DefaultController@register")->name("UyeOl");
    Route::post("uyeol/store" , "DefaultController@store")->name("UyeKayit");
    Route::get("hesabım" , "DefaultController@index")->name("LoginIndex")->middleware("CheckAuth");
    Route::get("cikisyap" , "DefaultController@logout")->name("CikisYap");
    Route::get("duzenle" , "SettingsController@edit")->name("DuzenleEdit")->middleware("CheckAuth");
    Route::post("profiliduzenle" , "SettingsController@update")->name("DuzenleUpdate");

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
