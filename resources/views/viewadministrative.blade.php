@extends('master')
@section('content')

  <div class="row">
      @foreach ($addms as $add)
      <div class="col-md-4">
        <div class="card card-primary">'
            <div class="card-header">
                <h4 class="card-title w-100">
                    {{$add->text}}
                </h4>
            </div>
            <div class="card-body">
                <a href="">{{$add->number}}</a>
            </div>
        </div>
      </div>
      @endforeach
    </div>

@endsection
