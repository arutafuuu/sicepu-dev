<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function message()
    {
        return view('admin.message');
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function student()
    {
        return view('admin.student.student');
    }

    public function add_student()
    {
        return view('admin.student.add');
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

    public function add_teacher()
    {
        return view('admin.teacher.add');
    }

    public function detail_teacher()
    {
        return view('admin.teacher.detail');
    }

    public function edit_teacher()
    {
        return view('admin.teacher.edit');
    }

    public function class()
    {
        return view('admin.class.class');
    }

    public function add_class()
    {
        return view('admin.class.add');
    }

    public function edit_class()
    {
        return view('admin.class.edit');
    }
}
