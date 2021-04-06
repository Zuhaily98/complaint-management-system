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
                        <h3>Search complaint with your unique complaint ID. The ID were sent to your email. Click <a
                                class="stretched-link text-danger" href="{{ route('guest.create') }}"> here </a> if
                            you want to create a new complaint
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
            <div class="card card-default my-5">
                <div class="card-header bg-danger text-white">Result</div>
                <div class="card-body">
                    {{-- <table class="table">
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
                    </table> --}}

                    <div class="form-group">
                        <label for="">Complaint ID :</label>
                        <input type="text" name="" id="" class="form-control" value="" placeholder="ex: 1054" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Panel Name</label>
                        <input type="text" name="" id="" class="form-control" value=""
                            placeholder="ex: Klinik Kesihatan Subang" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="" id="" class="form-control" value=""
                            placeholder="ex: TV Display Broken Down" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Complaint Status : </label>
                        <span class="badge badge-pill badge-warning">Pending</span>
                    </div>

                    <div class="form-group">
                        <label for="">Complaint Details :</label>
                        <textarea name="" id="" cols="5" rows="5" class="form-control" placeholder="ex: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem"
                            readonly></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Attachment : </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
