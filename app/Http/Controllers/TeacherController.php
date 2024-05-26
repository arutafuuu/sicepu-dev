<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
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

    public function presence()
    {
        return view('teacher.presence');
    }

    public function add_presence()
    {
        return view('teacher.add-presence');
    }

    public function grade()
    {
        return view('teacher.grade');
    }

    public function add_grade()
    {
        return view('teacher.add-grade');
    }

    public function edit_grade()
    {
        return view('teacher.edit-grade');
    }

    public function student()
    {
        return view('teacher.student');
    }

    public function detail_student()
    {
        return view('teacher.detail-student');
    }

}
