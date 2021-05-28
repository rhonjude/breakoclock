<x-app-layout>

    <!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break O'Clock</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        strong{
          color:rgb(255, 255, 255);
          font-size:medium;
        }
        
        
            .container{
    
    background: url("https://images.unsplash.com/photo-1590991829546-0fdf9d6d79f9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
    background-repeat: no-repeat;
    width:100%;
    height:100vh;         
    background-size: cover;
    background-attachment: fixed;
   
               
}
           
       
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          
        <a class="navbar-brand" href="#"><img height="80" width="80" src="https://image.similarpng.com/very-thumbnail/2020/08/Cartoon-chef-serving-food-on-transparent-background-PNG.png"> <b>BREAK O'CLOCK</b> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            
            <a class="nav-link" href="/redirects">Home</a>
            <a class="nav-link" href="{{ route('staffs.index') }}">Staffs</a>
            <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
            <a class="nav-link" href="{{ route('products.index') }}">Product</a>
            <a class="nav-link" href="/orderviewadmin">Orders</a>
            
           

            
          </div>
        </div>
      </div>
    </nav>
      
</head>
<body >



    <div class="container">
  


          
           <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           
               <br><br><br><br><br>
               <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
               <div class="row">
               <div class="card">
               <div class="card-header"><h4 style="float: left">STAFFS</h4><a href="#addStaff" style="float: right" class="btn btn-dark" data-toggle="modal" data-target="#addStaff"><i class="fa fa-plus"></i>Add New Staffs</a> </div>
               <div class="card-body">
               <table class="table tabel-borderless table-left">
               <thead>
               <tr>
                 <td>#</td> 
                 <td>Name</td>
                 <td>Address</td>
                 <td>Phone</td>
                 <td>Email</td>
                 <td>Gender</td>
                 <td>Designation</td>
                 <td>Salary</td>
                 <td>DOJ</td>
                 
               </tr>
               </thead>
               <tbody>
               @foreach ($staff as $key => $staff)
               <tr>
                 <td>{{ $key+1 }}</td>
                 <td>{{ $staff->sname }}</td>
                 <td>{{ $staff->saddress }}</td>
                 <td>{{ $staff->sphone }}</td>
                 <td>{{ $staff->semail }}</td>
                 <td>{{ $staff->sgender }}</td>
                 <td>{{ $staff->sdesignation }}</td>
                 <td>{{ $staff->ssalary }}</td>
                 <td>{{ $staff->sdoj }}</td>
                 <td>
                 <div class="btn-group">
                 <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editStaff{{ $staff->id }}"><i class="fa fa-edit"></i>Edit</a>
                 <a href="" class="bt btn-sm btn-danger" data-toggle="modal" data-target="#deleteStaff{{ $staff->id }}"><i class="fa fa-trash"></i>Delete</a>
                 </div>
                 </td>
               </tr>

               <div class="modal" id="deleteStaff{{ $staff->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
      <form action="{{ route('staffs.destroy',$staff->id) }}" method="post">
        @csrf
        @method('delete')
        <p>Are you sure you want to delete {{ ($staff->id) }} ?</p>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </div>
    </div>
    </form>
</div>
   <!-- Modal of staffEdit -->
<div class="modal right fade" id="editStaff{{ $staff->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Staffs</h5>
        
        {{ $staff->id }}
      </div>
      <div class="modal-body">
       <form action="{{ route('staffs.update',$staff->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="sname" id="" value="{{ $staff->sname }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="saddress" id="" value="{{ $staff->saddress }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="sphone" id="" value="{{ $staff->sphone }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="semail" id="" value="{{ $staff->semail }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Gender</label><br>
        <input type="text" name="sgender" id="" value="{{ $staff->sgender }}" class="form-control" >
        </div>
        <div class="form-group">
        <label for="">Designation</label>
        <input type="text" name="sdesignation" id="" value="{{ $staff->sdesignation }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Salary</label>
        <input type="text" name="ssalary" id="" value="{{ $staff->ssalary }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Date of joining</label>
        <input type="date" name="sdoj" id="" value="{{ $staff->sdoj }}" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark btn-block">Update</button>
      </div>
      </form>
    </div>
   </div>


   
              @endforeach
               </tbody>

               
               </table>
               </div>

               </div>
               </div>
               </div>
           
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           </div>
       


    </div>

    <!-- Button trigger modal -->

   <!-- Modal of staffAdd -->
   <div class="modal right fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Staffs</h5>
      </div>
      <div class="modal-body">
       <form action="{{ route('staffs.store') }}" method="post">
        @csrf
        <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="sname" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="saddress" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="sphone" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="semail" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Gender</label><br>
        <input type="radio" id="male" name="sgender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="sgender" value="female">
        <label for="female">Female</label><br>
        </div>
        <div class="form-group">
        <label for="">Designation</label>
        <input type="text" name="sdesignation" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Salary</label>
        <input type="text" name="ssalary" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Date of joining</label>
        <input type="date" name="sdoj" id="" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark btn-block">Add Staff</button>
      </div>
      </form>
    </div>
   </div>




</div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
    
</x-app-layout>

