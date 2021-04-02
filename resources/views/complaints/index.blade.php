@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2>Search Your Complaint</h2>
                    </div>
                    <div class="heading_main text_align_center">
                        <h3>Search complaint with your unique complaint ID. The ID were sent to your email. Click <a class="stretched-link text-danger" href="{{ route('complaints.create') }}"> here </a> if you want to create a new complaint
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card card-default">
                <div class="card-header bg-danger text-white">Search Complaint</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="search">Search Complaint ID :</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right btn-sm" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
            <div class="card card-default my-2">
                <div class="card-header bg-danger text-white">Result</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Panel</th>
                            <th>Categories</th>
                            <th>Details</th>
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-info btn-sm">Show</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
