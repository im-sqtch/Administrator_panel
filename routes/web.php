<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Middleware\Admin;

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login_submit', [AdminLoginController::class, 'admin_login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'admin_forget_password'])->name('admin_forget_password');

Route::get('/admin/logout', [AdminLoginController::class, 'admin_logout'])->name('admin_logout');