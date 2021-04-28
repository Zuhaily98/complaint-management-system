@extends('admin.main')

@section('title')
    Person In Charges List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Person In Charges (PIC)</div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Panel Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Panel Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>604</td>
                            <td>Iqbal Bin Sabaruddin</td>
                            <td>iqbal@gmail.com</td>
                            <td>0145285563</td>
                            <td>Hospital Shah Alam</td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                        <tr>
                            <td>605</td>
                            <td>Arif Bin Saidi</td>
                            <td>arif@gmail.com</td>
                            <td>0132005647</td>
                            <td>Klinik Kesihatan Bangi</td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
