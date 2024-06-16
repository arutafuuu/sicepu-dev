<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        $studentsCount = Student::count();
        $teachersCount = Teacher::count();
        $messagesCount = Message::count();
        return view('admin.index', [
            'studentsCount' => $studentsCount,
            'teachersCount' => $teachersCount,
            'messagesCount' => $messagesCount
        ]);
    }

    public function message()
    {
        $messages = Message::all();
        return view('admin.message', ['messages' => $messages]);
    }

    public function done_message($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect('/admin/message');
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
        // $classes = Classes::all();
        $students = Student::all();
        $classes = [];

        foreach ($students as $i => $student)
        {
            $class = Classes::find($student->class_id);
            $name = "BELUM DITETAPKAN";
            if ($class)
            {
                $name = $class->name;
            }
            $classes[$i] = $name;
        }

        return view('admin.student.student', ['students' => $students, 'classes' => $classes]);
    }

    public function add_student()
    {
        $classes = Classes::all();
        return view('admin.student.add', ['classes' => $classes]);
    }

    public function store_student(Request $request)
    {
        $student = new Student();
        $student->student_id = $request->student_id;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->class_id = $request->class;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->parent_name = $request->parent;
        $student->parent_email = $request->par_email;
        $student->parent_phone = $request->par_phone;

        $student->save();
        return redirect('admin/student');
    }

    public function detail_student($id)
    {
        $student = Student::find($id);
        $class_name = "BELUM DITETAPKAN";

        if ($student->class_id) {
            $class = Classes::find($student->class_id);
            $class_name = $class->name;
        }

        return view('admin.student.detail', ['student' => $student, 'class' => $class_name]);
    }

    public function edit_student($id)
    {
        $student = Student::find($id);
        $classes = Classes::all();
        return view('admin.student.edit', ['student' => $student, 'classes' => $classes]);
    }

    public function update_student(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('admin/student');
    }

    public function delete_student($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('admin/student');
    }

    // all Controller for Teacher

    public function teacher()
    {
        $teacher = Teacher::all();
        return view('admin.teacher.teacher', ['teachers' => $teacher]);
    }

    public function add_teacher()
    {
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

        return view('admin.teacher.edit',  ['teacher' => $teacher]);
    }

    public function update_teacher(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        $teacher->update($request->all());

        return redirect('admin/teacher');

    }

    public function delete_teacher($id)
    {
        $teacher = Teacher::find($id);
        $class = Classes::where('teacher_id', $teacher->teacher_id)->first();

        if ($class)
        {
            $class->update([
                'teacher_id'=>null,
            ]);
        }

        $teacher->delete();

        return redirect('admin/teacher');
    }

    // all Controller for Class

    public function class()
    {
        $classes = Classes::all();
        $teachers = [];

        foreach ($classes as $i => $class)
        {
            $teacher = Teacher::find($class->teacher_id);
            $name = "Tidak Ada";
            if ($teacher)
            {
                $name = $teacher->name;
            }
            $teachers[$i] = $name;
        }

        return view('admin.class.class', ['classes' => $classes, 'teachers' => $teachers]);
    }

    public function add_class()
    {
        $teachers = Teacher::all();
        $classes = Classes::all();

        $validate_teacher = [];
        foreach ($teachers as $teacher)
        {
            $found = false;

            foreach ($classes as $class)
            {
                if ($class->teacher_id == $teacher->teacher_id)
                {
                    $found = true;
                    break;
                }
            }

            if (!$found)
            {
                $validate_teacher[] = $teacher;
            }
        }

        return view('admin.class.add', ['teachers' => $validate_teacher]);
    }


    public function store_class(Request $request)
    {
        $class = new Classes();
        $class->class_id = $request->class_id;
        $class->name = $request->name;
        $class->teacher_id = $request->teacher;
        $class->save();

        return redirect('admin/class');
    }

    public function edit_class($id)
    {
        $teachers = Teacher::all();
        $classes = Classes::all();
        $class_choose = Classes::find($id);

        $validate_teacher = [];
        foreach ($teachers as $teacher)
        {
            $found = false;

            foreach ($classes as $class)
            {

                if ($class->teacher_id == $teacher->teacher_id)
                {
                    $found = true;

                    if ($class->class_id == $id) $found = false;

                    break;
                }

            }

            if (!$found)
            {
                $validate_teacher[] = $teacher;
            }
        }

        return view('admin.class.edit', ['class' => $class_choose, 'teachers' => $validate_teacher]);
    }

    public function update_class(Request $request, $id)
    {
        $class = Classes::find($id);
        $class->update($request->all());
        return redirect('admin/class');
    }

    public function delete_class($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return redirect('admin/class');
    }

    // all subject
    public function subject()
    {
        $subjects = Subject::all();
        return view('admin.subject.subject', ['subjects' => $subjects]);
    }

    public function add_subject()
    {
        return view('admin.subject.add');
    }

    public function store_subject(Request $request)
    {
        $subject = new Subject();
        $subject->subject_id =$request->subject_id;
        $subject->name =$request->name;
        $subject->save();
        return redirect('/admin/subject');
    }

    public function edit_subject($id)
    {
        $subject = Subject::find($id);
        return view('admin.subject.edit', ['subject' => $subject]);
    }

    public function update_subject(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->update($request->all());
        return redirect('/admin/subject');
    }

    public function destroy_subject($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/admin/subject');
    }
}
