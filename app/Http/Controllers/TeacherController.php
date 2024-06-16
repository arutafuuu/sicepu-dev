<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Grade;
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

    // all presence
    public function presence()
    {
        return view('teacher.presence');
    }

    public function add_presence()
    {
        return view('teacher.add-presence');
    }

    // all grade
    public function grade()
    {
        $subjects = Subject::all();
        return view('teacher.grade', ['subjects' => $subjects]);
    }

    public function add_grade()
    {
        $students = Student::where('class_id', '2301')->get();
        return view('teacher.add-grade', ['students' => $students]);
    }

    public function edit_grade()
    {
        $students = Student::where('class_id', '2301')->get();
        return view('teacher.edit-grade', ['students' => $students]);
    }

    // all student
    public function student()
    {
        $students = Student::where('class_id', '2301')->get();
        // foreach ($students as $student) echo $student . PHP_EOL;
        return view('teacher.student', ['students' => $students]);
    }

    public function detail_student($id)
    {
        $student = Student::find($id);
        return view('teacher.detail-student', ['student' => $student]);
    }

}
