@extends('layouts.master')

@section('css')
    <!-- Add your additional CSS here -->
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title text-left">Students</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Students</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Students List</a></li>
    </ol>
</div>
@endsection

@section('button')
    <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add New Student</a>
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
                                <th data-priority="2">Email</th>
                                <th data-priority="3">department</th>
                                <th data-priority="4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $students as $student)
                                <tr>
                                    <td>{{ $student->StudentName }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->department_ID }}</td>

                                    <td>
                                        <a href="#edit{{ $student->name }}" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i></a>
                                        <a href="#delete{{ $student->name }}" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach( $students as $student)
        @include('includes.edit_delete_student')
    @endforeach

    @include('includes.add_student')

@endsection

@section('script')
    <!-- Add your additional scripts here -->
@endsection
