<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Time Log Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Project</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Select Project</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Task</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Select Task</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Employee</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Select Employee</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_birth">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Min Start Time <span class="text-danger">*</span></label>
                                <div class="input-group time">
                                    <input class="form-control timepicker"><span class="input-group-text"><i
                                            class="fa-regular fa-clock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_birth">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">End Time <span class="text-danger">*</span></label>
                                <div class="input-group time">
                                    <input class="form-control timepicker"><span class="input-group-text"><i
                                            class="fa-regular fa-clock"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Memo <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>


                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Save</button>
                    </div>
                </div>
            </div>
</x-app-layout>
