<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Append</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: lightblue">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div style="border: 2px black groove" class="card">
                        <div class="card-title p-3">
                            <h4><b>APPEND</b></h4>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="col-md-10 col-10">
                                    <div>
                                        <label for="name"><b>NAME</b></label>
                                       <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                                    </div>
                                 </div>
                                 <div class="col-md-2 col-2">
                                    <div style="background-color: #3577f1; padding: 5px; margin-top: 2px;" class="text-center w-75">
                                       <button class=" btn-sm addInput" style='background-color: #3577f1; border: none;' type="button"><i class="text-white bx bx-plus-medical"></i></button>
                                    </div>
                                 </div>
                                 <div class="" id="main_div">
                                 </div>
                                 <div class="col-md-12">

                                 </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
<script>
     $(document).ready(function(){
   $('.addInput').click(function(){
       var append = "<div class='row mt-3'>"+
           "<div class='col-md-10 col-10'>"+
           "<div>"+
                               "<input type='text' class='form-control' id='name' name='name' placeholder='Name'>"+
                                "</div>"+
                             "</div>"+
                                   "<div class='col-md-2 col-2'>"+
                                       "<div style='background-color: #f06548; padding: 5px; margin-top: 2px;' class='text-center w-75'>"+
                   "<button class=' btn-sm removeInput' style='background-color: #f06548; border: none;' type='button'><i class='text-white bx bx-trash'></i></button>"+
                                           "</div>"+
                                           "</div>"+
                                           "</div>"+

               "</div>" ;
       $('#main_div').append(append);
   });
   $(document).on('click' , '.removeInput' , function(){
       $(this).parent().parent().parent().remove();
   })
   });
</script>
</html>
