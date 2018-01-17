<html>
<head>
<title>Signup</title>
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
            <li><a href=""><span class="glyphicon glyphicon-user"></span>Signup</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul></div>
</div>
</nav>
    
       <div class="container login">
            <div class="rwo">
                <div class="col-xs-8">
                    <div class="panel panel-info">
                        <div class="gf">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="panel-body">
                            
                            <form method="POST" action="signin.php">
                            <div class="form-group">
                                <input type="name" name="name" placeholder="Name" class="form-control">
                            </div>
                             <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                             <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                             <div class="form-group">
                                <input type="number" name="contact" placeholder="Contact" class="form-control">
                            </div>
                             <div class="form-group">
                                <input type="text" name="city" placeholder="City" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" placeholder="Address" class="form-control">
                            </div>
                                <button type="submit" class="btn btn-primary" value="registration_submit">SIGNUP</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       </div>   
     <nav class="navbar navbar-fixed-bottom"> 
<div class="header"> 
<footer><p align="center">Content is �Copyright � Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000�.</p>
</footer>
</div>
     </nav>
</body>
</html>