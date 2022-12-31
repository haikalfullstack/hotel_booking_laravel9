<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;



Route::get('/', function () {
    return view('welcome');
});


// Admin
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');
Route::get('/admin/login', [AdminloginController::class, 'index'])->name('admin_login');
Route::get('/admin/forget-password', [AdminloginController::class, 'forget_password'])->name('admin_forget_password');
