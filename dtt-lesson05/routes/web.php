<?php

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
    return view('welcome');
});

//Route::get('/test', function () {
  //return view('test');
//});
Route::get('/test1',[ProductController::class,'Index']);
#views
#1
Route::get('/dtt-view1', function () {
    return view('dtt-view1',['name'=>"K23CNTT3-Prj1-Của Triển"]);
});
