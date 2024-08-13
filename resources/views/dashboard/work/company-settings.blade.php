<x-app-layout>
 <form action="{{route('storeCompany') }}" method="POST" >
    @csrf
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Company Settings</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Company Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="" name='company_name'>
                            </div>
                        </div>

                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" value="" type="email" name='company_email'>
                                </div>
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Address</label>
                                <input class="form-control " name='address' value=""
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Country</label>
                                <select class="form-control select"  name='country'>
                                    <option>USA</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">City</label>
                                <input class="form-control" value="" type="text" name='city'>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">State/Province</label>
                                <select class="form-control select" name='state'>
                                    <option>California</option>
                                    <option>Alaska</option>
                                    <option>Alabama</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Postal Code</label>
                                <input class="form-control" value="" type="text" name='postal_code'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Mobile Number</label>
                                <input class="form-control" value="" type="text" name='mobile_number'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Phone Number</label>
                                <input class="form-control" value="" type="text" name='phone_number'>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Mobile Number</label>
                                <input class="form-control" value="818-635-5579" type="text" name='mobile_number'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Website Url</label>
                                <input class="form-control" value="https://www.example.com" type="text" name='web_site'>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Website Url</label>
                                <input class="form-control" value="" type="text" name='web_site'>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>

 </form>
</x-app-layout>
