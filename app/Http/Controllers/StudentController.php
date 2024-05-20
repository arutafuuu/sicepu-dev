<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function profile()
    {
        return view('student.profile');
    }

    public function setting()
    {
        return view('student.setting');
    }
}
