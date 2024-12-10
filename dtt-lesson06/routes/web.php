<?php
use App\Http\Controllers\DttAccountController;
use App\Http\Controllers\DttSessionController;
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

#Session
Route::get('/getsession', [DttSessionController::class,'dttGetSessionData'])->name('dttsession.get');
Route::get('/setsession', [DttSessionController::class,'dttStoreSessionData'])->name('dttsession.set');
Route::get('/delsession', [DttSessionController::class,'dttDeleteSessionData'])->name('dttsession.del');

#Account
Route::get('/dtt-login',[DttAccountController::class,'dttLogin'])->name('dttaccount.dttlogin');
Route::get('/dtt-logout',[DttAccountController::class,'dttLogout'])->name('dttaccount.dttlogout');
Route::post('/dtt-login',[DttAccountController::class,'dttLoginSubmit'])->name('dttaccount.dttloginsubmit');
