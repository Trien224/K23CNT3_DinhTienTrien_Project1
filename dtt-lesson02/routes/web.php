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
Route::get('/start', function () {
    return "<h1>Welcome Trien K23<h1>";
});
Route::redirect('/wo','two');

Route::get('two',function()
{
    return '<h1>Auto chuyen page:TWO<h1>';
});
//link views
Route::get('/tientrien', function () {
    return view('tientrien');
});