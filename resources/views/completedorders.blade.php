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
    
    background: url("https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80");
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
      <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="container">
      
       <div class="row"> 
          
           <div class="col col-12 col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-11">


           </div>
           <div class="col col-11col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-11">
               <br><br><br><br><br>

               <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           <br><br><br><br><br>
           <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           <div class="row">
           <div class="card">
           <div class="card-header"><h4 style="float: left">Orders Completed</h4><a href="/orderviewadmin" class ="btn btn-dark" style="float: right" >Orders Pending</a><a href="/orderviewadmin" class="button primary" onclick="window.print();" >Download Sales Report</a></div>
           <div class="card-body">
           
           <table class="table tabel-borderless table-left">
           <thead>
           <tr>
             <td>#</td> 
             <td>User_id</td>
             <td>delivery_address</td>
             <td>User Email</td>
             <td>Payment_Status</td>
             <td>product</td>
             <td>quantity</td>
             <td>Amount</td>
             
             
             <td></td>
            
           </tr>
           </thead>
           <tbody>
           @foreach ($orders as $orders)
           <tr>
             <td>{{ $orders->id }}</td>
             <td>{{ $orders->user_id }}</td>
             <td>{{ $orders->address }}</td>
             <td>{{ $orders->email }}</td>
             <td>{{ $orders->payment_status }}</td>
             <td>{{ $orders->product_name }}</td>  
             <td>{{ $orders->quantity }}</td>   
             <td>{{ $orders->quantity * $orders->price  }}</td> 
                  
             
             
             
              <input type="hidden" name="order_id" value={{$orders->id}}>
             
             
           
            
             
             <td><a href="/orderdelete/{{$orders->id}}" class ="btn btn-danger" >Delete</a></td>
             
          
           </tr>
          @endforeach
          <tr>
             <td><b>Total Sales</b></td>
             <td>{{ $total }}</td>
             </tr>
          </tbody>
          
          </table>
          </div>
           <br><br><br><br>
           </div>
           
       </div>


    </div>


   

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
    
</x-app-layout>

