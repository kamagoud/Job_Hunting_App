<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Employees Details</h4>
                </div>

            <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Duration Start</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="date"
                                                name="date_of_birth">
                                        </div>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Duration End</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="date"
                                                name="date_of_birth">
                                        </div>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-4">
                                    <label class="col-form-label">Employee <span class="text-danger"></span></label>
                                    <input class="form-control" type="text" id="employee_id" name="employee_id"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-4">
                                    <label class="col-form-label">Project <span class="text-danger"></span></label>
                                    <input class="form-control" type="text" id="employee_id" name="employee_id"
                                        required>
                                </div>
                            </div>
                           <div class="col-sm-12">
                            <div class="input-block mb-5">
                                <label class="col-form-label"></label>
                                <textarea rows="5" cols="5" class="form-control" name="address" placeholder="- Not enough data -"></textarea>
                            </div>
                        </div>
        </div>
    </div>
    </div>


    <div class="form-sort">
        <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal"
            data-bs-target="#exportModal">
            <i class="las la-file-export"></i> Export
        </a>
    </div>



    <div class="row">
        <div class="col-sm-12">

            <div class="card mb-3">

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="datatable table table-stripped mb-0">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Tasks</th>
                                    <th>Employee</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Total Hour</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>


