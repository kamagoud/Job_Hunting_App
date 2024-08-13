<x-app-layout>
    <form action="{{ route('storeLeavesType') }}" method="post">
        @csrf
        <div class="row">
            <h4 class="card-title mb-0">Leaves Type</h4>
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="input-block mb-3">
                                    <label for="to_date" class="col-lg-3 col-form-label">Leaves Type<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="" name="Leaves" class="form-control"
                                           >
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <div class="input-block mb-3">
                                    <label for="to_date" class="col-lg-3 col-form-label">Leaves Duration<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="" name="duration" class="form-control"
                                            >
                                    </div>
                                </div>
                            </div> --}}
                        </div>


                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('Holidays') }}" class="btn btn-secondary">Cancel</a>

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
                    <h4 class="card-title mb-0">Leaves Type</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="datatable table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Leaves Type</th>
                                    {{-- <th>Leaves Duration</th> --}}
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($type as $key => $type)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $type->leaves }}</td>
                                    {{-- <td>{{ $type->duration }}</td> --}}
                                    {{-- <td>{{ $type->reason }}</td> --}}
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
