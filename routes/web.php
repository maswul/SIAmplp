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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::middleware('auth')->get('/admin/pegawai', function(){
    if (\Illuminate\Support\Facades\Auth::user()->role<3)
    {
        return view('sppd.admin.pegawai');
    }
    return redirect()->route('home');
});


//untuk eAset
Route::get('/e-aset', function(){
    return view("aset.home");
})->name('easet');

Route::get('/e-aset/pinjam', function() {
    return view ("aset.pinjam");
})->name('easet.pinjam');

Route::middleware('auth')->get('/e-aset/manager', function() {
    if (\Illuminate\Support\Facades\Auth::user()->role<3)
    {
        return "Selamat datang di e-aset manager pages!";
    }
})->name('easet.admin');