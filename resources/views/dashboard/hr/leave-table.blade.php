<x-app-layout pageTitle="Leave" title="Leave">

        <div class="d-flex title-head">


            <a href="{{route('leaves')}}" class="btn btn-primary" ><i
                    class="la la-plus-circle"></i> New Leave</a>
        </div>

        <br>
    <div class="row">

        <div class="col-sm-12">

            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0"> Total Leaves </h4>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="datatable table table-stripped mb-0">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Leave Type</th>
                                    <th>Leave Date</th>
                                    {{-- <th>Duration</th> --}}
                                    <th>Reason</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leaves as $leave)
                                <tr>
                                    <td>{{ $leave->name }}</td>
                                    <td>{{ $leave->leave_type }}</td>
                                    <td>{{ $leave->date }}</td>
                                    {{-- <td>{{ $leave->duration }}</td> --}}
                                    <td>{{ $leave->reason }}</td>
                                    <td>
                                        @if($leave->status == 0)
                                            Pending
                                        @elseif($leave->status == 1)
                                            Rejected
                                        @elseif($leave->status == 2)
                                            Approved
                                        @else
                                            {{ $leave->status }}
                                        @endif
                                    </td>
                                    <td></td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #dropZone {
            border: 2px dashed #007bff;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }
    </style>

    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
</x-app-layout>
