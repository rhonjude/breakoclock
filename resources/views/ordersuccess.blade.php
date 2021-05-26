
<x-app-layout>
    
    <!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break O'Clock</title>
    
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
    <style>
        strong{
          color:rgb(255, 255, 255);
          font-size:medium;
        }
        .container1{
    
    background: url("https://media.istockphoto.com/photos/empty-dark-wooden-table-in-front-of-abstract-blurred-bokeh-background-picture-id1130714046?k=6&m=1130714046&s=612x612&w=0&h=AqePj4OXa9kJDTGuh10EVF8GbcWpo6m7mEHE8xOm7nI=");
    background-repeat: no-repeat;
    background-position: center ;
    background-size: cover;
    background-attachment: fixed;
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
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
    <div class="container1">
     <!-- Modal HTML -->

	<br><br><br><br><br>
		<div class="content">
			<div class="header">
            <br><br><br><br><br><br><br>
							
				<h4  class="text-center" style="color: green"><b>Order Successfull!</b></h4>	
			</div>
			<div class="body">
				<p class="text-center" style="color: red"><b>Your Order has been confirmed.</b></p>
			</div>
            
			<div class="footer">
                <div class="center">
                <br><br><br><br>
                <a class="btn btn-outline-success" href="{{ route('productviews.index') }}" role="button" style=>OK</a>
                </div>
                
              
               
                
				
                
			
			</div>
		</div>
        <br><br><br><br><br><br>
    </div>
       
      
	

	
       



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
    
</x-app-layout>