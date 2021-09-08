@extends('master')
@section('content')
<div class="container">
    <div class="form-group col-md-6">
        <lebel for="Name">Name: </lebel>
        <Input type="text" class="form-control" name="feedback_name" value="{{$cv['first_name']}} {{$cv['last_name']}}"></Input>
        <lebel for="Name">Email: </lebel>
        <Input type="email" class="form-control" name="feedback_email" value="{{$cv['email']}}"></Input>
        <lebel for="Name">Description: </lebel>
        <textarea type="text" class="form-control" name="feedback_description" col="10" rows="3"></textarea>
    </div>
</div>
@endsection