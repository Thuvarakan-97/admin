<!-- resources/views/students/view.blade.php -->

@extends('layouts.master')

@section('css')
    <!-- Add your additional CSS here -->
@endsection

@section('content')
    <div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="viewStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewStudentModalLabel">View Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @forelse($student as $students)
                        <p><strong>Name:</strong> {{ $students->StudentName }}</p>
                        <p><strong>Email:</strong> {{ $students->email }}</p>
                        <p><strong>Department :</strong> {{ $students->department_name }}</p>
                        <p><strong>Contact No:</strong> {{ $students->contact_no }}</p>
                        <p><strong>RFID</strong> {{ $students->RFID }}</p>

                        <hr>
                    @empty
                        <p>No student details found.</p>
                    @endforelse
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Trigger button -->
    <button type="button" class="btn btn-info btn-sm view btn-flat" data-toggle="modal" data-target="#viewStudentModal">
        <i class='fa fa-eye'></i> View
    </button>
@endsection

@section('script')
    <!-- Add your additional scripts here -->
@endsection
