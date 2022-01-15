@extends('master')
@section('content')
<div style="padding: 20px 100px">
    @foreach ($blogs as $blog)
        <div class="card card-widget">
            <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('blog.edit',['id'=>$blog->id])}}" class="btn btn-tool" title="Edit">
                    <i class="far fa-edit"></i>
                </a>
                <button type="button" class="btn btn-tool" title="Mark as read">
                <i class="far fa-circle"></i>
                </button>
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
            <img class="img-fluid " src="{{ asset('Images')}}/{{$blog->image}}" alt="Photo">
                <p>{{$blog->desc}}</p>
            <!-- /.card-footer -->
        </div>
        @endforeach
</div>

@endsection
