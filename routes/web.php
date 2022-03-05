<?php

use App\Models\User;
use App\Models\Vote;
use App\Models\Calon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function (Calon $calon, User $user) {
    return view('dashboard.index', [
        "title" => "Dashboard",
        "calon" => $calon->count(),
        "user" => $user->where('level', 'Pemilih')->count(),
        "sudah" => $user->where('level', 'Pemilih')->where('status', '0')->count(),
        "belum" => $user->where('level', 'Pemilih')->where('status', '1')->count()
    ]);
})->middleware('petugas');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::resource('/dashboard/calon', CalonController::class)->middleware('admin');
Route::resource('/dashboard/user', UserController::class)->except('show')->middleware('admin');

Route::get('/dashboard/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/dashboard/admin/{user:username}/edit', [AdminController::class, 'edit'])->middleware('admin');

Route::delete('/dashboard/admin/{user:username}', [AdminController::class, 'destroy'])->middleware('admin');
Route::put('/dashboard/admin/{user:username}', [AdminController::class, 'update'])->middleware('admin');

Route::get('/dashboard/kotak', [VoteController::class, 'kotak'])->middleware('petugas');
Route::get('/dashboard/bilik', [VoteController::class, 'bilik'])->middleware('auth');
Route::get('/dashboard/bilik/{calon:username}', [VoteController::class, 'detail'])->middleware('auth');
Route::get('/dashboard/bilik/{calon:username}/pilih', [VoteController::class, 'pilih'])->middleware('auth');

Route::put('/dashboard/bilik/{calon}', [VoteController::class, 'success'])->middleware('auth');

Route::get('/dashboard/hitung', [VoteController::class, 'hitung'])->middleware('auth');
