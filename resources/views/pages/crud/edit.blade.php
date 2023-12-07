<html lang="en">
<head>
  <title>Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body style="background-color: black">
<style>
    .multiple-uploader {
        width: 100%;
    }
    .image-container {
        margin: 10px;
        width: 100px;
        height: 100px;
        position: relative;
        cursor: auto;
        pointer-events: unset;
    }
    .image-preview {
        height: 100px;
        width : 100px
    }
    .multiple-uploader {
        border: 2px dashed lightgrey;
    }
    </style>
 <div class="container mt-5">
    <a href="{{ route('crud.index') }}"><button class="btn btn-light">Back</button></a>
<div class="card mt-3">
    <div style="border: white 3px groove;color:white" class="card-header bg-dark">
        <h2 class="text-center"><b>EDIT CRUD</b></h2>

    </div>
    <div style="border: white 3px groove;color:white" class="card-body bg-dark">
        <div class="row">
            <div class="col-md-6">
                <label for="name"><b>Name</b></label>
                <input style="border: 2px  white groove" type="text" name="name" id="name" class="form-control mt-3 bg-dark text-light">
            </div>
            <div class="col-md-6">
                <label for="status"><b>Status</b></label>
                <select style="border: 2px  white groove" name="status" id="status" class="form-control mt-3 bg-dark text-light">
                    <option value="0">Please Select</option>
                    <option value="1">Active</option>
                    <option value="2">Deactive</option>
                </select>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="multiple-uploader" id="multiple-uploader">
                        <div class="mup-msg">
                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                            <span class="mup-main-msg">Click to upload images.</span>
                            <label for="" style="display: none;">
                            <input type="file" name="image" id="" class="form-control" multiple>
                            </label>
                        </div>
                 </div>
        </div>
          </div>
    </div>
</div>
<script src="{{ asset('assets/js/multiple-uploader.js') }}"></script>
<script src="{{ asset('assets/js/payment-related.js') }}"></script>
<script>
let multipleUploader = new MultipleUploader('#multiple-uploader').init({
    maxUpload : 20, // maximum number of uploaded images
    maxSize:2, // in size in mb
    filesInpName:'images', // input name sent to backend
    formSelector: '#my-form', // form selector
});
</script>
</body>

</html>
