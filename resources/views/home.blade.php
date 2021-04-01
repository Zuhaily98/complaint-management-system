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
                        <h3>What You Can Do</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
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
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
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
                        <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="full feature_box">
                    <div class="full icon">
                        <img class="default-block" style="width: 40%"
                            src="https://www.pngarts.com/files/10/Vector-Email-Icon-PNG-Transparent-Image.png" alt="#" />
                        <img class="default-none" style="width: 45%"
                            src="https://www.pngarts.com/files/10/Vector-Email-Icon-PNG-Transparent-Image.png" alt="#" />
                    </div>
                    <div class="full">
                        <h4>Get Notified Via Email</h4>
                    </div>
                    <div class="full">
                        <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
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
                </div>
            </div>
        </div>
    </div>
@endsection
