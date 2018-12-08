<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<!-- Bootstrap core CSS -->
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="style.css">

<?php
		include_once 'Header.php';
 ?>
 
	<section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">UPLOAD</h2>
            <p class="text-faded mb-4"></p>
			<br>
			<br>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="Upload.php">UPLOAD</a>
			<a class="btn btn-light btn-xl js-scroll-trigger" href="Delete.php">DELETE</a>
          </div>
        </div>
      </div>
    </section>
	

		<div class = "main" align="center">

			<form action="uploadphoto.php" method="POST" enctype="multipart/form-data" >

				<table style="align:center; margin-top: 20px">
					<tr>
						<th>Image : </th>
						<th><input type="file" name="Image" text-align:"center" required="required"><br> </th> 
					</tr>
					<br>
					<tr>
						<th>Caption : </th>
						<td><input type="text" name="Caption"  text-align:"center" required="required"></td>
					</tr>
				</table> 
					<br>
					<br>
				<button type="submit" name="Upload">Upload!</button>

			</form>
		</div>
	