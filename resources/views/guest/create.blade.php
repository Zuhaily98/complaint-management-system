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
                            <label for="state">State :</label>
                            <select name="state" id="state" class="form-control">
                                <option value="">--Select State--</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City :</label>
                            <select name="city" id="city" class="form-control">
                                {{-- <option value="">--Select City--</option> --}}
                                {{-- @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district">District :</label>
                            <select name="district" id="district" class="form-control">
                                {{-- <option value="">--Select district--</option> --}}
                                {{-- @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->district }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="panel">Panel :</label>
                            <select name="panel" id="panel" class="form-control">
                                {{-- <option value="">--Select Panel--</option> --}}
                                {{-- @foreach ($panels as $panel)
                                    <option value="{{ $panel->id }}">{{ $panel->name }}</option>
                                @endforeach --}}
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
                            <textarea name="detail" id="detail" cols="5" rows="5" class="form-control"
                                placeholder="Write your complaint here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Attachment : </label>
                            <div class="form-group">
                                <input type="file" name="attachment" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success float-right" type="submit">Submit</button>

            </div>
        </div>
    </form>
    {{-- <div class="container">
        <div class="card">
            <div class="card-header">Dropzone File Upload</div>
            <div class="card-body">
                <form action="{{ route('guest.complaints.dropzone.store') }}" method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="image-upload">
                    @csrf
                    <div>
                        <h3 class="text-center">Click On Box To Upload Image</h3>
                    </div>
                    <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                </form>
            </div>
        </div>
    </div> --}}


@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"
        integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"
        integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w=="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#state').on('change', function() {
                var state_id = this.value;
                $("#city").html('');
                $.ajax({
                    url: "{{ route('get.cities') }}",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city').html('<option value="">Select City</option>');
                        $.each(result.cities, function(key, value) {
                            $("#city").append('<option value="' + value.id +
                                '">' + value.city + '</option>');
                        });
                        $('#district').html(
                        '<option value="">Select City First</option>');
                    }
                });
            });
            $('#city').on('change', function() {
                var city_id = this.value;
                $("#district").html('');
                $.ajax({
                    url: "{{ route('get.districts') }}",
                    type: "POST",
                    data: {
                        city_id: city_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#district').html('<option value="">Select District</option>');
                        $.each(result.districts, function(key, value) {
                            $("#district").append('<option value="' + value.id +
                                '">' + value.district + '</option>');
                        });
                    }
                });
            });
            $('#district').on('change', function() {
                var district_id = this.value;
                $("#panel").html('');
                $.ajax({
                    url: "{{ route('get.panels') }}",
                    type: "POST",
                    data: {
                        district_id: district_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#panel').html('<option value="">Select Panel</option>');
                        $.each(result.panels, function(key, value) {
                            $("#panel").append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });

    </script>
@endsection
