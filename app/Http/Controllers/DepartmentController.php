<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = department::all();

        return view('department.index', compact('departments'));
    }

    public function create()
    {
        return view('department.add');
    }



    public function store(Request $request)
    {
        $request->validate([
            'DepartmentName' => 'required',

        ]);

        $department = new department();
        $department->DepartmentName = $request->input('DepartmentName');
        $department->save();

        flash()->success('Success', 'department has been created successfully!');
        return redirect()->route('departments.index');
    }

    public function update(ScheduleEmp $request, Schedule $schedule)
    {
        $request['time_in'] = str_split($request->time_in, 5)[0];
        $request['time_out'] = str_split($request->time_out, 5)[0];

        $request->validated();

        $schedule->slug = $request->slug;
        $schedule->time_in = $request->time_in;
        $schedule->time_out = $request->time_out;
        $schedule->save();
        flash()->success('Success','Schedule has been Updated successfully !');
        return redirect()->route('schedule.index');


    }
    
}
