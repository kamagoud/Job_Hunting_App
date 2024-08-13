<x-app-layout pageTitle="Holiday" title="Holiday">

    <div class="d-flex title-head">


        <a href="{{route('designation')}}" class="btn btn-primary" ><i
                class="la la-plus-circle"></i>Add Designation</a>
    </div>

<div class="row">
    <div class="col-sm-12">

        <div class="card mb-0">
            <div class="card-header">
                <h4 class="card-title mb-0"> Designation</h4>

            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="datatable table table-stripped mb-0">
                        <thead>
                            <tr>
                                <th>Designation Name</th>
                                {{-- <th>Holiday Date</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($designation as $designation)
                            <tr>
                                <td>{{ $designation->designation_name }}</td>
                                {{-- <td>{{ $designation->holiday_date }}</td> --}}

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
