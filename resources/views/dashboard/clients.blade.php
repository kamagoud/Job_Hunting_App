<x-app-layout>
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Account Details</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Client Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="employee_name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture"
                            accept="image/*">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input class="form-control" type="password" id="password" name="password" required>
                                <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                    <i class="fa fa-eye"></i> <!-- Using Font Awesome for the eye icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Country <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="employee_name" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Mobile <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="employee_name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Language<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="Email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Client Category <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="Email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Client Sub Category <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="Email" required>
                            </div>
                        </div>
                    </div>
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



                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Company Details</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Company Name<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Official Website<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Tax Name <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">GST/VAT Number<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Office Phone Number<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">City<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">State <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Postal code<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="employee_name" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Added By <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="Email" required>
                                </div>
                            </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-2">
                                    <label class="col-form-label">Company Address</label>
                                    <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-2">
                                    <label class="col-form-label">Shipping Address</label>
                                    <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-block mb-2">
                                    <label class="col-form-label">Note</label>
                                    <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Company Logo</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture"
                                    accept="image/*">
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
    </div>
    <br>
    <br>
    <br>

    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Employee Details</h4>
            </div>

        </div>
    </div>


</x-app-layout>
<script src="{{ URL::asset('/assets/plugins/fileupload/fileupload.min.js') }}"></script>
<script>
    document.getElementById('profilePictureInput').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            // Validate file size (e.g., less than 1MB)
            if (file.size > 1048576) { // 1MB
                alert('File size must be less than 1MB.');
                this.value = ''; // Clear the file input
            } else {
                // Preview the image
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.custom-file-container__image-preview').style.backgroundImage =
                        `url(${e.target.result})`;
                };
                reader.readAsDataURL(file);
            }
        }
    });
</script>
