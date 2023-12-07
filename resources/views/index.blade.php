<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:lightgrey;">
    

      <div class="card">

          <div class="row">
              <div class="col-md-12">
                  <h2 style="background-color:lightgrey;" class="card-header  text-center"><b>USERS</b></h2>
                </div>
            </div>
         <div class="card-body">
            <div class="table-responsive ">
               <table class="mt-3 table table-striped table-bordered">
      <button  class="btn btn-dark "><a style="text-decoration:none;" class="text-light" href="{{route('mypdf')}}">PDF</a></button>
      <button style="margin-left:1100px;"  class="btn btn-dark "><a style="text-decoration:none;" class="text-light" href="{{url('export-all')}}">Export Users Data</a></button>

                  <thead>
                     <tr>
                        <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($users as $user)
                     <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                     </tr>
                     @empty
                     <td class="text-center" colspan="12">No data found</td>
                     @endforelse
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>

