@extends('master')
@section('content')
<div style="padding: 20px 100px">
  @foreach ($posts as $post)
  <div class="card card-widget">
    <div class="card-header">
      <div class="user-block">
        <h1>{{$post->title}}</h1>
      </div>
      <!-- /.user-block -->
      <div class="card-tools">
        <a href="{{ route('edit.post',['id'=>$post->id])}}" class="btn btn-tool" title="Edit">
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
      <img class="img-fluid img-thumbnail" src="{{ asset('Images')}}/{{$post->image}}" alt="Photo">
      <p>{{$post->desc}}</p>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer -->
  </div>
  @endforeach
</div>

@endsection