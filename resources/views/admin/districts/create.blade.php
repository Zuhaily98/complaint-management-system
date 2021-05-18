@extends('admin.main')

@section('title')
    Add District :: Complaint Management System
@endsection

@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                Add a District
                            </h1>
                            {{-- <div class="page-header-subtitle">Use this blank page as a starting point for creating new pages
                                inside your project!</div> --}}
                        </div>
                        {{-- <div class="col-12 col-xl-auto mt-4">Optional page header content</div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card">
                <div class="card-header">Add District</div>
                <div class="card-body">
                    <form action="{{ route('admin.districts.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-auto">
                                <label class="small mb-1" for="state">Choose a State</label>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin.states.create') }}" target="_blank" class="badge badge-primary">Add New State</a>
                            </div>
                        </div>
                        <!-- Form Group ( state )-->
                        <div class="form-group">
                            <select name="state_id" id="state" class="form-control">
                                <option value="">--Select State--</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row g-3">
                            <div class="col-auto">
                                <label class="small mb-1" for="city">Choose City</label>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin.cities.create') }}" target="_blank" class="badge badge-primary">Add New City</a>
                            </div>
                        </div>
                        <!-- Form Group (city)-->
                        <div class="form-group">
                            <select name="city_id" id="city" class="form-control">
                            </select>
                        </div>
                        <!-- Form Group ( district )-->
                        <div class="form-group">
                            <label class="small mb-1" for="district">Enter District Name</label>
                            <input class="form-control" name="district" id="district" type="text" placeholder="Ex: Seksyen 13" value="" />
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Add District</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

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
        });

    </script>
@endsection