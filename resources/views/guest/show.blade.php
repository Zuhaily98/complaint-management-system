@extends('layouts.guest')

@section('js')
    <style>
        .display-comment .display-comment {
            margin-left: 40px
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2>Your Complaint</h2>
                    </div>
                    <div class="heading_main text_align_center">
                        <h3>Complaint ID : {{ $complaint->id }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card card-default my-5">
                <div class="card-header bg-danger text-white">Complaint Result</div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Panel Name</label>
                        <input type="text" name="" id="" class="form-control" value="{{ $complaint->panel->name }}"
                            placeholder="ex: Klinik Kesihatan Subang" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="" id="" class="form-control" value="{{ $complaint->category->title }}"
                            placeholder="ex: TV Display Broken Down" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Complaint Status : </label>
                        <span class="badge badge-pill badge-warning">{{ $complaint->status }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Complaint Details :</label>
                        <textarea name="" id="" cols="5" rows="5" class="form-control"
                            placeholder="ex: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem"
                            readonly>{{ $complaint->detail }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Attachment :</label>
                        <br>
                        @foreach ($complaint->attachments as $attachment)
                    
                             <img width="300px" height="160px"  src="{{ env('APP_URL') }}/storage/{{ $attachment->attachment }}" alt="" />
                      
                        @endforeach
                    </div>

                    @if ($complaint->comments->count() > 0)
                        <div class="card card-default">
                            <div class="card-header">Remarks from Officer</div>
                            <div class="card-body">

                                @include('guest.partials.replies', ['comments' => $complaint->comments,
                                'complaint_id'
                                => $complaint->id])

                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
