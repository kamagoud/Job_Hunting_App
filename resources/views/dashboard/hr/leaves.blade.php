<x-app-layout>
    <form action="{{route('storeLeaves')}}" method="POST" >
        @csrf
        <div class="row">
            <h4 class="card-title mb-3"> New Leave</h4>
            <div class="col-lg-12">
                <div class="card">

                    <h4 class="card-title mb-3" style="text-align: center; color: red;">
                        Every month should have only one leave
                    </h4>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                            <label class="col-form-label"> Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name"  value="{{$user->name}}" >
                        </div>
                    </div>

                      {{-- <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                    <label for="leave_type" class="col-lg-6 col-form-label">Leave Type<span class="text-danger">*</span></label>
                                    {{-- <div class="col-lg-9"> --}}
                                        {{-- <select id="leave_type" name="leave_type" class="form-select" required>
                                            <option value="">Select Leave Type</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->leaves }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}

                                <div class="col-md-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Leave Type</label>

                                <select id="leave_type" name="leave_type" class="form-select" required>
                                    <option value="">Select Leave Type</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->leaves }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label for="to_date" class="col-lg-3 col-form-label">Date <span class="text-danger">*</span></label>

                                        <input type="text" id="to_date" name="date" class="form-control datetimepicker" required>
                                    </div>
                                </div>



                                    {{-- <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Duration</label>

                                     <label for="duration" class="col-lg-6 col-form-label">Duration <span class="text-danger"></span></label>
                                    <div class="col-lg-9">
                                        <select id="duration" name="duration" class="form-select" required>

                                            @foreach ($Leaves as $Leaves)
                                            <option value="{{ $Leaves->id }}">{{ $Leaves->duration }}</option>
                                        @endforeach
                                        </select>
                                    </div> --}}
                                </div>
                            {{-- </div> --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3 row">
                                    <label class="col-form-label col-md-5">File Input</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label">Reason for absence  <span class="text-danger">*</span></label>
                                    <textarea rows="2" name="reason" class="form-control" placeholder="Enter Reason"></textarea>
                                </div>
                            </div>
                            {{-- <div class="container mt-5">
                                <label>Add File</label>
                                <div id="dropZone" class="border rounded"  type = "file">

                                    <input type="file" id="" name="file" class="form-control" >
                                </div>
                                <div id="fileList" class="mt-3">
                                    <!-- Files will be listed here -->
                                </div>
                            </div> --}}

                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('leavesdis') }}" class="btn btn-secondary">Cancel</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
<style>
    #dropZone {
        border: 2px dashed #007bff;
        padding: 20px;
        text-align: center;
        cursor: pointer;
    }
    </style>
