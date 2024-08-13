<x-app-layout>
    <form id="designationForm" action="{{ route('storedesignations') }}" method="post">
        @csrf
        <input type="hidden" id="designation_id" name="designation_id">

        <div class="row">
            <h4 class="card-title mb-0">Designation</h4>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 row">
                                    <label for="designation_name" class="col-lg-3 col-form-label">Designation Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="designation_name" name="designation_name" class="form-control" required>
                                        <input type="hidden" id="designation_id" name="designation_id">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                            <button type="button" class="btn btn-secondary" id="cancelBtn" style="display: none;">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Display Designations</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Designation Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($designations as $index => $designation)
                                <tr id="designation_{{ $designation->id }}">
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <span id="designation_name_span_{{ $designation->id }}">{{ $designation->designation_name }}</span>
                                        <input type="text" class="form-control" id="designation_name_input_{{ $designation->id }}" style="display: none;">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" onclick="editDesignation({{ $designation->id }})"><i class="fe fe-edit-3"></i> Edit</button>
                                        <button class="btn btn-success btn-sm" style="display: none;" id="updateBtn_{{ $designation->id }}" onclick="updateDesignation({{ $designation->id }})"><i class="fe fe-save"></i>Update</button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteDesignation({{ $designation->id }})"><i class="fe fe-trash-2"></i> Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        function editDesignation(id) {
            let designationNameSpan = document.getElementById(`designation_name_span_${id}`);
            let designationNameInput = document.getElementById(`designation_name_input_${id}`);
            let updateBtn = document.getElementById(`updateBtn_${id}`);

            designationNameSpan.style.display = 'none';
            designationNameInput.style.display = 'block';
            designationNameInput.value = designationNameSpan.innerText;
            updateBtn.style.display = 'inline-block';

            // Set the form values for submission
            document.getElementById('designation_name').value = designationNameInput.value;
            document.getElementById('designation_id').value = id;
        }

        function updateDesignation(id) {
    let designationNameInput = document.getElementById(`designation_name_input_${id}`).value;

    fetch(`{{ route('update-designation', ['id' => ':id']) }}`.replace(':id', id), {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ designation_name: designationNameInput })
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Failed to update designation. Server responded with ' + response.status);
        }
    })
    .then(data => {
        console.log('Designation updated successfully:', data.message);
        document.getElementById(`designation_name_span_${id}`).innerText = designationNameInput;
        document.getElementById(`designation_name_input_${id}`).style.display = 'none';
        document.getElementById(`updateBtn_${id}`).style.display = 'none';

        // Reload the page after a short delay (optional)
        setTimeout(() => {
            location.reload();
        }, 100); // Reload after 1 second (1000 milliseconds)
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to update designation. Please try again.');
    });
}


        function deleteDesignation(id) {
            {
                fetch("{{ route('deletedesignation') }}", {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': `{{ csrf_token() }}`
                    },
                    body: JSON.stringify({ ids: [id] })
                })
                .then(response => {
                    if (response.ok) {
                        document.getElementById(`designation_${id}`).remove();
                    } else {
                        alert('Failed to delete designation. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to delete designation. Please try again.');
                });
            }
        }
    </script>
</x-app-layout>
