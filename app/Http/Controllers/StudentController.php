<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\department;




class StudentController extends Controller
{
    public $alldepartment = [];

    public function mount()
    {
        $this->alldepartment = department::all();
    }

    public function index()
    {
        $students = Student::leftJoin('department', 'student.departmentID', '=', 'department.id')
            ->select('student.*', 'department.DepartmentName as department_name')
            ->get();

        return view('student.index', compact('students'));
    }


    public function show(Student $student)
    {
        $student = Student::leftJoin('department', 'student.departmentID', '=', 'department.id')
            ->select('student.*', 'department.DepartmentName as department_name')
            ->get();
        return view('student.view', compact('student'));
    }



    public function create()
    {
        $departments = department::all();
        return view('student.add', compact('departments'));

    }





    public function store(Request $request)
    {
        $request->validate([
            'StudentName' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required',
            'departmentID' => 'required',
        ]);

        $student = new Student();
        $student->StudentName = $request->input('StudentName');
        $student->email = $request->input('email');
        $student->contact_no = $request->input('contact_no');
        $student->departmentID = $request->input('departmentID');
        $student->save();




        flash()->success('Success', 'Student has been created successfully!');
        return redirect()->route('students.index');
    }

    public function destroy(Student $students)
    {
        $students->delete();
        flash()->success('Success', 'students Record has been Deleted successfully !');
        return redirect()->route('students.index')->with('success');
    }
}
