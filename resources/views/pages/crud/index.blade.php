<html lang="en">
<head>
  <title>Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: black">
 <div class="container mt-5">
    <a href="{{ route('crud.create') }}"><button class="btn btn-light">Add Data</button></a>
<div class="card mt-3">
    <div style="border: white 3px groove;color:white" class="card-header bg-dark">
        <h2 class="text-center"><b>CRUD</b></h2>

    </div>
    <div style="border: white 3px groove;color:white" class="card-body bg-dark">
            <table style="color:white" class="table table-dark table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Doe</td>
                  <td><img height="80px" src="{{asset('assets/image/bugati.jpg')}}" alt=""></td>
                  <td>
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>
                    <a href="#"><i class="fa fa-edit text-info"></i></a>&nbsp;|&nbsp;
                    <a href="#"><i class="fa fa-trash text-danger"></i></a>
                </td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td><img height="80px" src="{{asset('assets/image/images.jpg')}}" alt=""></td>
                  <td>
                    <span class="badge bg-danger">Deactive</span>
                  </td>
                  <td>
                    <a href="#"><i class="fa fa-edit text-info"></i></a>&nbsp;|&nbsp;
                    <a href="#"><i class="fa fa-trash text-danger"></i></a>
                </td>
                </tr>
                <tr>
                  <td>Dooley</td>
                  <td><img height="80px" src="{{asset('assets/image/images (4).jpg')}}" alt=""></td>
                  <td>
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>
                    <a href="#"><i class="fa fa-edit text-info"></i></a>&nbsp;|&nbsp;
                    <a href="#"><i class="fa fa-trash text-danger"></i></a>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>

</body>
</html>
