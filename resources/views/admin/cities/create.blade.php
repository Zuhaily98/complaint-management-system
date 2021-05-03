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
                <div class="card-header">Add City</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group ( name)-->
                        <div class="form-group">
                            <label class="small mb-1" for="">Choose a State</label>
                            <select name="" id="" class="form-control">
                                <option value="">--Select State--</option>
                                <option value="">Selangor</option>
                                <option value="">Kuala Lumpur</option>
                            </select>
                        </div>
                        <!-- Form Group (email)-->
                        <div class="form-group">
                            <label class="small mb-1" for="">Enter City Name</label>
                            <input class="form-control" id="" type="text" placeholder="Ex: Shah Alam">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Add City</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
