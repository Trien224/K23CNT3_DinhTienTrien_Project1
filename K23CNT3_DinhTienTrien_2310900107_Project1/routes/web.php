<?php

use App\Http\Controllers\dttloaisanphamController;
use App\Http\Controllers\dttLoginController;
use App\Http\Controllers\dttsanphamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome')->name('home');
});
route::get('/dttAdmin/dtt-Login',[dttLoginController::class,'dttIndex']);
route::post('/dttAdmin/dtt-Login',[dttLoginController::class,'dttLoginSubmit'])->name('tientrien.Login');

//Loai
route::get('/#',[dttLoginController::class,'dttIndex']);
route::get('/dttAdmin',[dttloaisanphamController::class,'dttHome'])->name('tientrien.Home');
route::get('dttAdmin/sanpham/dtt-create',[dttloaisanphamController::class,'dttPutToList']);
route::get('/dttAdmin/dtt-list',[dttloaisanphamController::class,'dttList'])->name('tientrien.List');
route::get('dttAdmin/dtt-create',[dttloaisanphamController::class,'dttCreate'])->name('tientrien.Create');
route::post('dttAdmin/dtt-create',[dttloaisanphamController::class,'dttCreateSubmit'])->name('tientrien.Create');
route::get('dttAdmin/dtt-edit/{id}',[dttloaisanphamController::class,'dttEdit'])->name('tientrien.Edit');
route::post('dttAdmin/dtt-edit/{id}',[dttloaisanphamController::class,'dttEditSubmit'])->name('tientrien.EditSubmit');
route::get('dttAdmin/dtt-delete/{id}',[dttloaisanphamController::class,'dttDelete'])->name('tientrien.Delete');
route::get('dttAdmin/dtt-view/{id}',[dttloaisanphamController::class,'dttView'])->name('tientrien.View');

//
route::get('/dttAdmin/sanpham/dtt-list',[dttsanphamController::class,'dttList'])->name('tientrien.sanpham.List');
route::get('dttAdmin/sanpham/dtt-create',[dttsanphamController::class,'dttCreate'])->name('tientrien.sanpham.Create');
route::post('dttAdmin/sanpham/dtt-create',[dttsanphamController::class,'dttCreateSubmit'])->name('tientrien.sanpham.Create');
