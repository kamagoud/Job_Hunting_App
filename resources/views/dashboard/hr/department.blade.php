<x-app-layout>
    <form action="{{ route('storedepartment') }}" method="post">
        @csrf
        <div class="row">
            <h4 class="card-title mb-0">Departments</h4>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 row">
                                    <label for="department_name" class="col-lg-3 col-form-label">Department Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="department_name" name="department_name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
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
                    <h4 class="card-title mb-0">Display Departments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departments as $index => $department)
                                <tr id="department_{{ $department->id }}">
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <span id="department_name_{{ $department->id }}" class="editable" data-id="{{ $department->id }}" data-name="{{ $department->department_name }}" onclick="editDepartment(this)">{{ $department->department_name }}</span>
                                        <input type="text" id="input_department_name_{{ $department->id }}" class="form-control" style="display: none;">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" onclick="editDepartment(this.parentElement.previousElementSibling.querySelector('.editable'))"><i class="fe fe-edit-3"></i> Edit</button>
                                        <button class="btn btn-success btn-sm" style="display: none;" id="updateBtn_{{ $department->id }}" onclick="updateDepartment({{ $department->id }})"><i class="fe fe-save"></i>Update</button>

                                        <button class="btn btn-danger btn-sm" onclick="deleteDepartment({{ $department->id }})"><i class="fe fe-trash-2"></i> Delete</button>
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

    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        // Function to enable inline editing of department name
        function editDepartment(element) {
            let departmentId = element.getAttribute('data-id');
            let departmentNameSpan = document.getElementById(`department_name_${departmentId}`);
            let departmentNameInput = document.getElementById(`input_department_name_${departmentId}`);
            let updateBtn = document.getElementById(`updateBtn_${departmentId}`);

            departmentNameSpan.style.display = 'none';
            departmentNameInput.style.display = 'inline-block';
            departmentNameInput.value = departmentNameSpan.innerText;
            updateBtn.style.display = 'inline-block';
        }

        // Function to handle updating of department name
        function updateDepartment(id) {
            let departmentNameInput = document.getElementById(`input_department_name_${id}`).value;

            fetch(`{{ route('updatedepartment', ['id' => ':id']) }}`.replace(':id', id), {
                method: 'POST', // Use POST method to update
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ department_name: departmentNameInput })
            })
            .then(response => {
                if (response.ok) {
                    // Update the displayed department name
                    document.getElementById(`department_name_${id}`).innerText = departmentNameInput;

                    // Hide the input field and update button
                    document.getElementById(`input_department_name_${id}`).style.display = 'none';
                    document.getElementById(`updateBtn_${id}`).style.display = 'none';
                } else {
                    throw new Error('Failed to update department. Server responded with ' + response.status);
                }
                setTimeout(() => {
            location.reload();
        }, 100);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to update department. Please try again.');
            });
        }

        // Function to handle deletion of department

    </script>
</x-app-layout>
