<!DOCTYPE html>
<html>
<head>
    <title>Image Intervention</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div style="border: black 2px groove;color:black" class="card-header">
            <h2 class="text-center"><b>Image Intervention</b></h2>
        </div>
        <div style="border: black 2px groove;color:black" class="card-body p-3">
            <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                </div>
        <div class="col-md-3">
        <div style="border: black 2px groove;color:black" class="card p-3">
                <strong>Original Image:</strong>
                <br/>
                <img src="/images/{{ Session::get('imageName') }}" width="300px" />
            </div>
        </div>
        <div class="col-md-3">
        <div style="border: black 2px groove;color:black" class="card p-3">
                <strong>Thumbnail Image:</strong>
                <br/>
                <img src="images/thumbnail/{{ Session::get('imageName') }}" />
            </div>
        </div>
        <div class="col-md-3">
            <div style="border: black 2px groove;color:black" class="card p-3">
                    <strong>Detail Image:</strong>
                    <br/>
                    <img src="images/detail/{{ Session::get('imageName') }}" />
                </div>
            </div>
            <div class="col-md-3">
                <div style="border: black 2px groove;color:black" class="card p-3">
                        <strong>Search Image:</strong>
                        <br/>
                        <img src="images/search/{{ Session::get('imageName') }}" />
                    </div>
                </div>
    @endif

    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="col-md-12">
                <br/>
                <input style="border: black 2px groove;color:black" class="form-control" type="file" name="image" class="image">
            </div>
            <div class="col-md-12">
                <br/>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </div>
    </form>
</div>
</div>
</div>
</div>

</body>
</html>
