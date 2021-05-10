@extends('admin.main')

@section('title')
    Add City :: Complaint Management System
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
                                Add a City
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
                <div class="card-header">Add City</div>
                <div class="card-body">
                    <form action="{{ route('admin.cities.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-auto">
                                <label class="small mb-1" for="state">Choose a State</label>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin.states.create') }}" target="_blank" class="badge badge-primary">Create New State</a>
                            </div>
                        </div>
                        <!-- Form Group ( name)-->
                        <div class="form-group">
                            <select name="state_id" id="state" class="form-control">
                                <option value="">--Select State--</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Form Group (email)-->
                        <div class="form-group">
                            <label class="small mb-1" for="city">Enter City Name</label>
                            <input class="form-control" name="city" id="city" type="text" placeholder="Ex: Shah Alam">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Add City</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
