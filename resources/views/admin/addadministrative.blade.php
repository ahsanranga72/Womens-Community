@extends('master')
@section('content')
    <div>
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">Add Administrative Number</div>
            </div>
            <form method="POST" action="" >
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="desc">Administrative Name</label>
                            <input class="form-control" name="text" id="desc" placeholder="Enter name" />
                    </div>

                    <div class="form-group">
                        <label for="desc">Administrative number</label>
                            <input class="form-control" name="number" id="desc" placeholder="Enter number" />
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
