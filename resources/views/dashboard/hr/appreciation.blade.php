<x-app-layout>
    <form action="{{ route('storeAppreciation') }}" method="POST">
        @csrf
        <div class="row">
            <h4 class="card-title mb-0">Appreciation</h4>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Award</label>
                                    <input class="form-control" type="text" name="award">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Given To <span class="text-danger">*</span></label>
                                    <select id="leave_type" name="given_to" class="form-select" required>
                                        <option value="">Select Employee</option>
                                        @foreach ($Employees as $type)
                                            <option value="{{ $type->id }}">{{ $type->employee_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Summary <span class="text-danger">*</span></label>
                                    <textarea rows="2" name="summary" class="form-control" placeholder="Enter Summary"></textarea>
                                </div>
                            </div>
                            <div class="container mt-5">
                                <label>Add File</label>
                                <div id="dropZone" class="border rounded">
                                    <input type="file" id="file" name="photo" class="form-control">
                                </div>
                                <div id="fileList" class="mt-3">
                                    <!-- Files will be listed here -->
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('displyApp') }}" class="btn btn-secondary">Cancel</a>
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
<script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
