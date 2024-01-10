<?php

namespace App\Http\Controllers;
use App\Models\LabTime;

use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function index()
    {
        $LabTimes = LabTime::all();

        return view('Attendance.index', compact('LabTimes'));
    }
}
