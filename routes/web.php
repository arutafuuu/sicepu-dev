<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("login");
});

Route::get('/login', [RouteController::class, 'login'])->name('login');
Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/forget-password', [RouteController::class, 'forget_password'])->name('forget.password');

// Admin Path
Route::get('/admin', [RouteController::class, 'index'])->name('admin');
Route::get('/admin/404', [RouteController::class, 'not_found'])->name('admin.not.found');
Route::get('/admin/blank', [RouteController::class, 'blank'])->name('admin.blank');
Route::get('/admin/buttons', [RouteController::class, 'buttons'])->name('admin.buttons');
Route::get('/admin/cards', [RouteController::class, 'cards'])->name('admin.cards');
Route::get('/admin/charts', [RouteController::class, 'charts'])->name('admin.charts');
Route::get('/admin/tables', [RouteController::class, 'tables'])->name('admin.tables');
Route::get('/admin/utilities-animation', [RouteController::class, 'utilities_animation'])->name('admin.utilities.animation');
Route::get('/admin/utilities-border', [RouteController::class, 'utilities_border'])->name('admin.utilities.border');
Route::get('/admin/utilities-color', [RouteController::class, 'utilities_color'])->name('admin.utilities.color');
Route::get('/admin/utilities-other', [RouteController::class, 'utilities_other'])->name('admin.utilities.other');
