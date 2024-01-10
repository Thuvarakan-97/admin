@extends('layouts.master')

@section('css')

@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title text-left">Attendance</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Attendance</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Attendance List</a></li>
        </ol>
    </div>
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
                            <th data-priority="2">Time In</th>
                            <th data-priority="3">Time Out</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($LabTimes as $LabTime)
                            <tr>
                                <td>
                                    @if ($LabTime->fingerprintID === 'NET-01' || $LabTime->RFID === 'NET-01')
                                        thuva
                                    @elseif ($LabTime->fingerprintID === 'NET-02' || $LabTime->RFID === 'NET-02')
                                        ram
                                    @elseif ($LabTime->fingerprintID === 'NET-03' || $LabTime->RFID === 'NET-03')
                                        silva
                                    @elseif ($LabTime->fingerprintID === 'SOF-01' || $LabTime->RFID === 'SOF-01')
                                        perara
                                    @elseif ($LabTime->fingerprintID === 'SOF-02' || $LabTime->RFID === 'SOF-02')
                                        muhamed
                                    @elseif ($LabTime->fingerprintID === 'SOF-03' || $LabTime->RFID === 'SOF-03')
                                        fathima
                                    @elseif ($LabTime->fingerprintID === 'MMW-01' || $LabTime->RFID === 'MMW-01')
                                        janu
                                    @elseif ($LabTime->fingerprintID === 'MMW-02' || $LabTime->RFID === 'MMW-02')
                                        mala
                                    @endif
                                </td>
                                <td>
                                    @if ($LabTime->fingerprintID === null)
                                        {{$LabTime->created_at}}
                                    @endif
                                </td>
                                <td>
                                    @if ($LabTime->RFID === null)
                                        {{$LabTime->created_at}}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection
