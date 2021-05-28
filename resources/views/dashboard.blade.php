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
h3{
                position:relative;
                font-size: 8em;
                Letter-spacing: 15px;
                color: #0e3742;
                text-transform: uppercase;
                width: 100%;
                text-align: center;
                -webkit-box-reflect:below 1px linear-gradient(transparent,#0004);
                outline:none;
                Line-height:0.70em;
                animation:animate 3s linear infinite;

            }
            @keyframes animate{
                0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
                {
                    color: #0e3742;
                    text-shadow: none;
                }
                18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%
                {
                    color: #fff;
                    text-shadow: 0 0 10px #03bcf4,
                    0 0 20px #03bcf4,
                    0 0 40px #03bcf4,
                    0 0 80px #03bcf4,
                    0 0 160px #03bcf4;
                }
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
      background-image: url('https://images.unsplash.com/photo-1426260193283-c4daed7c2024?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80');
      height: 700px;
      background-repeat: no-repeat;
      background-position: centre ;
      background-size:cover;
      
     
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">WELCOME <br>TO</h1>
          <h3><b>BREAK O'CLOCK</b></h3>
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

