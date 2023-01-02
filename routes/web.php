<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;



Route::get('/', function () {
    return view('welcome');
});


// Admin 
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminloginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminloginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password', [AdminloginController::class, 'forget_password'])->name('admin_forget_password');
Route::get('/admin/logout', [AdminloginController::class, 'logout'])->name('admin_logout');
Route::post('/admin/forget-password-submit', [AdminloginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminloginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminloginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
