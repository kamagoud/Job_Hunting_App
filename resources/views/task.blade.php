<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add Task</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Task Category</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Select Category</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Project</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Select Project</option>

                                </select>
                            </div>
                        </div>
                        </div>



                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_birth">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Due Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_joining">
                                </div>

                            </div>

                        </div>
                        <div class="input-block mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                    required>
                                <label class="form-check-label" for="invalidCheck">
                                  Without Due Date
                                </label>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Assign To <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="input-block mb-2">
                                <label class="col-form-label">Description</label>
                                <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                            </div>
                        </div>
                </div>
                
            </div>
            </div>
</x-app-layout>
