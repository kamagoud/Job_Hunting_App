<x-app-layout pageTitle="Applied-Leave" title="AppliedLeave">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0"> Applied-Leaves </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0" id="leavesTable">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Leave Type</th>
                                    <th>Leave Date</th>
                                    <th>Duration</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leaves as $leave)
                                <tr data-id="{{ $leave->id }}">
                                    <td>{{ $leave->name }}</td>
                                    <td>{{ $leave->leave_type }}</td>
                                    <td>{{ $leave->date }}</td>
                                    <td>{{ $leave->duration }}</td>
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
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-white btn-sm btn-rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="#" onclick="handleAction('{{ route('updateStatus', ['id' => $leave->id]) }}', 'Approved', {{ $leave->id }})">Approve</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="handleAction('{{ route('updateStatus', ['id' => $leave->id]) }}', 'Rejected', {{ $leave->id }})">Reject</a></li>
                                            </ul>
                                        </div>
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

    <style>
        #dropZone {
            border: 2px dashed #007bff;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }
    </style>

<script>
    $(document).ready(function() {
        $('#leavesTable').DataTable();
    });

    function handleAction(url, action, id) {
        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                action: action,
                id: id
            },
            success: function(response) {
                console.log('Data updated successfully:', response);
                updateUI(id, action);
            },
            error: function(xhr, status, error) {
                console.error('Error updating data:', error);
            }
        });
    }

    function updateUI(id, action) {
        var statusCell = $('#leavesTable').find('tr[data-id="' + id + '"] td.status');

        if (action === 'Approved') {
            statusCell.text('Approved');
        } else if (action === 'Rejected') {
            statusCell.text('Rejected');
        }
    }
</script>


    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

</x-app-layout>
