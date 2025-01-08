<?php
use App\Http\Controllers\DttNhaCCController;

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

//Nhacc
Route::get('/NhaCCs', [DttNhaCCController::class, 'List'])->name('DttNhacc.ddt-list');