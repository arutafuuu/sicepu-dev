<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Common Route

// Route::get("/", function () {
//     return redirect("/admin");
// });

Route::fallback(function() {
    return view('error.not-found');
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
Route::get('/template/date', [RouteController::class, 'date'])->name('template.date');


// admin Route
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/message', [AdminController::class, 'message'])->name('admin.message');
Route::get('/admin/setting', [AdminController::class, 'setting'])->name('admin.setting');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

Route::get('/admin/class', [AdminController::class, 'class'])->name('admin.class');
Route::get('/admin/class/add', [AdminController::class, 'add_class'])->name('admin.class.add');
Route::get('/admin/class/edit', [AdminController::class, 'edit_class'])->name('admin.class.edit');

Route::get('/admin/student', [AdminController::class, 'student'])->name('admin.student');
Route::get('/admin/student/add', [AdminController::class, 'add_student'])->name('admin.student.add');
Route::get('/admin/student/detail', [AdminController::class, 'detail_student'])->name('admin.student.detail');
Route::get('/admin/student/edit', [AdminController::class, 'edit_student'])->name('admin.student.edit');

Route::get('/admin/teacher', [AdminController::class, 'teacher'])->name('admin.teacher');
Route::get('/admin/teacher/add', [AdminController::class, 'add_teacher'])->name('admin.teacher.add');
Route::get('/admin/teacher/detail', [AdminController::class, 'detail_teacher'])->name('admin.teacher.detail');
Route::get('/admin/teacher/edit', [AdminController::class, 'edit_teacher'])->name('admin.teacher.edit');

// teacher Route
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
Route::get('/teacher/profile', [TeacherController::class, 'profile'])->name('teacher.profile');
Route::get('/teacher/setting', [TeacherController::class, 'setting'])->name('teacher.setting');
Route::get('/teacher/presence', [TeacherController::class, 'presence'])->name('teacher.presence');
Route::get('/teacher/add-presence', [TeacherController::class, 'add_presence'])->name('teacher.add.presence');
Route::get('/teacher/grade', [TeacherController::class, 'grade'])->name('teacher.grade');
Route::get('/teacher/add-grade', [TeacherController::class, 'add_grade'])->name('teacher.add.grade');
Route::get('/teacher/edit-grade', [TeacherController::class, 'edit_grade'])->name('teacher.edit.grade');
Route::get('/teacher/student', [TeacherController::class, 'student'])->name('teacher.student');
Route::get('/teacher/student/detail', [TeacherController::class, 'detail_student'])->name('teacher.student.detail');

// student Route
Route::get('/', [StudentController::class, 'index'])->name('student');
Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
Route::get('/setting', [StudentController::class, 'setting'])->name('student.setting');
Route::get('/subject', [StudentController::class, 'subject'])->name('student.subject');
Route::get('/detail', [StudentController::class, 'detail_subject'])->name('student.detail');
Route::get('/graphics', [StudentController::class, 'graphics'])->name('student.graphics');
Route::get('/presence', [StudentController::class, 'presence'])->name('student.presence');
