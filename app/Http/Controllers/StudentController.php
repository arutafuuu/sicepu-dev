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

    public function subject()
    {
        return view('student.subject');
    }

    public function detail_subject()
    {
        return view('student.detail');
    }

    public function graphics()
    {
        return view('student.graphics');
    }

    public function presence()
    {
        return view('student.presence');
    }
}