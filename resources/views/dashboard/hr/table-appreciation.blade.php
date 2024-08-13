<x-app-layout>
    <div class="d-flex title-head">
        <a href="{{ route('Appreciation') }}" class="btn btn-primary">
            <i class="la la-plus-circle"></i> Appreciation
        </a>
    </div>
    <br>

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-0">
                <div >
                    <h4 class="card-title mb-0">Appreciation</h4>
                </div>
         
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th> <!-- Index column -->
                                    <th>Award Name</th>
                                    <th>Given To</th>
                                    <th>Date</th>
                                    <th>Summary</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php $index = 1 @endphp
                                @foreach($appreciation as $apprec)
                                <tr>
                                    <td>{{ $index++ }}</td> <!-- Incremental index -->
                                    <td>{{ $apprec->award }}</td>
                                    <td>{{ $apprec->given_to }}</td>
                                    <td>{{ $apprec->date }}</td>
                                    <td>{{ $apprec->summary }}</td>
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
