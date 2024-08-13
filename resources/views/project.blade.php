<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Employees Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Project Code <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Project Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_birth">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Dead Line</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_birth">
                                </div>
                            </div>
                        </div>

                        <div class="input-block mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                    required>
                                <label class="form-check-label" for="invalidCheck">
                                    There is no project dead line
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Project Category</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select Category</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select Department</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Client</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select Client</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-2">
                                <label class="col-form-label">Project Summary</label>
                                <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-block mb-2">
                                <label class="col-form-label">Notes</label>
                                <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Public Gantt Chart Section -->
                        <div class="col-lg-6">
                            <label class="form-check-label" for="gantt_enabled">
                                Public Gantt Chart
                            </label>
                            <br><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gantt_chart" id="gantt_enabled"
                                    value="enabled" checked>
                                <label class="form-check-label" for="gantt_enabled">
                                    Enabled
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gantt_chart"
                                    id="gantt_disabled" value="disabled">
                                <label class="form-check-label" for="gantt_disabled">
                                    Disabled
                                </label>
                            </div>
                        </div>
                        <!-- Public Task Board Section -->
                        <div class="col-lg-6">
                            <label class="form-check-label" for="taskboard_enabled">
                                Public Task Board
                            </label>
                            <br><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="task_board"
                                    id="taskboard_enabled" value="enabled" checked>
                                <label class="form-check-label" for="taskboard_enabled">
                                    Enabled
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="task_board"
                                    id="taskboard_disabled" value="disabled">
                                <label class="form-check-label" for="taskboard_disabled">
                                    Disabled
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="input-block mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="createPublicProject" onclick="toggleProjectMember()">
                                    <label class="form-check-label" for="createPublicProject">
                                        Create Public Project
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4" id="projectMemberSection">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Add Project Member</label>
                                    <select class="form-control" name="gender">
                                        <option value="">------</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-xl-12 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header" onclick="toggleDetails()" style="cursor: pointer;" >

                                        <h4 class="card-title mb-0">Company Details</h4>
                                        <i class="fa fa-chevron "></i>

                                    </div>
                                    <div id="companyDetails" class="card-body hidden">
                                        <div class="mb-3">
                                            <label for="profile_picture" class="form-label">Add File</label>
                                            <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="currency" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Project Budget <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="project_budget" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">House Estimate <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="house_estimate" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="allowManualTimeLog">
                                                    <label class="form-check-label" for="allowManualTimeLog">
                                                        Allow Manual Time Log
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sendTaskNotification">
                                                    <label class="form-check-label" for="sendTaskNotification">
                                                        Send Task Notification to Client
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="enableMicroboard" onclick="toggleMiroBoardID()">
                                                            <label class="form-check-label" for="enableMicroboard">
                                                                Enable Microboard
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div id="miroBoardIDField" class="input-block mb-3 hidden">
                                                            <label class="col-form-label">Miro Board ID</label>
                                                            <input class="form-control" type="text" name="miro_board_id" placeholder="Enter Miro Board ID">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="submit" class="btn btn-primary">Cancel</button>

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
<script>
    function toggleDetails() {
    var details = document.getElementById("companyDetails");
    if (details.classList.contains("hidden")) {
        details.classList.remove("hidden");
    } else {
        details.classList.add("hidden");
    }
}
function toggleMiroBoardID() {
    var checkBox = document.getElementById("enableMicroboard");
    var miroBoardIDField = document.getElementById("miroBoardIDField");
    if (checkBox.checked) {
        miroBoardIDField.classList.remove("hidden");
    } else {
        miroBoardIDField.classList.add("hidden");
    }
}

</script>
