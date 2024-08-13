<x-app-layout>
    <div class="row">
        <div class="col-xl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h4 class="card-title mb-0">Tickets</h4>
                </div>
                <div class="card-body">
                    <form id="noticeForm">
                        <div class="input-block mb-3 row">
                            {{-- <label class="col-lg-3 col-form-label">Gender</label> --}}
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recipient" id="gender_male" value="employee" checked onclick="toggleDepartment()">
                                    <label class="form-check-label" for="gender_male">
                                        Client
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recipient" id="gender_female" value="client" onclick="toggleDepartment()">
                                    <label class="form-check-label" for="gender_female">
                                        Employee
                                    </label>
                                </div>

                                <div class="row">

                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Request Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Assign Group<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-block mb-6">
                                <label class="col-form-label">Agent<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Project<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
