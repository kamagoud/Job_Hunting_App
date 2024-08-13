<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">

                @switch(Auth::user()->role)
                    @case('*')

                        @break
                    @case(1)

                        @break
                    @default

                @endswitch

                <x-sidebar.title name='Home' />

                <x-sidebar.submenu name="Dashboard" icon="star" :links="[
                    'Admin-Dashboard' => 'dashboard',
                    'Employee-Dashboard' => 'dashboard',
                ]" />

                <x-sidebar.submenu name="HR" icon="la la-users" :links="[
                    'Employees' =>'Employee',
                    'EmployeeRole' => 'EmployeeRole',
                    'Leaves' => 'leavesdis',
                    'Attendance' => 'Attendance',
                    'Holiday' => 'Holidays',
                    'Designation' =>'designation',
                    'Department' =>'department',
                    'Appreciation' => 'displyApp',


                ]" />
                 <x-sidebar.submenu name="Work" icon="la la-cubes"  :links="[
                    'Contract' => 'Contracts',
                    'Project' => 'Projects',
                    'Task' => 'Tasks',
                    'Time Sheet' => 'TimeSheet',
                ]" />

                <x-sidebar.submenu name="PayRoll" icon="la la-money-bill-wave"  :links="[
                    'Employee Salary' => 'EmployeeSalary',
                    'Payslip' => 'LeavesType',
                    'Payroll Items' => 'SalarySetting',
                ]" />


                <x-sidebar.link :link="'clients'" name="Clients" icon="la la-users" />
                <x-sidebar.link :link="'Tickets'" name="Tickets" icon="la la-ticket" />
                   <x-sidebar.link :link="'NoticeBoard'" name="Notice Board" icon="la la-files-o" />



                <x-sidebar.link :link="'Event'" name="Events" icon="la la-files-o" />
                <x-sidebar.link :link="'Message'" name="Messages" icon="la la-edit" />

                <x-sidebar.submenu name="Reports" icon="la la-money-bill-wave"  :links="[
                    'Task Report' => 'TaskReport',
                    'Time Log Report' => 'TimeLogReport',
                    'Leaves Report' => 'LeavesReport',
                    'Attendence Report' => 'AttendanceReport',
                ]" />
                  {{-- <x-sidebar.link :link="'Setting'" name="Settings" icon="la la-cog" /> --}}

                  <x-sidebar.submenu name="Settings" icon="la la-cog"  :links="[
                    // 'Company Settings' => 'CompanySettings',
                    'Leave-Type' => 'LeavesType',
                    'Holiday-Type' => 'Holiday',
                    'Applied-Leave' => 'appliedLeaves',
                    'Salary Settings' => 'SalarySetting',
                ]" />
                    <x-sidebar.submenu name="Finance" icon="la la-cog"  :links="[
                    'Expense'=> 'Expense',

                                                    ]" />


            </ul>
        </div>
    </div>
</div>
