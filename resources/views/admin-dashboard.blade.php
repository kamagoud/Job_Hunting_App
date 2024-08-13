<x-app-layout>
    @section('content')
    <form action="{{ route('storeAttendance') }}" method="POST" id="clock-form">
        @csrf
        <div class="row">
            <div class="col-xxl-8 col-lg-12 col-md-12">
                <div class="row">

                    <!-- Employee Details -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Clock In Clock Out</h4>
                                </div>
                                <div class="clock-in-info">
                                    <div class="clock-in-content">
                                        <h4 id="work-time" style="font-size: 2rem; font-weight: bold;">
                                            <!-- Check if user is clocked in -->
                                            @if ($isClockedIn)
                                                <!-- Display system time if user is clocked in -->
                                                @php
                                                    $currentTime = now(); // Get current system time
                                                    $currentHours = $currentTime->format('H');
                                                    $currentMinutes = $currentTime->format('i');
                                                @endphp

                                                {{ $currentHours }} Hr:{{ $currentMinutes }} Min
                                            @else
                                                <!-- Display clock-in time if user is not clocked in -->
                                                @php
                                                    $createdAt = $clockTime->created_at;
                                                    $hours = $createdAt->format('H');
                                                    $minutes = $createdAt->format('i');
                                                @endphp
                                                <h3>Clock In At</h3>
                                                {{ $hours }} Hr:{{ $minutes }} Min
                                            @endif
                                        </h4>
                                    </div>
                                    <div class="clock-in-btn">
                                            @if (auth()->user()->attendances)
                                                <a href="{{route('storeAttendance')}}" class="btn btn-primary">
                                                    <img src="{{ URL::asset('assets/img/icons/clock-in.svg') }}" alt="Icon">
                                                    Clock-In
                                                </a>
                                            @else
                                                <a href="{{route('storeAttendance')}}" class="btn btn-danger">
                                                    <img src="{{ URL::asset('assets/img/icons/clock-in.svg') }}" alt="Icon">
                                                    Clock-Out
                                                </a>
                                            @endif
                                    </div>
                                </div>

                                <div class="clock-in-list">
                                    <ul class="nav">
                                        @if ($isClockedIn)
                                        <li>
                                            <p>Total Time:</p>
                                            <h6 id="total-time">{{ $remainingHours }} Hr:{{ $remainingMinutes }} Min</h6>
                                        </li>
                                    @else
                                        <li>
                                            <p>Remaining Time:</p>
                                            <h6 id="remaining-time">{{ $remainingHours }} Hr:{{ $remainingMinutes }} Min</h6>
                                        </li>
                                    @endif
                                        <li>
                                            <p>Working Time:</p>
                                            <h6 id="working-time">0 Hrs 0 Min</h6>
                                        </li>
                                        <li>
                                            <p>Total Time:</p>
                                            <h6 id="total-time">9 Hrs 0 Min</h6>
                                        </li>
                                    </ul>
                                </div>

                                <div class="view-attendance">
                                    <a href="{{ route('Attendance') }}">
                                        View Attendance <i class="fe fe-arrow-right-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card employee-welcome-card flex-fill">
                            <div class="card-body">
                                <div class="welcome-info">
                                    <div class="welcome-content">
                                        <h4>Welcome Back, {{ $user->name }}</h4>
                                    </div>
                                    <div class="welcome-img">
                                        <img src="{{ asset('assets/img/avatar/avatar-19.jpg') }}" class="img-fluid" alt="User">
                                    </div>
                                </div>
                                <div class="welcome-btn">
                                    <a href="{{ route('profile.show') }}" class="btn">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Employee Details -->

                    <!-- Attendance & Leaves -->
                    <div class="col-lg-6 col-md-14">
                        <div class="card flex-fill" style="padding-bottom: 03%">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Leaves</h4>
                                </div>
                                <div class="attendance-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-primary">12</h4>
                                                <p>Total Leaves</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-pink">{{$leaves}}</h4>
                                                <p>Leaves Taken</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-success">{{12-$leaves}}</h4>
                                                <p>Remaining Leaves</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-purple">{{$counts}}</h4>
                                                <p>Pending Approval</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-info">214</h4>
                                                <p>Working Days</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-danger">2</h4>
                                                <p>Loss of Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-attendance">
                                    <a href="{{ route('leaves') }}">
                                        Apply Leave <i class="fe fe-arrow-right-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card info-card flex-fill" style="padding-bottom: 05%">
                            <div class="card-body">
                                <h4>Upcoming Holidays</h4>
                                <div class="holiday-details">
                                    <div class="holiday-calendar">
                                        <div class="holiday-calendar-icon">
                                            <img src="{{ URL::asset('assets/img/icons/holiday-calendar.svg') }}"
                                                alt="Icon">
                                        </div>
                                        <div class="holiday-calendar-content">
                                            <h6>Ramzan</h6>
                                            <p>Mon 20 May 2024</p>
                                        </div>
                                    </div>
                                    <div class="holiday-btn">
                                        <a href="{{ route('Holidays') }}" class="btn">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Attendance & Leaves -->

                </div>
            </div>

            <!-- Employee Notifications -->
            <div class="col-xxl-4 col-lg-12 col-md-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="statistic-header">
                            <h4>Important</h4>
                            <div class="important-notification">
                                <a href="{{ url('activities') }}">
                                    View All <i class="fe fe-arrow-right-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Employee Notifications -->

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <div class="statistic-header">
                                    <h4>On Going Projects</h4>
                                </div>
                            </div>
                            <div class="col-sm-4 text-sm-end">
                                <div class="owl-nav project-nav nav-control"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Employee Month -->
            <div class="col-xl-6 col-md-12 d-flex">
                <div class="card employee-month-card flex-fill">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-12">
                                <div class="employee-month-details">
                                    <h4>Employee of the month</h4>
                                    <p>We are really proud of the difference you have made which gives everybody the reason
                                        to
                                        applaud & appreciate</p>
                                </div>
                                <div class="employee-month-content">
                                    <h6>Congrats, Hanna</h6>
                                    <p>UI/UX Team Lead</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="employee-month-img">
                                    <img src="{{ URL::asset('assets/img/employee-img.png') }}" class="img-fluid"
                                        alt="User">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Employee Month -->

            <!-- Company Policy -->
            <div class="col-xl-6 col-md-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <div class="statistic-header">
                                    <h4>Company Policy</h4>
                                </div>
                            </div>
                            <div class="col-sm-4 text-sm-end">
                                <div class="owl-nav company-nav nav-control"></div>
                            </div>
                        </div>
                        <div class="company-slider owl-carousel">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var startTime = null;
            var totalWorkedMilliseconds = 0;
            var totalRemainingMilliseconds = 9 * 60 * 60 * 1000; // 9 hours in milliseconds

            // Function to format time as "HH:MM:SS"
            function formatTime(date) {
                return date.getHours().toString().padStart(2, '0') + ':' +
                    date.getMinutes().toString().padStart(2, '0') + ':' +
                    date.getSeconds().toString().padStart(2, '0');
            }

            // Update remaining time display
            function updateRemainingTimeDisplay() {
                var remainingHours = Math.floor(totalRemainingMilliseconds / (1000 * 60 * 60));
                var remainingMinutes = Math.floor((totalRemainingMilliseconds % (1000 * 60 * 60)) / (1000 * 60));
                $("#remaining-time").text(remainingHours + " Hrs " + remainingMinutes + " Min");
            }

            // Handle clock-in form submission
            $("#clock-in-form").submit(function(e) {
                e.preventDefault(); // Prevent the default form submit

                // Submit the form via AJAX
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // On success, update UI and toggle buttons
                        console.log(response); // Log the response for debugging

                        var currentTime = new Date();
                        $("#work-time").text("Clocked in at " + formatTime(currentTime));
                        $(".clock-in-btn").hide();
                        $(".clock-out-btn").show();

                        startTime = currentTime; // Set the start time to current time

                        // Optionally, update remaining time display
                        updateRemainingTimeDisplay();
                    },
                    error: function(error) {
                        console.error('Error:', error);
                        // Handle error if needed
                    }
                });
            });

            // Handle clock-out button click
            $(document).on('click', '#clock-out-btn', function() {
                // Only proceed if already clocked in
                if (startTime) {
                    var endTime = new Date(); // Get current time for clock-out

                    // Calculate elapsed time
                    var elapsedMilliseconds = endTime - startTime;
                    totalWorkedMilliseconds += elapsedMilliseconds;
                    totalRemainingMilliseconds -= elapsedMilliseconds;

                    // Calculate hours and minutes
                    var workedHours = Math.floor(totalWorkedMilliseconds / (1000 * 60 * 60));
                    var workedMinutes = Math.floor((totalWorkedMilliseconds % (1000 * 60 * 60)) / (1000 * 60));

                    // Update UI
                    $("#work-time").text("Clocked out at " + formatTime(endTime));
                    $("#total-time").text((workedHours + Math.floor(totalRemainingMilliseconds / (1000 * 60 * 60))) + " Hrs " + (workedMinutes + Math.floor((totalRemainingMilliseconds % (1000 * 60 * 60)) / (1000 * 60))) + " Min");

                    startTime = null; // Reset start time

                    // Toggle button visibility
                    $(".clock-out-btn").hide();
                    $(".clock-in-btn").show();
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</x-app-layout>
<style>

.large-time {
    font-size: 2rem; /* Adjust the font-size as needed */
    font-weight: bold; /* Optional: make the text bold */
    margin: 0; /* Optional: remove default margin */
}
</style>
