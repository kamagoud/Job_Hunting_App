<x-app-layout>
    <form action="{{ route('storeHoliday') }}" method="post">
        @csrf
        <div class="row">
            <h4 class="card-title mb-0">Holidays</h4>
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="input-block mb-3">
                                    <label for="to_date" class="col-lg-3 col-form-label">Holiday Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="" name="holiday_name" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                      

                            <div class="col-lg-6">
                                <div class="input-block mb-3">
                                    <label for="to_date" class="col-lg-3 col-form-label">Holiday Date <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="to_date" name="holiday_date"
                                            class="form-control datetimepicker" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            {{-- <a href="{{ route('Holidays') }}" class="btn btn-secondary">Cancel</a> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="row">
        <div class="col-sm-12">

            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0"> Total Holidays</h4>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="datatable table table-stripped mb-0">
                            <thead>
                                <tr>
                                    <th>Holiday Name</th>
                                    <th>Holiday Date</th>
                                    <th>Day</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Holidays as $leave)
                                <tr>
                                    <td>{{ $leave->holiday_name }}</td>
                                    <td>{{ $leave->holiday_date }}</td>
                                    <td>{{ \Carbon\Carbon::parse($leave->holiday_date)->format('l') }}</td> <!-- Ensure holiday_date is a Carbon instance -->
                                    <td>{{ $leave->reason }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
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
