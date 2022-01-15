@extends('master')
@section('content')
<div style="padding: 20px 100px">
    @foreach ($blogs as $blog)
        <div class="card card-widget">
            <div class="card-header">
            <div class="user-block">

            </div>
            <!-- /.user-block -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <img class="img-fluid " src="{{ asset('Images')}}/{{$blog->image}}" alt="Photo">
            <h1>{{$blog->title}}</h1>
                <p>{{$blog->desc}}</p>
            <!-- /.card-footer -->
        </div>
        @endforeach
</div>

@endsection
