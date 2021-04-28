@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2>WELCOME TO {{ config('app.name', 'Laravel') }}</h2>
                    </div>
                    <div class="heading_main text_align_center">
                        <h3>What You Can Do.</h3>
                    </div>
                    <div class="heading_main text_align_center">
                       <div class="one">
                          <a href="{{ route('guest.create') }}" class="btn btn-outline-success">Create a Complaint</a>
                          <a href="{{ route('guest.index') }}" class="btn btn-outline-info">Search your Complaint</a>
                          <a href="/contact" class="btn btn-outline-danger">Contact Us</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-lg-3">
                <div class="full feature_box">
                    <div class="full icon">
                        <img class="default-block" style="width: 40%" src="http://cdn.onlinewebfonts.com/svg/img_319563.png"
                            alt="#" />
                        <img class="default-none" style="width: 45%" src="http://cdn.onlinewebfonts.com/svg/img_319563.png"
                            alt="#" />
                    </div>
                    <div class="full">
                        <h4>File a Complaint</h4>
                    </div>
                    <div class="full">
                        <p>You can create complaints about any malfunction regarding TV display at any panel that are
                            registered with MedKAD</p>
                    </div>
                    <div class="one">
                     <a href="{{route('guest.create')}}" class="btn btn-outline-secondary">Create Complaint</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="full feature_box">
                    <div class="full icon">
                        <img class="default-block" style="width: 35%"
                            src="https://uxwing.com/wp-content/themes/uxwing/download/01-user_interface/documents-search.png"
                            alt="#" />
                        <img class="default-none" style="width: 40%"
                            src="https://uxwing.com/wp-content/themes/uxwing/download/01-user_interface/documents-search.png"
                            alt="#" />
                    </div>
                    <div class="full">
                        <h4>Search Your Complaint</h4>
                    </div>
                    <div class="full">
                        <p>It is a long fact that a reader will be distracted by the readable content..</p>
                    </div>
                    <div class="one">
                     <a href="{{ route('guest.index') }}" class="btn btn-outline-secondary">Search Complaint</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="full feature_box">
                    <div class="full icon">
                        <img class="default-block" style="width: 40%"
                            src="https://img.icons8.com/ios/452/add-contact-to-company.png" alt="#" />
                        <img class="default-none" style="width: 45%"
                            src="https://img.icons8.com/ios/452/add-contact-to-company.png" alt="#" />
                    </div>
                    <div class="full">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="full">
                        <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                    </div>
                    <div class="one">
                     <a href="/contact" class="btn btn-outline-secondary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
