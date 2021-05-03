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
                            <div class="page-header-subtitle">Use this blank page as a starting point for creating new pages
                                inside your project!</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Optional page header content</div>
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
                        <!-- Form Group ( state )-->
                        <div class="form-group">
                            <label class="small mb-1" for="state">Choose State</label>
                            <select name="state_id" id="state_id" class="form-control">
                                <option value="">--Select State--</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Form Group (city)-->
                        <div class="form-group">
                            <label class="small mb-1" for="city">Choose City</label>
                            <select name="city_id" id="city_id" class="form-control">
                                <option value="">--Select City--</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
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
