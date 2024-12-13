<?php
use App\Http\Controllers\DttController;
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

Route::get('/SinhViens', [DttController::class, 'dttList'])->name('Dttsinhvien.ddt-list');

Route::get('/SinhVien/create', [DttController::class, 'dttCreate'])->name('dttSinhVien.create');
Route::post('/SinhVien/create', [DttController::class, 'dttcreateSubmit'])->name('dttSinhVien.dttcreateSubmit');
