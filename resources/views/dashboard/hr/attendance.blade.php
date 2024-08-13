<x-app-layout>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        table {
            width: 100%;
            border-collapse: collapse; /* Ensures borders don't collapse into each other */
        }
        th, td {
            border: 1px solid #ddd; /* Adds a border around cells */
            padding: 10px; /* Adds space inside each cell */
            text-align: center; /* Centers text in cells */
        }
        th {
            background-color: #f4f4f4; /* Light grey background for header cells */
        }
        th[colspan] {
            text-align: center; /* Centers text for the header spanning multiple columns */
        }
    </style>

    <!-- Table -->
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="{{ count($dates) + 1 }}">
                                {{ \Carbon\Carbon::now()->format('F Y') }}
                            </th>
                        </tr>
                        <tr>
                            <th>Employee</th>
                            @foreach ($dates as $date)
                                @php
                                    $dayOfWeek = \Carbon\Carbon::parse($date)->format('D'); // e.g., Mon, Tue
                                    $dayOfMonth = \Carbon\Carbon::parse($date)->day; // e.g., 1, 2
                                @endphp
                                <th>
                                    {{ $dayOfWeek }}<br>
                                    {{ $dayOfMonth }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $userId => $userAttendances)
                            @php
                                $user = $userAttendances->first()->user;
                                $attendanceDates = $userAttendances->pluck('created_at')->map(function ($date) {
                                    return \Carbon\Carbon::parse($date)->format('Y-m-d');
                                })->unique();
                            @endphp
                            <tr>
                                <td>{{ $user->name }}</td>
                                @foreach ($dates as $date)
                                    @php
                                        $currentDate = \Carbon\Carbon::parse($date)->format('Y-m-d');
                                    @endphp
                                    <td>
                                        @if ($attendanceDates->contains($currentDate))
                                            <a href="#" class="attendance-link"
                                               data-user-id="{{ $user->id }}"
                                               data-date="{{ $currentDate }}">
                                                <i class="fa fa-check text-success"></i>
                                            </a>
                                        {{-- @elseif (!$attendanceDates->contains(\Carbon\Carbon::parse($date)->subDay()->format('Y-m-d')))
                                            <i class="fa fa-close text-danger"></i> --}}
                                        @else
                                            <i class="ti-line-dashed"></i>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Attendance Modal -->
    <div class="modal custom-modal fade" id="attendance_info" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attendance Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card punch-status">
                                <div class="card-body">
                                    <h5 class="card-title">Timesheet <small class="text-muted" id="modal-timesheet-date"></small></h5>
                                    <div class="punch-det">
                                        <h6>Punch In at</h6>
                                        <p id="modal-punch-in"></p>
                                    </div>
                                    <div class="punch-info">
                                        <div class="punch-hours">
                                            <span id="modal-punch-hours"></span>
                                        </div>
                                    </div>
                                    <div class="punch-det">
                                        <h6>Punch Out at</h6>
                                        <p id="modal-punch-out"></p>
                                    </div>
                                    <div class="statistics">
                                        <div class="row">
                                            <div class="col-md-6 col-6 text-center">
                                                <div class="stats-box">
                                                    <p>Break</p>
                                                    <h6 id="modal-break-time"></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6 text-center">
                                                <div class="stats-box">
                                                    <p>Overtime</p>
                                                    <h6 id="modal-overtime"></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card recent-activity">
                                <div class="card-body">
                                    <h5 class="card-title">Activity</h5>
                                    <ul class="res-activity-list">
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="fa-regular fa-clock"></i>
                                                10.00 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="fa-regular fa-clock"></i>
                                                11.00 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="fa-regular fa-clock"></i>
                                                11.15 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="fa-regular fa-clock"></i>
                                                1.30 PM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="fa-regular fa-clock"></i>
                                                2.00 PM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="fa-regular fa-clock"></i>
                                                7.30 PM.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include JavaScript libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.attendance-link').forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default link behavior

            var userId = this.getAttribute('data-user-id');
            var date = this.getAttribute('data-date');

            fetch('/attendanceInfo', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN':"{{ csrf_token() }}"
                },
                body: JSON.stringify({ user_id: userId, date: date })
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => {
                        throw new Error(text);
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('Fetched data:', data); // Debugging output

                // Populate modal with data
                document.getElementById('modal-timesheet-date').textContent = data.date;
                document.getElementById('modal-punch-in').textContent = data.punch_in; // Handle null values
                document.getElementById('modal-punch-out').textContent = data.punch_out; // Handle null values

                // Populate activity list
                var activityList = document.querySelector('.res-activity-list');
                activityList.innerHTML = ''; // Clear previous activities

                data.activities.forEach(function(activity) {
                    var listItem = document.createElement('li');
                    listItem.innerHTML = `
                        <p class="mb-0">${activity.type} at</p>
                        <p class="res-activity-time">
                            <i class="fa-regular fa-clock"></i>
                            ${activity.time}
                        </p>
                    `;
                    activityList.appendChild(listItem);
                });

                // Initialize and show the modal
                var myModal = new bootstrap.Modal(document.getElementById('attendance_info'));
                myModal.show();
            })
            .catch(error => console.error('Error fetching attendance info:', error));
        });
    });
});


    </script>
</x-app-layout>
