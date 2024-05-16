<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return redirect("/template");
});

Route::get('/login', [RouteController::class, 'login'])->name('login');
Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/forget-password', [RouteController::class, 'forget_password'])->name('forget.password');

// template route
Route::get('/template', [RouteController::class, 'index'])->name('template');
Route::get('/template/404', [RouteController::class, 'not_found'])->name('template.not.found');
Route::get('/template/blank', [RouteController::class, 'blank'])->name('template.blank');
Route::get('/template/buttons', [RouteController::class, 'buttons'])->name('template.buttons');
Route::get('/template/cards', [RouteController::class, 'cards'])->name('template.cards');
Route::get('/template/charts', [RouteController::class, 'charts'])->name('template.charts');
Route::get('/template/tables', [RouteController::class, 'tables'])->name('template.tables');
Route::get('/template/utilities-animation', [RouteController::class, 'utilities_animation'])->name('template.utilities.animation');
Route::get('/template/utilities-border', [RouteController::class, 'utilities_border'])->name('template.utilities.border');
Route::get('/template/utilities-color', [RouteController::class, 'utilities_color'])->name('template.utilities.color');
Route::get('/template/utilities-other', [RouteController::class, 'utilities_other'])->name('template.utilities.other');

// admin Route
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage');
Route::get('/admin/message', [AdminController::class, 'message'])->name('admin.message');

Route::get('/admin/student', [AdminController::class, 'student'])->name('admin.student');

Route::get('/admin/teacher', [AdminController::class, 'teacher'])->name('admin.teacher');
