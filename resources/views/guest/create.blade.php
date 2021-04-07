@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2>Create Complaint</h2>
                    </div>
                    <div class="heading_main text_align_center">
                        <h3>Complete the form below</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card card-default">
                <div class="card-header bg-danger text-white">Select Panel</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="type">Type :</label>
                        <select name="" id="" class="form-control">
                            <option value="">--Select Type--</option>
                            <option value="">Clinic</option>
                            <option value="">Hospital</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">State :</label>
                        <select name="" id="" class="form-control">
                            <option value="">--Select State--</option>
                            <option value="">Selangor</option>
                            <option value="">---</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">City :</label>
                        <select name="" id="" class="form-control">
                            <option value="">--Select City--</option>
                            <option value="">Shah Alam</option>
                            <option value="">Puchong</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">District :</label>
                        <select name="" id="" class="form-control">
                            <option value="">--Select Disctrict--</option>
                            <option value="">Seksyen 13</option>
                            <option value="">Seksyen 7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Panel :</label>
                        <select name="" id="" class="form-control">
                            <option value="">--Select Panel--</option>
                            <option value="">Klinik Kesihatan Seksyen 13</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card card-default my-3">
                <div class="card-header bg-danger text-white">Complaint Details</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Category :</label>
                        <select name="" id="" class="form-control">
                            <option value="">--Select Category--</option>
                            <option value="">TV Not Working</option>
                            <option value="">Ads Not Showing</option>
                            <option value="">TV Display Broke</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Details :</label>
                        <textarea name="" id="" cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Attachment : </label>
                        <button class="btn btn-info btn-sm">Upload</button>
                    </div>
                </div>
            </div>

            <div class="card card-default my-3">
                <div class="card-header bg-danger text-white">Complainer Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>

            <button class="btn btn-success float-right" type="submit">Submit</button>
        </div>
    </div>
@endsection
