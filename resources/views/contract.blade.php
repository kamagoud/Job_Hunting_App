

<x-app-layout>
    <!-- In your Blade template -->


    <form method="POST" action="{{ route('employeesStore') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Basic Inputs</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Contract Number <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="employee_name" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Subject</label>
                                    <input class="form-control" type="text" name="employee_id">
                                </div>
                            </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block mb-6">
                                    <label class="col-form-label">Project</label>
                                    <select class="form-control">
                                        <option>-- Select --</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Contract Type</label>
                                    <input class="form-control" type="text" name="contract_type">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Description</label>
                                <input class="form-control" type="text" name="employee_role">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Start Date</label>
                                    <input type="text" id="date" class="form-control">
                                    <span class="form-text text-muted">dd/mm/yyyy</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">End Date</label>
                                    <input type="text" id="date" class="form-control">
                                    <span class="form-text text-muted">dd/mm/yyyy</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block mb-6">
                                    <label class="col-form-label">Contract Value</label>
                                    <input class="form-control" type="text" name="contract_type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Currency</label>
                                    <input class="form-control" type="text" name="contract_type">
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Client Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Client <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="employee_name" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Cell</label>
                                    <input class="form-control" type="text" name="employee_id">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Office Number</label>
                                    <input class="form-control" type="text" name="employee_id">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">City <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="employee_name" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">State</label>
                                    <input class="form-control" type="text" name="employee_id">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Country</label>
                                    <input class="form-control" type="text" name="employee_id">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Notice Period End Date <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="employee_name" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Subject</label>
                                    <select class="form-control" name="employment_type">
                                        <option>Full-time</option>
                                        <option>Part-time</option>
                                        <option>Contract</option>
                                        <option>Internship</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Marital</label>
                                    <select class="form-control" name="marital_status">
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                        <option>Widowed</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-6">
                                    <label class="col-form-label">Business Address <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="employee_name" required>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>

                </form>
</x-app-layout>

