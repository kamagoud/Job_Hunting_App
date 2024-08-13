<x-app-layout>
    <form action="{{ route('storeRole') }}" method="post">
        @csrf
        <div class="row">
            <h4 class="card-title mb-0">Employee Role</h4>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 row">
                                    <label for="employee_type" class="col-lg-3 col-form-label">Employee Role <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="employee_type" name="employee_role"
                                            class="form-control" required>
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
                    <h4 class="card-title mb-0">Display Employee Role</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($type as $index => $type)
                                    <tr id="type_{{ $type->id }}">
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <span id="employee_type_{{ $type->id }}" class="editable"
                                                data-id="{{ $type->id }}" data-name="{{ $type->employee_role }}"
                                                onclick="editType(this)">{{ $type->employee_role }}</span>
                                            <input type="text" id="input_employee_type_{{ $type->id }}"
                                                class="form-control" style="display: none;">
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"
                                                onclick="editType(this.parentElement.previousElementSibling.querySelector('.editable'))"><i
                                                    class="fe fe-edit-3"></i> Edit</button>
                                            <button class="btn btn-success btn-sm" style="display: none;"
                                                id="updateBtn_{{ $type->id }}"
                                                onclick="updateType({{ $type->id }})"><i class="fe fe-save"></i>
                                                Update</button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="deleteType({{ $type->id }})"><i class="fe fe-trash-2"></i>
                                                Delete</button>
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
        // Function to enable inline editing of employee type
        function editType(element) {
            let typeId = element.getAttribute('data-id');
            let employeeTypeSpan = document.getElementById(`employee_type_${typeId}`);
            let employeeTypeInput = document.getElementById(`input_employee_type_${typeId}`);
            let updateBtn = document.getElementById(`updateBtn_${typeId}`);

            employeeTypeSpan.style.display = 'none';
            employeeTypeInput.style.display = 'inline-block';
            employeeTypeInput.value = employeeTypeSpan.innerText;
            updateBtn.style.display = 'inline-block';
        }

        // Function to handle updating of employee type
        function updateType(id) {
            let employeeTypeInput = document.getElementById(`input_employee_type_${id}`).value;

            fetch(`{{ route('updateRole', ['id' => ':id']) }}`.replace(':id', id), {
                    method: 'POST', // Use POST method to update
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        employee_role: employeeTypeInput
                    })
                })
                .then(response => {
                    if (response.ok) {
                        // Update the displayed employee type
                        document.getElementById(`employee_type_${id}`).innerText = employeeTypeInput;

                        // Hide the input field and update button
                        document.getElementById(`input_employee_type_${id}`).style.display = 'none';
                        document.getElementById(`updateBtn_${id}`).style.display = 'none';

                        // Reload the page after a short delay (100ms)
                        setTimeout(() => {
                            location.reload();
                        }, 100);
                    } else {
                        throw new Error('Failed to update employee type. Server responded with ' + response.status);
                    }
                })

        }

        function deleteType(id) {
            fetch(`{{ route('deleteRoles', ['id' => ':id']) }}`.replace(':id', id), {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        // Remove the row from the table
                        document.getElementById(`type_${id}`).remove();
                    } else {
                        throw new Error('Failed to delete employee type. Server responded with ' + response.status);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to delete employee type. Please try again.');
                });
        }
    </script>
</x-app-layout>
