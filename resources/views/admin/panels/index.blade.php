@extends('admin.main')

@section('title')
    Panel List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Panels</div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Panel ID</th>
                            <th>Type</th>
                            <th>Panel Name</th>
                            <th>District</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Full Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Panel ID</th>
                            <th>Type</th>
                            <th>Panel Name</th>
                            <th>District</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Full Address</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>504</td>
                            <td><div class="badge badge-warning badge-pill">Clinic</div></td>
                            <td>Klinik Kesihatan Shah Alam Seksyen 7</td>
                            <td>Seksyen 7</td>
                            <td>Shah Alam</td>
                            <td>Selangor</td>
                            <td>No.2, Persiaran Kayangan, Seksyen 7, 40000 Shah Alam, Selangor</td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                        <tr>
                            <td>505</td>
                            <td><div class="badge badge-success badge-pill">Hospital</div></td>
                            <td>Hospital Shah Alam</td>
                            <td>Seksyen 7</td>
                            <td>Shah Alam</td>
                            <td>Selangor</td>
                            <td>Persiaran Kayangan, Seksyen 7, 40000 Shah Alam, Selangor</td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
