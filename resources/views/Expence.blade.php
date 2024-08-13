<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Expense</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Project <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label"> Invoice
                                    <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Paid On <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Amount <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Currency
                                    <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Exchange Rate  <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Transaction Id<span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Payment Gateway
                                    <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="employee_name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Bank Account <span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="Email" required>
                                </div>
                            </div>
                            </div>
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" id="profile_picture"
                                    name="profile_picture" accept="image/*">
                            </div>
                            <div class="col-sm-12">
                                <div class="input-block mb-2">
                                    <label class="col-form-label">Remark</label>
                                    <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
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
</x-app-layout>
