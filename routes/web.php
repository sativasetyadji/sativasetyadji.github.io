<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\JenislayananController;

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
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('jams', JamController::class);
Route::resource('pengunjungs', PengunjungController::class);
Route::resource('jenislayanans', JenislayananController::class);
Route::resource('metode', MetodeController::class);


Route::view('/formregis','formregis')->name('formregister');
Route::view('persyaratan/bphtb','persyaratan/bphtb')->name('persyaratan/bphtb');
Route::view('persyaratan/pbb','persyaratan/pbb')->name('persyaratan/pbb');
Route::view('persyaratan/daerah','persyaratan/daerah')->name('persyaratan/daerah');
Route::view('/formsukses','formsukses')->name('formsukses');


