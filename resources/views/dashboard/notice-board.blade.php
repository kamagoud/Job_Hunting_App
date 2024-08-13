<x-app-layout>
    <div class="row">
        <div class="col-xl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h4 class="card-title mb-0">Notice Board</h4>
                </div>

                <div class="card-body">
                    <form id="noticeForm">
                        <div class="input-block mb-3 row">
                            {{-- <label class="col-lg-3 col-form-label">Gender</label> --}}
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recipient" id="gender_male" value="employee" checked onclick="toggleDepartment()">
                                    <label class="form-check-label" for="gender_male">
                                        To Employee
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recipient" id="gender_female" value="client" onclick="toggleDepartment()">
                                    <label class="form-check-label" for="gender_female">
                                        To Clients
                                    </label>
                                </div>
                                <br><br>
                                <div class="row">
                                <div  id="departmentField" style="display: none;">
                                    <div class="col-sm-4">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Department</label>
                                            <input class="form-control" type="text" name="department" placeholder="Enter Department">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row"> --}}
                                    <div class="col-sm-10">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Notice Handling <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required placeholder="eg, New year Celebrations at office">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-10">
                                    <div class="input-block mb-2">
                                        <label class="col-form-label">Notice Details</label>
                                        <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter Description"></textarea>
                                    </div>
                                </div>

                                <div class="text-md-start">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function toggleDepartment() {
        var departmentField = document.getElementById('departmentField');
        var employeeRadio = document.getElementById('gender_male');
        if (employeeRadio.checked) {
            departmentField.style.display = 'block';
        } else {
            departmentField.style.display = 'none';
        }
    }
</script>
