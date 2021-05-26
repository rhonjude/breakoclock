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
    height:100%;
    background: url("https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y2hlZnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80");
    background-repeat: no-repeat;
    background-position: center ;
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
          </div>
        </div>
      </div>
    </nav>
      <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<header>


  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://wallpapercave.com/wp/wp6751201.jpg');
      height: 700px;
      background-repeat: no-repeat;
      background-position: centre ;
      background-size:cover;
      
     
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">WELCOME</h1>
          <h4 class="mb-3">{{$user->name}}</h4>
          <a class="btn btn-outline-light btn-lg" href="{{ route('productviews.index') }}" role="button"
            >Order Now</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
   
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
    
</x-app-layout>
