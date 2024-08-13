       <!-- jQuery -->
       <script src="{{ URL::asset('/assets/js/jquery-3.7.1.min.js') }}"></script>

       <!-- Bootstrap Core JS -->
       <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

       <!-- Slimscroll JS -->
       <script src="{{ URL::asset('/assets/js/jquery.slimscroll.min.js') }}"></script>

       @if (Route::is(['chat']))
           <script src="{{ URL::asset('/assets/js/dropfiles.js') }}"></script>
       @endif
       @if (Route::is([
               'applied-jobs',
               'approval-setting',
               'apptitude-result',
               'archived-jobs',
               'assets-details',
               'assets-new',
               'assets-reports',
               'assets1',
               'attance-reports',
               'attend-reports',
               'attendance-employee',
               'attendance-reports',
               'attendance',
               'calendar',
               'candidates',
               'clients-list',
               'clients',
               'compose',
               'create-estimate',
               'create-invoice',
               'daily-reports',
               'designations',
               'edit-estimate',
               'edit-invoice',
               'email-settings',
               'employee-reports',
               'employees-list',
               'employees',
               'estimates',
               'events',
               'expense-reports',
               'expenses',
               'experiance-level',
               'form-horizontal',
               'form-vertical',
               'goal-tracking',
               'goal-type',
               'interview-questions',
               'invoice-reports',
               'invoices',
               'job-applicants',
               'job-aptitude',
               'job-details',
               'job-list',
               'job-view',
               'jobs',
               'jobs-dashboard',
               'leave-reports',
               'leave-settings',
               'leaves-employee',
               'leaves',
               'localization',
               'manage-resumes',
               'offer_approvals',
               'offered-jobs',
               'overtime',
               'payments-reports',
               'payroll-items',
               'payslip-reports',
               'performance-appraisal',
               'performance-indicator',
               'performance',
               'policies',
               'profile',
               'project-list',
               'project-reports',
               'project-view',
               'projects',
               'promotion',
               'provident-fund',
               'questions',
               'resignation',
               'salary',
               'saved-jobs',
               'schedule-timing',
               'settings',
               'shift-list',
               'shift-scheduling',
               'shortlist-candidates',
               'sub-category',
               'subscribed-companies',
               'subscriptions',
               'task-board',
               'task-reports',
               'tasks',
               'taxes',
               'termination',
               'ticket-details',
               'tickets',
               'timesheet',
               'trainers',
               'training-type',
               'training',
               'user-all-jobs',
               'user-asset-details',
               'user-reports',
               'users',
               'visited-jobs',
               'client-profile',
               'search',
               'budget-expenses',
               'budget-revenues',
               'interviewing',
               'contact-details',
               'contact-grid',
               'contact-list',
               'deals-dashboard',
               'leads-dashboard',
               'analytics',
               'companies',
               'companies-grid',
               'leads-dashboard',
               'leads-details',
               'leads-kanban',
               'pipeline','leads','activities','company-details','deals','deals-details','deals-kanban'
           ]))
           <!-- Select2 JS -->
           <script src="{{ URL::asset('/assets/js/select2.min.js') }}"></script>
       @endif

       @if (Route::is([
               'apptitude-result',
               'assets-category',
               'assets-new',
               'assets-reports',
               'assets1',
               'attance-reports',
               'attendance-employee',
               'attendance',
               'budget-expenses',
               'budget-revenues',
               'budgets',
               'calendar',
               'candidates',
               'categories',
               'create-estimate',
               'create-invoice',
               'daily-reports',
               'edit-estimate',
               'edit-invoice',
               'employee-reports',
               'employees-list',
               'employees',
               'estimates',
               'events',
               'expense-reports',
               'expenses',
               'experiance-level',
               'goal-tracking',
               'holidays',
               'interview-questions',
               'invoice-reports',
               'invoices',
               'job-applicants',
               'job-details',
               'job-list',
               'job-view',
               'jobs',
               'jobs-dashboard',
               'leave-reports',
               'leave-settings',
               'leaves-employee',
               'leaves',
               'manage-resumes',
               'offer_approvals',
               'overtime',
               'payments-reports',
               'payroll-items',
               'performance-appraisal',
               'performance-indicator',
               'profile',
               'project-list',
               'project-view',
               'projects',
               'promotion',
               'resignation',
               'salary',
               'schedule-timing',
               'shift-list',
               'shift-scheduling',
               'shortlist-candidates',
               'sub-category',
               'subscribed-companies',
               'task-board',
               'tasks',
               'termination',
               'tickets',
               'timesheet',
               'training',
               'user-asset-details',
               'users',
               'client-profile',
               'search',
               'contact-details',
               'contact-grid',
               'contact-list',
               'leads-details',
               'leads-kanban',
               'pipeline','leads','activities',
               'company-details',
               'deals',
               'deals-details','deals-kanban','analytics','companies','companies-grid'
           ]))
           <!-- Datetimepicker JS -->
           <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
       @endif
       @if(Route::is(['contact-grid','contact-list','deals-dashboard','leads-dashboard','companies','companies-grid','company-details','deals','deals-details','deals-details','deals-kanban']))
		<!-- Daterangepikcer JS -->
		<script src="{{ URL::asset('/assets/js/moment.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
