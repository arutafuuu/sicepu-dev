<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index');
    }

    public function profile()
    {
        return view('teacher.profile');
    }

    public function setting()
    {
        return view('teacher.setting');
    }
}
