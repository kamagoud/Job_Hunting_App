<div class="profile-basic">
    <div class="row">
        @php
            $user = auth()->user();
            $detail = $user->userDetail;
        @endphp
        <div class="col-md-5">
            <div class="profile-info-left">
                <h3 class="user-name m-t-0 mb-0">{{ $user->name }}</h3>
                <h6 class="text-muted">...</h6>
                <small class="text-muted">{{  $detail->designation }}</small>
                <div class="staff-id">Employee ID : {{  $detail->empid }}</div>
                <div class="small doj text-muted">Date of Join : {{ $detail->doj }}</div>
            </div>
        </div>
        <div class="col-md-7">
            <ul class="personal-info">
                <li>
                    <div class="title">Phone:</div>
                    <div class="text"><a href="#">{{ $detail->phone }}</a></div>
                </li>
                <li>
                    <div class="title">Email:</div>
                    <div class="text"><a href="#">{{ $user->email }}</a></div>
                </li>
                <li>
                    <div class="title">Birthday:</div>
                    <div class="text">{{ $detail->dob }}</div>
                </li>
                <li>
                    <div class="title">Address:</div>
                    <div class="text">{{ $detail->address }}</div>
                </li>
                <li>
                    <div class="title">Gender:</div>
                    <div class="text">{{ $detail->gender }}</div>
                </li>
            </ul>
        </div>
    </div>
</div>