@endif
       @if (Route::is('leads-kanban','deals-kanban'))
           <!-- Drag Card -->
           <script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
       @endif
       @if (Route::is(['contact-grid', 'contact-list', 'leads-dashboard', 'leads-kanban', 'pipeline','leads','activities']))
           <!-- Daterangepikcer JS -->
           <script src="{{ URL::asset('assets/js/moment.min.js') }}"></script>
           <script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
       @endif
       @if (Route::is(['task-board']))
           <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/jquery.ui.touch-punch.min.js') }}"></script>
       @endif
       {{-- @if (Route::is(['form-validation']))
           <!-- Form Validation JS -->
           <script src="{{ URL::asset('/assets/js/form-validation.js') }}"></script>
       @endif --}}
       @if (Route::is(['tasks', 'project-view']))
           <!-- Task JS -->
           <script src="{{ URL::asset('/assets/js/task.js') }}"></script>
       @endif
       @if (Route::is(['questions']))
           <script>
               $('.next').click(function() {
                   var nextId = $(this).parents('.tab-pane').next().attr("id");
                   $('[href="#' + nextId + '"]').tab('show');
                   return false;
               })

               $('.first').click(function() {

                   $('#myWizard a:first').tab('show')

               });
           </script>
       @endif
       @if (Route::is(['ui-clipboard']))
           <!-- Clipboard JS -->
           <script src="{{ URL::asset('/assets/plugins/clipboard/clipboard.min.js') }}"></script>
       @endif
       @if (Route::is(['ui-drag-drop']))
           <!-- Dragula JS -->
           <script src="{{ URL::asset('assets/plugins/dragula/js/dragula.min.js') }}"></script>
           <script src="{{ URL::asset('assets/plugins/dragula/js/drag-drop.min.js') }}"></script>
           <script src="{{ URL::asset('assets/plugins/dragula/js/draggable-cards.js') }}"></script>
       @endif
       @if (Route::is(['ui-rating']))
           <!-- Raty JS -->
           <script src="{{ URL::asset('/assets/plugins/raty/jquery.raty.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/raty/custom.raty.js') }}"></script>
       @endif
       @if (Route::is(['ui-counter']))
           <!-- Stickynote JS -->
           <script src="{{ URL::asset('/assets/plugins/countup/jquery.counterup.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/countup/jquery.waypoints.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/countup/jquery.missofis-countdown.js') }}"></script>
       @endif
       @if (Route::is(['ui-text-editor', 'contact-details', 'leads-details','company-details','deals-details']))
           <!-- Summernote JS -->
           <script src="{{ URL::asset('/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
       @endif
       @if (Route::is(['ui-rangeslider']))
           <!-- Rangeslider JS -->
           <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
       @endif
       @if (Route::is(['form-mask']))
           <!-- Mask JS -->
           <script src="{{ URL::asset('/assets/js/jquery.maskedinput.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/mask.js') }}"></script>
       @endif
       @if (Route::is(['ui-sweetalerts']))
           <!-- Sweetalert 2 -->
           <script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>
       @endif
       @if (Route::is(['ui-scrollbar']))
           <!-- Plyr JS -->
           <script src="{{ URL::asset('/assets/plugins/scrollbar/scrollbar.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/scrollbar/custom-scroll.js') }}"></script>
       @endif
       @if (Route::is(['ui-notification']))
           <!-- Alertify JS -->
           <script src="{{ URL::asset('/assets/plugins/alertify/alertify.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/alertify/custom-alertify.min.js') }}"></script>
       @endif
       @if (Route::is(['ui-stickynote']))
           <!-- Stickynote JS -->
           <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/stickynote/sticky.js') }}"></script>
       @endif
       @if (Route::is(['horizontal-timeline']))
           <!-- Timeline JS -->
           <script src="{{ URL::asset('/assets/plugins/timeline/horizontal-timeline.js') }}"></script>
       @endif
       @if (Route::is(['ui-toasts']))
           <!-- Mask JS -->
           <script src="{{ URL::asset('/assets/plugins/toastr/toastr.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/toastr/toastr.js') }}"></script>
       @endif
       @if (Route::is(['chart-apex', 'employee-dashboard','deals-dashboard','leads-dashboard','analytics']))
       
           <!-- Apexchart JS -->
           <script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}"></script>
          
       @endif
       @if (Route::is(['chart-c3']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/c3-chart/d3.v5.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/c3-chart/c3.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/c3-chart/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['chart-flot']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.pie.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/flot/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['ui-lightbox']))
           <!-- lightbox JS -->
           <script src="{{ URL::asset('/assets/plugins/lightbox/glightbox.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/lightbox/lightbox.js') }}"></script>
       @endif
       @if (Route::is(['chart-js']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/chartjs/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['chart-morris']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/morris/raphael-min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/morris/morris.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/morris/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['analytics']))
       <!-- Chart JS -->
		<script src="{{ URL::asset('/assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ URL::asset('/assets/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/chart.js') }}"></script>
        @endif

       @if (Route::is(['chart-peity']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/peity/jquery.peity.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/peity/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['form-select2']))
           <!-- Select 2 -->
           <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/select2/js/custom-select.js') }}"></script>
       @endif
       @if (Route::is(['form-fileupload']))
           <!-- Fileupload JS -->
           <script src="{{ URL::asset('/assets/plugins/fileupload/fileupload.min.js') }}"></script>
       @endif
       @if (Route::is([
               'applied-jobs',
               'apptitude-result',
               'archived-jobs',
               'assets-category',
               'assets-details',
               'assets-new',
               'assets-reports',
               'assets1',
               'attance-reports',
               'attendance-reports',
               'candidates',
               'clients-list',
               'daily-reports',
               'data-tables',
               'departments',
               'designations',
               'employee-reports',
               'employees-list',
               'expense-reports',
               'expenses',
               'experiance-level',
               'goal-tracking',
               'goal-type',
               'interview-questions',
               'interviewing',
               'invoice-reports',
               'job-applicants',
               'job-aptitude',
               'job-details',
               'job-list',
               'job-view',
               'jobs',
               'leads',
               'leave-reports',
               'leave-type',
               'leaves-employee',
               'leaves',
               'manage-resumes',
               'offer_approvals',
               'offered-jobs',
               'overtime',
               'payments-reports',
               'payments',
               'payroll-items',
               'payslip-reports',
               'performance-appraisal',
               'performance-indicator',
               'policies',
               'profile',
               'project-list',
               'project-reports',
               'promotion',
               'provident-fund',
               'questions',
               'resignation',
               'salary',
               'saved-jobs',
               'schedule-timing',
               'shift-list',
               'shift-scheduling',
               'shortlist-candidates',
               'subscribed-companies',
               'task-reports',
               'termination',
               'tickets',
               'timesheet',
               'trainers',
               'training-type',
               'training',
               'user-all-jobs',
               'user-reports',
               'users',
               'visited-jobs',
               'contact-list',
               'companies',
               'companies-grid',
               'pipeline','activities',
               'company-details',
               'deals',
               'deals-details',
               'deals-kanban'
           ]))
           <!-- Datatable JS -->
           <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
       @endif

       @if (Route::is(['assets-category', 'assets-details', 'assets-new']))
           <!-- Daterangepikcer JS -->
           <script src="{{ URL::asset('/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
       @endif

       @if (Route::is(['admin-dashboard', 'assets-category', 'assets-new']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/morris/morris.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/raphael/raphael.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/chart.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/greedynav.js') }}"></script>
       @endif
       @if (Route::is(['user-dashboard', 'jobs-dashboard']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/js/Chart.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/line-chart.js') }}"></script>
       @endif
       @if (Route::is(['calendar', 'events']))
           <!-- Calendar JS -->
           <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/fullcalendar.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/jquery.fullcalendar.js') }}"></script>
       @endif

       @if (Route::is(['compose', 'projects', 'tasks', 'project-list']))
           <!-- Ck Editor JS -->
           <script src="{{ URL::asset('/assets/js/ckeditor.js') }}"></script>
       @endif
      
       <!-- Feather Icon JS -->
       <script src="{{ URL::asset('assets/js/feather.min.js') }}"></script>
       @if (Route::is(['ticket-details']))
           <!-- Sticky Sidebar JS -->
           <script src="{{ URL::asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
           <script src="{{ URL::asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
       @endif
       
       @if (Route::is(['leave-settings', 'user-asset-details']))
           <!-- Tagsinput JS -->
           <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
       @endif

       @if (Route::is(['companies-grid','company-details','deals','deals-kanban']))
       <!-- Bootstrap Tagsinput JS -->
		<script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
        @endif

       @if(Route::is(['contact-list','contact-grid','deals-details','deals-kanban','deals','leads-details','leads-kanban','leads','pipeline','contact-details','company-details','companies','companies-grid','activities']))
       <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
       @endif

       @if (Route::is(['leave-settings']))
           <!-- Multiselect JS -->
           <script src="{{ URL::asset('/assets/js/multiselect.min.js') }}"></script>
       @endif
       @if (Route::is(['employee-dashboard']))
           <!-- Owl Carousel JS -->
           <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
       @endif
       @if (Route::is(['performance']))
           <script>
               $(function() {
                   $(document).on("click", '.btn-add-row', function() {
                       var id = $(this).closest("table.table-review").attr('id'); // Id of particular table
                       console.log(id);
                       var div = $("<tr />");
                       div.html(GetDynamicTextBox(id));
                       $("#" + id + "_tbody").append(div);
                   });
                   $(document).on("click", "#comments_remove", function() {
                       $(this).closest("tr").prev().find('td:last-child').html(
                           '<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa-regular fa-trash-can"></i></button>'
                       );
                       $(this).closest("tr").remove();
                   });

                   function GetDynamicTextBox(table_id) {
                       $('#comments_remove').remove();
                       var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0]
                           .getElementsByTagName("tr").length + 1;
                       return '<td>' + rowsLength + '</td>' +
                           '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                           '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                           '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                           '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa-regular fa-trash-can"></i></button></td>'
                   }
               });
           </script>
       @endif

       @if (Route::is(['goal-tracking']))
           <script>
               $(document).ready(function() {
                   // Read value on page load
                   $("#result b").html($("#customRange").val());

                   // Read value on change
                   $("#customRange").change(function() {
                       $("#result b").html($(this).val());
                   });
               });
           </script>
       @endif

       @livewireScriptConfig

       @if (
           !Route::is([
               'index',
               'register',
               'otp',
               'forgot-password',
               'lock-screen',
               'job-list',
               'job-view',
               'error-404',
               'error-500',
               'coming-soon',
               'change-password'
               
           ]))
           <!-- Theme Settings JS -->
           <script src="{{ URL::asset('/assets/js/layout.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/theme-settings.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/greedynav.js') }}"></script>
       @endif

       <!-- Custom JS -->
       <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
