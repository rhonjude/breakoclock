<x-app-layout>
    
    <!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break O'Clock</title>
    <style>
        strong{
          color:rgb(255, 255, 255);
          font-size:medium;
        }
        .container{
    
    background: url("https://wallpapercave.com/wp/wp6751201.jpg");
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
          <a class="nav-link" href="redirects">Home</a>    
          <a class="nav-link" href="{{ route('productviews.index') }}">View Products</a>
          <a class="nav-link" href="/myorders">My Orders</a>
          <ul class="nav navbar-nav navbar-right">
          
          </ul>
            

            
          </div>
        </div>
      </div>
    </nav>
      <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="container">
       


          
       <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           <br><br><br><br><br>
           <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
           <div class="row">
           <div class="card">
           <div class="card-header"><h4 style="float: left">My Orders</h4></div>
           <div class="card-body">
           <table class="table tabel-borderless table-left">
           <thead>
           <tr>
             <td>order_id</td> 
             <td>Product Name</td>
             
             <td>Description</td>
             <td>price</td>
             <td>Quantity</td>
             <td>total</td>
             <td>Date</td>
             
            
           </tr>
           </thead>
           <tbody>
           @foreach ($orders as $orders)
           <tr>
             <td>{{ $orders->id }}</td>
             <td>{{ $orders->product_name }}</td>
             
             <td>{{ $orders->description }}</td>
             <td>{{ $orders->price }}</td>
             <td>{{ $orders->quantity }}</td>
             <td>{{ $orders->price * $orders->quantity  }}</td>
             <td>{{ $orders->created_at }}</td>
             
             
             
        
             <td>
             <div class="btn-group">
            
             
             
             </div>
             </td>
           </tr>
          @endforeach
          </tbody>
          </table>
       

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
    
</x-app-layout>