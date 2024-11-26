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
Route::get('/gg', function () {
    return 'welcome';
});
Route::redirect('/wo','two');
Route::get('two',function()
{
    return '<h1>Auto chuyen page:TWO<h1>';

});
