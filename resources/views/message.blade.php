
<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Time Log Details</h4>
                </div>
                <div class="card-body">

                        <div class="col-md-12">
                            <div class="input-block mb-6">
                                <label class="col-form-label">Choose Member</label>
                                <select class="form-control" name="country">
                                    <option value="">--</option>
                                    <option value="USA">USA</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-block mb-2">
                                <label class="col-form-label">Message</label>
                                <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter address"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Add File</label>
                                    <input class="form-control" type="file" name="profile_picture" accept="image/*">
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
