<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Teacher;
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

    // all Controller for Student

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

    // all Controller for Teacher

    public function teacher()
    {
        $teacher = Teacher::all();
        return view('admin.teacher.teacher', ['teachers' => $teacher]);
    }

    public function add_teacher()
    {
        // $allClasses = Classes::all();
        // $classes = $allClasses->whereNull('teacher_id');
        return view('admin.teacher.add');
    }

    public function store_teacher(Request $request)
    {
        $teacher = new Teacher();
        $teacher->teacher_id = $request->teacher_id;
        $teacher->name = $request->name;
        $teacher->gender = $request->gender;
        $teacher->subject = $request->subject;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->save();

        // if ($request->class != null)
        // {
        //     $class = Classes::find($request->class);
        //     $class->update([
        //         'teacher_id'=>$request->teacher_id,
        //     ]);
        // }

        return redirect('admin/teacher');
    }

    public function detail_teacher($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.teacher.detail', ['teacher' => $teacher]);
    }

    public function edit_teacher($id)
    {
        $teacher = Teacher::find($id);

        // $classes = Classes::where('teacher_id', $teacher->teacher_id)->orWhereNull('teacher_id')->get(['class_id', 'name', 'teacher_id']);

        return view('admin.teacher.edit',  ['teacher' => $teacher]);
    }

    public function update_teacher(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        // if ($request->class)
        // {
        //     $class = Classes::find($request->class);
        //     $class->update([
        //         'teacher_id'=>$request->teacher_id,
        //     ]);
        // }

        $teacher->update($request->all());

        return redirect('admin/teacher');

    }

    public function delete_teacher($id)
    {
        $teacher = Teacher::find($id);
        // $class = Classes::where('teacher_id', $teacher->teacher_id)->first();

        // if ($class)
        // {
        //     // $id_class = Classes::find($class->class_id);
        //     $class->update([
        //         'teacher_id'=>null,
        //     ]);
        // }

        $teacher->delete();

        return redirect('admin/teacher');
    }

    // all Controller for Class

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
