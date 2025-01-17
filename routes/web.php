<?php

use App\Http\Controllers\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboard;

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

// ? Authentication Routes
Route::get('/', [Login::class, 'index'])->name('auth.login');
Route::get('/login', [Login::class, 'index'])->name('auth.login');
Route::post('/user/login', [Login::class, 'login2'])->name('login.user');
Route::get('/logout', [Login::class, 'logout'])->name('auth.logout');
Route::get('/forgot_password', [Login::class, 'forgotPassword'])->name('auth.forgotPassword');
Route::post('/forgot_password/send_password_reset_link', [Login::class, 'sendResetPasswordLink'])->name('auth.sendResetPasswordLink');
Route::get('/reset_password/{token}', [Login::class, 'resetPassword'])->name('password.reset');
Route::post('/reset_password/password/update', [Login::class, 'updatePassword'])->name('password.change');

Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
