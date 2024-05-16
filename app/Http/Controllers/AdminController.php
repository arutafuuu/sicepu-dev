<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function manage()
    {
        return view('admin.admin');
    }

    public function message()
    {
        return view('admin.message');
    }

    public function student()
    {
        return view('admin.student.student');
    }

    public function teacher()
    {
        return view('admin.teacher.teacher');
    }
}
