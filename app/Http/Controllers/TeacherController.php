<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Grade;
use App\Models\Attendance;
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
        // $presences = Attendance::where
        return view('teacher.presence');
    }

    public function add_presence()
    {
        $students = Student::where('class_id', '2301')->get();
        return view('teacher.add-presence', ['students' => $students]);
    }

    public function store_presence(Request $request)
    {
        $attendances = $request->input('attendance');
        $fulltime = $request->fulltime;
        $date = $request->date;
        $class_id = '2301';

        foreach ($attendances as $index => $attendance)
        {
            $attend = new Attendance();
            $attend->student_id = $index;
            $attend->attend = $fulltime - $attendance;
            $attend->date = $date;
            $attend->class_id = $class_id;
            $attend->save();
        }
        return redirect('/teacher/presence');
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
