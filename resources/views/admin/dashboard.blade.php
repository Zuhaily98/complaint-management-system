@extends('admin.main')

@section('title')
    Dashboard :: Complaint Management System
@endsection

@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Administrator Dashboard
                            </h1>
                            <div class="page-header-subtitle">--</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">
                            <button class="btn btn-white p-3" id="reportrange">
                                <i class="mr-2 text-primary" data-feather="calendar"></i>
                                <span></span>
                                <i class="ml-1" data-feather="chevron-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            {{-- <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-xxl-12">
                                    <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                        <h1 class="text-primary">Welcome to Comsys Administrator</h1>
                                        <p class="text-gray-700 mb-0">Browse our fully designed UI toolkit! Browse our
                                            prebuilt app pages, components, and utilites, and be sure to look at our full
                                            documentation!</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                        src="{{ asset('admin/assets/img/illustrations/at-work.svg') }}"
                                        style="max-width: 26rem" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Recent Activity
                            <div class="dropdown no-caret">
                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownMenuButton"
                                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="text-gray-500" data-feather="more-vertical"></i></button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up"
                                    aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Filter Activity:</h6>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge badge-green-soft text-green my-1">Commerce</span></a>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge badge-blue-soft text-blue my-1">Reporting</span></a>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge badge-yellow-soft text-yellow my-1">Server</span></a>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge badge-purple-soft text-purple my-1">Users</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline timeline-xs">
                                <!-- Timeline Item 1-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">27 min</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="font-weight-bold text-dark" href="#!">Order #2912</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                                <!-- Timeline Item 2-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">58 min</div>
                                        <div class="timeline-item-marker-indicator bg-blue"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        Your
                                        <a class="font-weight-bold text-dark" href="#!">weekly report</a>
                                        has been generated and is ready to view.
                                    </div>
                                </div>
                                <!-- Timeline Item 3-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">2 hrs</div>
                                        <div class="timeline-item-marker-indicator bg-purple"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New user
                                        <a class="font-weight-bold text-dark" href="#!">Valerie Luna</a>
                                        has registered
                                    </div>
                                </div>
                                <!-- Timeline Item 4-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-yellow"></div>
                                    </div>
                                    <div class="timeline-item-content">Server activity monitor alert</div>
                                </div>
                                <!-- Timeline Item 5-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="font-weight-bold text-dark" href="#!">Order #2911</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                                <!-- Timeline Item 6-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-purple"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        Details for
                                        <a class="font-weight-bold text-dark" href="#!">Marketing and Planning Meeting</a>
                                        have been updated.
                                    </div>
                                </div>
                                <!-- Timeline Item 7-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">2 days</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="font-weight-bold text-dark" href="#!">Order #2910</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Progress Tracker
                            <div class="dropdown no-caret">
                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownMenuButton"
                                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="text-gray-500" data-feather="more-vertical"></i></button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-icon"><i class="text-gray-500" data-feather="list"></i>
                                        </div>
                                        Manage Tasks
                                    </a>
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-icon"><i class="text-gray-500"
                                                data-feather="plus-circle"></i></div>
                                        Add New Task
                                    </a>
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-icon"><i class="text-gray-500"
                                                data-feather="minus-circle"></i></div>
                                        Delete Tasks
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="small">
                                Server Migration
                                <span class="float-right font-weight-bold">20%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Sales Tracking
                                <span class="float-right font-weight-bold">40%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Customer Database
                                <span class="float-right font-weight-bold">60%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Payout Details
                                <span class="float-right font-weight-bold">80%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Account Setup
                                <span class="float-right font-weight-bold">Complete!</span>
                            </h4>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a class="card-footer" href="#!">
                            <div class="d-flex align-items-center justify-content-between small text-body">
                                Visit Task Center
                                <i data-feather="arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
            <!-- Example Colored Cards for Dashboard Demo-->
            <div class="row">
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Pending Complaints</div>
                                    <div class="text-lg font-weight-bold">{{ $pending }}</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="calendar"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('admin.complaints') }}">View Complaints</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Closed Complaints</div>
                                    <div class="text-lg font-weight-bold">{{ $closed }}</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('admin.complaints') }}">View Complaints</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Low Priority Complaints</div>
                                    <div class="text-lg font-weight-bold">{{ $low }}</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="check-square"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('admin.complaints') }}">View Complaints</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">High Priority Complaints</div>
                                    <div class="text-lg font-weight-bold">{{ $high }}</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('admin.complaints') }}">View Complaints</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- Example Charts for Dashboard Demo-->
            {{-- <div class="row">
                <div class="col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Earnings Breakdown
                            <div class="dropdown no-caret">
                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="areaChartDropdownExample" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="text-gray-500"
                                        data-feather="more-vertical"></i></button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up"
                                    aria-labelledby="areaChartDropdownExample">
                                    <a class="dropdown-item" href="#!">Last 12 Months</a>
                                    <a class="dropdown-item" href="#!">Last 30 Days</a>
                                    <a class="dropdown-item" href="#!">Last 7 Days</a>
                                    <a class="dropdown-item" href="#!">This Month</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Custom Range</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Monthly Revenue
                            <div class="dropdown no-caret">
                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="areaChartDropdownExample" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="text-gray-500"
                                        data-feather="more-vertical"></i></button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up"
                                    aria-labelledby="areaChartDropdownExample">
                                    <a class="dropdown-item" href="#!">Last 12 Months</a>
                                    <a class="dropdown-item" href="#!">Last 30 Days</a>
                                    <a class="dropdown-item" href="#!">Last 7 Days</a>
                                    <a class="dropdown-item" href="#!">This Month</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Custom Range</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Example DataTable for Dashboard Demo-->
            {{-- <div class="card mb-4">
                <div class="card-header">Crew With Unassigned Complaint</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (\App\Models\User::where(['role' => 'admin']) as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="{{ route('admin.users.show', $user) }}" class="badge badge-primary">See More</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </main>
@endsection
