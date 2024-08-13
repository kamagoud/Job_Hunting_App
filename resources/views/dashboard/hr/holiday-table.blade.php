<x-app-layout pageTitle="Holiday" title="Holiday">

    <div class="d-flex title-head">


        <a href="{{route('Holiday')}}" class="btn btn-primary" ><i
                class="la la-plus-circle"></i> New Holiday</a>
    </div>
<br>
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
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Holidays as $leave)
                            <tr>
                                <td>{{ $leave->holiday_name }}</td>
                                <td>{{ $leave->holiday_date }}</td>
                                <td>{{ \Carbon\Carbon::parse($leave->holiday_date)->format('l') }}</td> <!-- Ensure holiday_date is a Carbon instance -->
                                {{-- <td>{{ $leave->reason }}</td> --}}
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
