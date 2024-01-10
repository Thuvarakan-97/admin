<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-header">
            <h5 class="modal-title"><b>Add New Student</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>


            <div class="modal-body">
			<!-- Log on to codeastro.com for more projects! -->

                <div class="card-body text-left">

                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="StudentName">Name <i>{without any space}</i></label>
                            <input type="text" class="form-control" placeholder="Student Name" id="StudentName" name="StudentName"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="contact_no">contact_no <i>{without any space}</i></label>
                            <input type="text" class="form-control" placeholder="Enter contact_no " id="contact_no" name="contact_no"
                                required />
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        {{-- <div class="form-group">
                            <label for="departmentID">Department</label>
                            <select class="form-control" id="departmentID" name="departmentID" required>
                                <option value="" selected>- Select Department -</option>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->DepartmentName}}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <div class="col-12 col-md-12" >
                                <div class="">
                                    <label class="form-label">Department<span class="text-danger">*</span></label>
                                    <select class="form-control searchable-dropdown @error('depertmentID') is-invalid @enderror" data-ats-onselect="depertmentSelect">
                                        <option value="">Select Department</option>
                                        @foreach ($alldepartment as $item)
                                            <option value="{{$item->id}}">{{$item->DepartmentName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('depertmentID') <span class="text-danger text-bold">{{ $message }}</span>@enderror
                        </div> --}}







                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>

    </div>
</div>
</div>
