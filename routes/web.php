<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminFeatureController;







// Front
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');



// Admin 
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');

Route::get('/admin/login', [AdminloginController::class, 'index'])->name('admin_login');

Route::post('/admin/login-submit', [AdminloginController::class, 'login_submit'])->name('admin_login_submit');

Route::get('/admin/forget-password', [AdminloginController::class, 'forget_password'])->name('admin_forget_password');

Route::get('/admin/logout', [AdminloginController::class, 'logout'])->name('admin_logout');

Route::post('/admin/forget-password-submit', [AdminloginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');

Route::get('/admin/reset-password/{token}/{email}', [AdminloginController::class, 'reset_password'])->name('admin_reset_password');

Route::post('/admin/reset-password-submit', [AdminloginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');

Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');



// Admin -> slider
Route::get('/admin/slide/view', [AdminSlideController::class, 'index'])->name('admin_slide_view')->middleware('admin:admin');

Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin_slide_add')->middleware('admin:admin');

Route::post('/admin/slide/store', [AdminSlideController::class, 'store'])->name('admin_slide_store')->middleware('admin:admin');

Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin_slide_edit')->middleware('admin:admin');

Route::post('/admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin_slide_update')->middleware('admin:admin');

Route::get('/admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin_slide_delete')->middleware('admin:admin');



// Admin -> features
Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin_feature_view')->middleware('admin:admin');

Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin_feature_add')->middleware('admin:admin');

Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin_feature_store')->middleware('admin:admin');

Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit')->middleware('admin:admin');

Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin_feature_update')->middleware('admin:admin');

Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin_feature_delete')->middleware('admin:admin');
