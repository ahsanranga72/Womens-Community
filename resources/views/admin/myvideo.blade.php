@extends('master')
@section('content')

<div style="padding: 20px 100px">
    @foreach ($videos as $video)
        <div class="card card-widget">
            <div class="card-header">
            <div class="user-block">
            </div>
            <!-- /.user-block -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <video width="100%" height="350px" controls>
                    <source src="{{asset('Images')}}/{{$video->video}}" type="video/mp4">
                </video>
                <p>{{$video->title}}</p>

            <!-- /.card-body -->
            
            <!-- /.card-footer -->
        </div>
    @endforeach
</div>
@endsection
