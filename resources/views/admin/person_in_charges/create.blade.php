@extends('admin.main')

@section('title')
    Add Person In Charge :: Complaint Management System
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
                                Add Person In Charge
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">Each Panel will have their own respectives Person In Charge (PIC)</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">Person In Charge Details</div>
                <div class="card-body">
                    <form action="{{ route('admin.person_in_charges.store') }}" method="POST">
                        @csrf
                        <!-- Form Group ( name)-->
                        <div class="form-group">
                            <label class="small mb-1" for="name">Full Name</label>
                            <input class="form-control" name="name" id="" type="text" placeholder="Ex: Ahmad Bin Ali"
                                value="" />
                        </div>
                        <!-- Form Group (email)-->
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input class="form-control" name="email" id="" type="text" placeholder="Ex: Ahmad@example.com">
                        </div>
                        <!-- Form Group (phone )-->
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Phone Number</label>
                            <input class="form-control" name="phone" id="" type="text" placeholder="Ex: 0123456789" value="" />
                        </div>
                        <div class="row g-3">
                            <div class="col-auto">
                                <label class="small mb-1" for="panel">Choose Panel</label>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin.panels.create') }}" target="_blank" class="badge badge-primary">Create New Panel</a>
                            </div>
                        </div>
                        <!-- Form Group (Panel)-->
                        <div class="form-group">
                            <select name="panel_id" id="panel_id" class="form-control">
                                <option value="">--Select Panel--</option>
                                @foreach ($panels as $panel)
                                    <option value="{{ $panel->id }}">{{ $panel->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Create Person In Charge</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
