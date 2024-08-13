<x-app-layout>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Select Staff</label>
                                        <select id="leave_type" name="leave_type" class="form-select" required>
                                            <option value="">Select Staff</option>
                                            {{-- @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->leaves }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-form-label">Net Salary</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="text-primary">Earnings</h4>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Basic</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">DA(40%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">HRA(15%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Conveyance</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Allowance</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Medical Allowance</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Others</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="add-more">
                                        <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="text-primary">Deductions</h4>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">TDS</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">ESI</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">PF</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Leave</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Prof. Tax</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Labour Welfare</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Others</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="add-more">
                                        <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>



</x-app-layout>
