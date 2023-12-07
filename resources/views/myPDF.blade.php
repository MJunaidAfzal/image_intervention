<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
</head>
<body>
    
<style>
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: darkred;
  color: white;
}
</style>
      <div class="card">

          <div class="row">
              <div class="col-md-12">
                  <h2  class="card-header  text-center"><b>USERS</b></h2>
                </div>
            </div>
         <div class="card-body">
            <div class="table-responsive ">
               <table id="customers" class="mt-3 table table-striped table-bordered">

                  <thead>
                     <tr>
                        <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                     </tr>
                  </thead>
                  <tbody>
                    @if(count($users))
                     @forelse($users as $user)
                     <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td >{{ $user->email }}</td>
                     </tr>
                     @empty
                     <td class="text-center" colspan="12">No data found</td>
                     @endforelse
                     @endif
                  </tbody>
               </table>
            </div>
         </div>
      </div>
</body>
</html>

