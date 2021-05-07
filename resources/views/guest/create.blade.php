@extends('layouts.guest')

@section('content')
    <form action="{{ route('guest.complaints.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

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
                <div class="card card-default my-3">
                    <div class="card-header bg-danger text-white">Complainer Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header bg-danger text-white">Select Panel</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="city">City :</label>
                            <select name="city" id="city" class="form-control">
                                <option value="">--Select City--</option>
                                @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="panel">Panel :</label>
                            <select name="panel" id="panel" class="form-control">
                                <option value="">--Select Panel--</option>
                                @foreach ($panels as $panel)
                                <option value="{{ $panel->id }}">{{ $panel->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card card-default my-3">
                    <div class="card-header bg-danger text-white">Complaint Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category">Category :</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">--Select Category--</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="detail">Details :</label>
                            <textarea name="detail" id="detail" cols="5" rows="5" class="form-control" placeholder="Write your complaint here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Attachment : </label><div class="form-group">
                                <input type="file" name="attachment" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success float-right" type="submit">Submit</button>
                
            </div>
        </div>
    </form>
@endsection
