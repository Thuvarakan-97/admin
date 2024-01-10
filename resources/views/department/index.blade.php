@extends('layouts.master')

@section('css')
   
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title text-left">Departments</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Departments</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Departments List</a></li>
    </ol>
</div>
@endsection

@section('button')
    <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add New Department</a>
@endsection

@section('content')
    @include('includes.flash')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-dark">
                            <tr>

                                <th data-priority="1">Name</th>
                                <th data-priority="4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->DepartmentName }}</td>
                                <td>

                                    {{-- <a href="{{ route('students.view', $student->id) }}" class="btn btn-info btn-sm view btn-flat"><i class='fa fa-eye'></i></a> --}}

                                    <a href="" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i></a>
                                    <a href="" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- @foreach( $students as $student)
        @include('student.edit')
    @endforeach --}}

    @include('department.add')

@endsection

@section('script')

@endsection
