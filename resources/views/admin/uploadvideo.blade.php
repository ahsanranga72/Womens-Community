@extends('master')
@section('content')
<div>
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-title">Upload video</div>
        </div>
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="desc">Description</label>
                        <textarea class="form-control" name="title" id="desc" cols="30" rows="10" placeholder="Enter your thought"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Video</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="video" class="custom-file-input" id="inputfile" />
                            <label class="custom-file-label" for="inputfile">Choose File</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
