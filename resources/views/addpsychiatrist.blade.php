@extends('master')
@section('content')
<div>
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-title">Add Psychiatrist</div>
        </div>
        <form method="POST" action="storepsychiatrist">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="desc">Psychiatrist Name</label>
                    <input class="form-control" name="psyname" id="psyname" placeholder="Enter name here" />
                </div>

                <div class="form-group">
                    <label for="desc">Psychiatrist Details</label>
                    <textarea class="form-control" name="psydetails" id="psydetails" cols="30" rows="10" placeholder="Enter deatils here"></textarea>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection