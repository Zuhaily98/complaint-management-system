@extends('admin.main')

@section('title')
    Complaint List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Complaints</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Panel Name</th>
                            <th>Complaint Category</th>
                            <th>Complaint Details</th>
                            <th>Complaint Status</th>
                            <th>Complaint Date</th>
                            <th>Assigned Officer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Panel Name</th>
                            <th>Complaint Category</th>
                            <th>Complaint Details</th>
                            <th>Complaint Status</th>
                            <th>Complaint Date</th>
                            <th>Assigned Officer</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1012</td>
                            <td>Klinik Kesihatan Puchong</td>
                            <td>Broken TV Display</td>
                            <td>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</td>
                            <td><div class="badge badge-warning badge-pill">Pending</div></td>
                            <td>25/03/2021</td>
                            <td>Iman Mutiara</td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                        <tr>
                            <td>1013</td>
                            <td>Hospital Sungai Buloh</td>
                            <td>Ads Not Showing</td>
                            <td>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</td>
                            <td><div class="badge badge-success badge-pill">Closed</div></td>
                            <td>02/04/2021</td>
                            <td>Apip Sharifuddin</td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
