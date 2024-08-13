<?php $page = 'chart-apex'; ?>

@component('components.breadcrumb')

    <x-app-layout>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Task Report</h4>
                    </div>
                    <div class="card-body">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Start To</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_joining">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">End</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="date" name="date_of_joining">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Status</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Status All</option>
                                    <option value="">Hide Complete Task</option>
                                    <option value="">Incomplete</option>
                                    <option value="">To Do</option>
                                    <option value="">Doing</option>
                                    <option value="">Complated</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Project</label>
                                <select id="designation" name="designation" class="form-select" required>
                                    <option value="">Project All</option>

                                </select>
                            </div>
                        </div>

                    </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Donut Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="donut-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}"></script>
