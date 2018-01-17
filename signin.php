<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="hwt.php" class="navbar-brand">Lifestyle Store</a></div>
        <div class="collapse navbar-collapse" id="myNavbar"><ul class="nav navbar-nav navbar-right">
               
</div>
</nav>
    
<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$addredd = $_POST['address'];
$user_reg = "insert into users(Name,Email,Password,Contact,City,Address) values ('$name', '$email', '$password', '$contact', '$city', '$addredd')";
$submit = mysqli_query($con, $user_reg) or die(mysqli_error($con));
?>  
    
    <div class="container1">
        <div class="row">
            <div class="col-xs-5 col-xs-offset-3">
        <div class="panel panel-primary">
            <div class="panel-body">
                <h3><?php echo "Signup Successfull !" ?></h3>
            </div>
        </div>
            </div></div>
            
    </div>
    
    
     <nav class="navbar navbar-fixed-bottom"> 
<div class="header"> 
<footer><p align="center">Content is �Copyright � Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000�.</p>
</footer>
</div>
     </nav>
</body>
</html>