<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Event</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Event Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="control-label col-form-label">Label Color</label>
                                <select class="select form-control">
                                    <option>Choose Color</option>
                                    <option>Danger</option>
                                    <option>Success</option>
                                    <option>Purple</option>
                                    <option>Primary</option>
                                    <option>Pink</option>
                                    <option>Info</option>
                                    <option>Inverse</option>
                                    <option>Orange</option>
                                    <option>Brown</option>
                                    <option>Teal</option>
                                    <option>Warning</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Where <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="4"></textarea>
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
                                    <label class="col-form-label">Min Start Time <span
                                            class="text-danger">*</span></label>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-block mb-6">
                                        <label class="col-form-label">Select Employee</label>
                                        <select class="form-control" name="country">
                                            <option value="">Select Employee</option>
                                            <option value="USA">USA</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-6">
                                        <label class="col-form-label">Select Client</label>
                                        <select class="form-control" name="country">
                                            <option value="">Select Client</option>
                                            <option value="USA">USA</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-6">
                                            <label class="col-form-label">Host</label>
                                            <select class="form-control" name="country">
                                                <option value="">Select Host</option>
                                                <option value="USA">USA</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-6">
                                            <label class="col-form-label">Status</label>
                                            <select class="form-control" name="country">
                                                <option value="">Pending</option>
                                                <option value="USA">Complated</option>
                                                <option value="United Kingdom">Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-block mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Repeat
                                                </label>

                                            </div>
                                        </div>
                                        <div class="input-block mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                   Send Remindar
                                                </label>

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
        </div>
</x-app-layout>
