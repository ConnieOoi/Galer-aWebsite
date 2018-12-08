<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<!-- Bootstrap core CSS -->
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="CSS.css">

<?php
		include_once 'Header.php';
 ?>

<style>
.mySlides {display:block;}
</style>

<div class="w3-content-w3-section" style="max-width:100%">
 <img class="mySlides w3-animate-left" src="image/home1.jpg" style="width:110%">
 <div class="w3-display-middle w3-xxxlarge w3-animate-fading w3-text-sand ">

	<?php
	 if(!isset($_SESSION['username'])  || empty($_SESSION['username'])) {
					echo 'Welcome';
						} else {
					echo 'Welcome ' . $_SESSION['username'];
								}; 
	?>
	 
 </div>

 <img class="mySlides w3-animate-left" src="image/home02.jpg" style="width:110%">
 <div class="w3-display-middle w3-xxxlarge w3-animate-fading  w3-text-sand">
	 <?php
	 if(!isset($_SESSION['username'])  || empty($_SESSION['username'])) {
					echo 'Welcome ';
						} else {
					echo 'Welcome ' . $_SESSION['username'];
								}; 
	?>
 </div>

 <img class="mySlides w3-animate-left" src="image/home03.jpg" style="width:110%">
 <div class="w3-display-middle w3-xxxlarge w3-animate-fading  w3-text-sand">
	 <?php
	 if(!isset($_SESSION['username'])  || empty($_SESSION['username'])) {
					echo 'Welcome';
						} else {
					echo 'Welcome ' . $_SESSION['username'];
								}; 
	?>
 </div>
 
 <img class="mySlides w3-animate-left" src="image/home4.jpg" style="width:110%">
 <div class="w3-display-middle w3-xxxlarge w3-animate-fading  w3-text-sand">
	 <?php
	 if(!isset($_SESSION['username'])  || empty($_SESSION['username'])) {
					echo 'Welcome';
						} else {
					echo 'Welcome ' . $_SESSION['username'];
								}; 
	?>
 </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
	 var i;
	 var x = document.getElementsByClassName("mySlides");
	 for (i = 0; i < x.length; i++) {
		 x[i].style.display = "none";
	 }
	 myIndex++;
	 if (myIndex > x.length) {myIndex = 1}
	 x[myIndex-1].style.display = "block";
	 setTimeout(carousel, 5000);
}
</script>



</body>
</html>
