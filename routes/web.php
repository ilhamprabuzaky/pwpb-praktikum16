<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/students', [StudentsController::class, 'index']);

/* Current pwpb table task 18 */
// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/siswa/create', [SiswaController::class, 'create']); /* Untuk nampilin form tambah data */
// Route::get('/siswa/{siswa}', [SiswaController::class, 'show']);
// Route::post('/siswa', [SiswaController::class, 'store']); // If form method post ke `/siswa` jalankan method store 
// Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy']);
// Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit']); /* Untuk nampilin form ubah data */
// Route::patch('/siswa/{siswa}', [SiswaController::class, 'update']);
Route::get('/siswa/table', [SiswaController::class, 'table']);
Route::resource('siswa', SiswaController::class);
