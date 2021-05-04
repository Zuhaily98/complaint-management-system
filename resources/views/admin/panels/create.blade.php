@extends('admin.main')

@section('title')
    Add Panel :: Complaint Management System
@endsection

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                Add Panel
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">Optional page header content</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">Panel Details</div>
                <div class="card-body">
                    <form action="{{ route('admin.panels.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="small mb-1" for="type">Panel Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">--Select Type--</option>
                                <option value="Clinic">Clinic</option>
                                <option value="Hospital">Hospital</option>
                            </select>
                        </div>
                        <!-- Form Group (Panel name)-->
                        <div class="form-group">
                            <label class="small mb-1" for="name">Panel Name</label>
                            <input class="form-control" name="name" id="name" type="text" placeholder="Ex: Klinik Kesihatan Seksyen 7"
                                value="" />
                        </div>
                        <!-- Form Group (address)-->
                        <div class="form-group">
                            <label class="small mb-1" for="address">Address</label>
                            <input class="form-control" name="address" id=address" type="text" placeholder="Ex: No.2, Persiaran Kayangan">
                        </div>
                        <!-- Form Group (Postal code)-->
                        <div class="form-group">
                            <label class="small mb-1" for="postcode">Postcode</label>
                            <input class="form-control" name="postcode" id="postcode" type="text" placeholder="Ex: 40000" value="" />
                        </div>
                        <!-- Form Group (District)-->
                        <div class="form-group">
                            <label class="small mb-1" for="district">District</label>
                            <select name="district_id" id="district_id" class="form-control">
                                <option value="">--Select District--</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->district }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <!-- Form Group (City)-->
                        <div class="form-group">
                            <label class="small mb-1" for="">City</label>
                            <select name="" id="" class="form-control">
                                <option value="">--Select City--</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Form Group (State)-->
                        <div class="form-group">
                            <label class="small mb-1" for="">State</label>
                            <select name="" id="" class="form-control">
                                <option value="">--Select State--</option>
                                <option value="">Selangor</option>
                                <option value="">Seksyen 13</option>
                            </select>
                        </div>  --}}
                        <!-- Form Group (Location)-->
                        {{-- <div class="form-group">
                            <label class="small mb-1" for="">Location</label>
                            <p>--</p>
                        </div> --}}
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save Panel</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
