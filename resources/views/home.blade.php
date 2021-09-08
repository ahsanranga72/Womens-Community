@extends('master')
<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .hero-image {
        background-image: url("/dist/img/boxed-bg.png");
        background-color: #cccccc;
        height: 600px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: Black;
    }
</style>
@section('content')
<div class="hero-image">
    <div class="hero-text">
        <div class="wraper">
            <div class="callout callout-info">
                <p>
                Make a CV to define yourself The right way. Meet thousands of job announcements and employers by the help of your profile with a private extension, which you can share at all social media environments.
                </p>
            </div>
            <a href="{{ route('createcv') }}" class="btn btn-block btn-success btn-lg">Create Your CV Now</a>
            <a href="#" class="btn btn-block btn-success btn-lg">View Jobs</a>
        </div>
    </div>
</div>
@endsection