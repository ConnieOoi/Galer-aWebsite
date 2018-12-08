<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Sign In</title>

	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

</head>

<body>


				
	<!-- Page Header -->
    <header class="masthead" style="background-image: url('Image/login.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
			<h1>LOGIN</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

<form class="form-horizontal" action="LoginLink.php" method="POST" align="center">
    <div class="form-group">
                <div class="col-xs-10">
                    <input type="text"  class="" name="username" placeholder="Username" />
                </div>
	</div>
   
    <div class="form-group">
         <div class="col-xs-10">
			<input type="password" class="" id="inputPassword" placeholder="Password" name="password" >
         </div>
    </div>
	
    
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
         <div class="checkbox">
             <label><input type="checkbox"> Remember Me </label>
         </div>
    </div>
    </div>
     <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Login</button>
			
        </div>
         </div>
		 <div class="container">
			<a href="Register.php">Not a member yet? Sign up here!</a>
			</div>
		 
</form>   

      
	  </div>
	
        
</section>

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
</body>
</html>