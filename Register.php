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
	
	<title>Register</title>

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

	<?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($url, 'error=empty') !== false) {
					print "Fill out all fields";	
					
				}
				
				
				if (strpos($url, 'error=id') !== false) {
					print "Username Existed!";
					
				}
				
				if (strpos($url, 'error=username') !== false) {
					print "Please enter your username"; 
					
				}
				
				if (strpos($url, 'error=password') !== false) {
					print "Please enter your password"; 
					
				}
				
				 if (strpos($url, 'error=conpassword') !== false) {
					print "Your confirmed password does not match the original password"; 
				}
				
				 if (strpos($url, 'error=email') !== false) {
					print "Please enter your email address"; 
				}
			
				?>
				
	<!-- Page Header -->
    <header class="masthead" style="background-image: url('Image/register.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
			<h1>REGISTER</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
	
	<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Sign Up</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form  action="SignUpDatabase.php" method="POST">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" required data-validation-required-message="Please enter your username." value="<?php if (isset ($_POST['username'])) {print htmlspecialchars($_POST['username']); } ?>"/>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address."  value="<?php if (isset ($_POST['email'])) {print htmlspecialchars($_POST['email']); } ?>"/>
                <p class="help-block text-danger"></p>
              </div>
            </div>
			<div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required data-validation-required-message="Please enter your password." value="<?php if (isset ($_POST['password'])) {print htmlspecialchars($_POST['password']); } ?>"/>
                <p class="help-block text-danger"></p>
              </div>
            </div>
			<div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" id="conpassword" name="conpassword" required data-validation-required-message="Please enter your confirm password." value="<?php if (isset ($_POST['conpassword'])) {print htmlspecialchars($_POST['conpassword']); } ?>"/>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
           
            <div class="form-group">
              <button type="submit" class="btn btn-secondary">Register</button>
            </div>
			<div class="container">
			<a href="Login.php">Already a member? Sign in here!</a>
			</div>
          </form>
        </div>
      </div>
    </div>
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