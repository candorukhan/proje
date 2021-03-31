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

//Route::get('/', function () {
    //dd(App\Models\Ders::where('kodu' , '100')->where('sinif' , '09')->first()->ogrenciler);
    //dd(App\Models\Ogrenci::where('numara' , '100')->first());

    //dd(App\Models\Ogrenci::where('numara' , '10')->first()->zorunluDersler());

    //dd(App\Models\Ogrenci::where('numara' , '1')->first()->zorunluDersler('09'));


    //dd(App\Models\Ogrenci::where('numara' , '1')->first()->dersler->where('ogrenci_numara' , '1'));
    //return view('welcome');
//});
Route::get('/', [App\Http\Controllers\OgrenciDerslerController::class, 'index']);

Route::get('dersler' , [App\Http\Controllers\SinifDerslerController::class, 'index']);
