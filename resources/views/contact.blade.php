@extends('layouts.guest')

@section('content')
    <div class="section contact_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 theme_color_bg fc3726 padding_0">
                    <div class="full">
                        <div class="row">
                            <div class="col-sm-12 col-md-10 offset-lg-1">
                                <div class="full contact_form">
                                    <form class="contact_form_inner" action="#">
                                        <fieldset>
                                            <div class="field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                            <div class="field">
                                                <input type="email" name="email" placeholder="Email" />
                                            </div>
                                            <div class="field">
                                                <input type="text" name="phone_no" placeholder="Phone number" />
                                            </div>
                                            <div class="field">
                                                <textarea placeholder="Message"></textarea>
                                            </div>
                                            <div class="field center">
                                                <button class="margin-top_30">SEND</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
