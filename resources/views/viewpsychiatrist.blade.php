@extends('master')
@section('content')

  <div class="row">
      @foreach ($psys as $psy)
      <div class="col-md-4">
        <div class="card card-primary">'
            <div class="card-header">
                <h4 class="card-title w-100">
                    {{$psy->psyname}}
                </h4>
            </div>
            <div class="card-body">
                <a href="">{{$psy->psydetails}}</a>
            </div>
        </div>
      </div>
      @endforeach
    </div>

@endsection
