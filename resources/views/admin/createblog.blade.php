@extends ('master')
<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
@section('content')
<div>
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-title">Create News</div>
        </div>
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="desc">Discription</label>
                        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" placeholder="Enter News"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputfile" />
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
