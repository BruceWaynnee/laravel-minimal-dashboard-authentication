@extends('dashboard.layout.app')

<!-- Page Tittle -->
@section('title', 'Send Message')

@section('content')
<!-- google recaptchar version 3 plug-in -->
    {!! RecaptchaV3::initJs() !!}
<!-- BEGIN :: Message Content Wrapper -->
    <div class="message-content-wrapper container-fluid">
        <form action="{{ route('send-message') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>Send Us A Message!</h4>
            <hr>
            <div class="form-group col-md-4">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group col-md-4">
                <label for="name">Your Email:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group col-md-4">
                <label for="name">Your Contact Number:</label>
                <input type="number" class="form-control" name="contact" id="contact">
            </div>
            <div class="form-group col-md-4">
                <label for="name">Message:</label>
                <textarea class="form-control" name="message" id="message" cols="4" rows="4"></textarea>
            </div>
            <div class="form-group col-md-4 text-right">
                <input class="btn btn-sm btn-primary" type="submit" value="Send Message">
            </div>
        </form>
    </div>
<!-- END ::   Message Content Wrapper -->
@endsection