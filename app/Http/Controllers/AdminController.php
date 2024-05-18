<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function class()
    {
        return view('admin.class.class');
    }

    public function message()
    {
        return view('admin.message');
    }

    public function student()
    {
        return view('admin.student.student');
    }

    public function detail_student()
    {
        return view('admin.student.detail');
    }
    public function edit_student()
    {
        return view('admin.student.edit');
    }

    public function teacher()
    {
        return view('admin.teacher.teacher');
    }

    public function detail_teacher()
    {
        return view('admin.teacher.detail');
    }

    public function edit_teacher()
    {
        return view('admin.teacher.edit');
    }
}
