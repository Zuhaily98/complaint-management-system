@extends('admin.main')

@section('title')
    Add State :: Complaint Management System
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
                                Add a State
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
                <div class="card-header">Add State</div>
                <div class="card-body">
                    <form action="{{ route('admin.states.store') }}" method="POST">
                        @csrf
                        <!-- Form Group ( name)-->
                        <div class="form-group">
                            <label class="small mb-1" for="state">Enter State Name</label>
                            <input class="form-control" name="state" id="state" type="text" placeholder="Ex: Selangor"
                                value="" />
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Add State</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
