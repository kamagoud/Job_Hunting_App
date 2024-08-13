<x-app-layout>
    <form method="POST" action="{{ route('employeesStore') }}" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-xl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h4 class="card-title mb-0">Employee Details</h4>
                </div>
                <div class="card-body">
                    <form id="noticeForm">
                        <div class="input-block mb-3 row">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="employee_name" class="form-label">Employee Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="employee_name" name="employee_name"
                                        value="ramkumr" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="email" class="form-label">Employee Email</label>
                                    <input type="email" class="form-control" name="email" autocomplete="off"
                                        value="ramakumar@gmail.com">
                                </div>

                                <div class="col-md-4">
                                    <label for="employee_id" class="form-label">Employee ID <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="employee_id" name="employee_id"
                                        value="6764">
                                </div>
                            </div>
                            <!-- Other fields like role, address, etc. -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="employee_role" class="form-label">Employee Role</label>
                                    <select class="form-select" id="employee_role" name="employee_role">
                                        <option value="">Select Employee Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->employee_role }}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="col-md-4">

                                    <label class="col-form-label">Country</label>
                                    <select class="form-control" name="country">
                                        <option>Select Country</option>
                                        @foreach ($country as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-4">

                                    <label class="col-form-label">State</label>
                                    <select class="form-control" name="state">
                                        <option>Select State</option>
                                        <option>Alaska</option>
                                        <option>Alabama</option>
                                        <!-- Add more states as needed -->
                                    </select>

                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="designation" class="form-label">Designation</label>
                                    <select id="designation" name="designation" class="form-select" required>
                                        <option>Select Designation</option>
                                        @foreach ($Designations as $type)
                                            <option value="{{ $type->id }}">{{ $type->designation_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="department" class="form-label">Department</label>
                                    <select id="department" name="department" class="form-select" required>
                                        <option>Select Department</option>
                                        @foreach ($Departments as $type)
                                            <option value="{{ $type->id }}">{{ $type->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="employment_type" class="form-label">Employment Type</label>
                                    <select id="employment_type" name="employment_type" class="form-select" required>
                                        <option value="">Select Employment Type</option>
                                        <option value="Full-time">Full-time</option>
                                        <option value="Part-time">Part-time</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Internship">Internship</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                                        value="7899121749">
                                </div>



                                <div class="col-md-4">
                                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                                </div>
                                <div class="col-md-4">
                                    <label for="date_of_joining" class="form-label">Date of Joining</label>
                                    <input type="date" class="form-control" id="date_of_joining"
                                        name="date_of_joining">
                                </div>
                            </div>



                            <div class="row mb-3">



                                <div class="col-md-4">
                                    <label class="form-label">Login Allowed?</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="login" value="1"> Yes
                                        </label>
                                        <label>
                                            <input type="checkbox" name="login" value="0"> No
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Receive email Notifications?</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="notification" value="1"> Yes
                                        </label>
                                        <label>
                                            <input type="checkbox" name="notification" value="0"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Profile Picture -->
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" id="profile_picture"
                                    name="profile_picture" accept="image/*">
                            </div>

                            <!-- Other details -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="language" class="form-label">Language</label>
                                    <input type="text" class="form-control" id="language" name="language"
                                        value="English">
                                </div>
                                <div class="col-md-4">
                                    <label for="marital_status" class="form-label">Marital Status</label>
                                    <select class="form-select" id="marital_status" name="marital_status">
                                        <option value="">Select Marital Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>


                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="probation_end_date" class="form-label">Probation End Date</label>
                                    <input type="date" class="form-control" id="probation_end_date"
                                        name="probation_end_date">
                                </div>

                                <div class="col-md-4">
                                    <label for="notice_period_start" class="form-label">Notice Period Start
                                        Date</label>
                                    <input type="date" class="form-control" id="notice_period_start"
                                        name="notice_period_start">
                                </div>

                                <div class="col-md-4">
                                    <label for="notice_period_end" class="form-label">Notice Period End Date</label>
                                    <input type="date" class="form-control" id="notice_period_end"
                                        name="notice_period_end">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="address" class="form-label"> Permanent Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                </div>

                                <div class="col-md-4">
                                    <label for="business_address" class="form-label">Business Address</label>
                                    <textarea class="form-control" id="business_address" name="business_address" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </form>
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
<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include DataTables scripts -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
