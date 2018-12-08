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
		include 'DatabaseLink.php';
 ?>
 
	<section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Gallery</h2>
            <p class="text-faded mb-4"></p>
			<br>
			<br>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="Upload.php">Upload!</a>
          </div>
        </div>
      </div>
    </section>

  <div class="container" style="margin: 0 auto 0 auto">


    <div class="row text-center text-lg-left">

      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="image/gallery/1.jpeg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/1.jpeg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Vintage Cityscape</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="image/gallery/2.jpeg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/2.jpeg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Polaroid Retro</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="image/gallery/3.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/3.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Beef Jalepeno</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="image/gallery/4.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/4.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Ford GT </font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/5.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/5.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Railway </font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/6.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/6.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Skyscrappers </font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/7.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/7.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Wassily Kandinsky</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/8.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/8.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Mountains</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/9.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/9.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Cloud, Summer</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/10.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/10.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Bucovina Romania</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/11.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/11.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Abendstimmung</font>
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <br/>
        <a href="image/gallery/12.jpg" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="image/gallery/12.jpg" alt="City">
          <font size="4" color="rgb(2, 9, 77)">Maple Leaves</font>
        </a>
      </div>
	  
<?php
	$sql = "SELECT * FROM upload  ORDER BY  loadid";
	$query_run = mysqli_query($conn,$sql);
    
	if(mysqli_affected_rows($conn)!== 0)
	{
		$query_row = mysqli_fetch_array($query_run);
		$index = $query_row['loadid'];

		$sql2 = "SELECT * FROM upload ORDER BY loadid DESC";
		$query_run2 = mysqli_query($conn,$sql2);
		
		if(mysqli_affected_rows($conn)!== 0)
		{
			$query_row2 = mysqli_fetch_array($query_run2);
			$limit = $query_row2['loadid'];

			while ($index <= $limit)
			{

				$sql3 = "SELECT * FROM upload WHERE loadid = '$index'";
				$query_run3 = mysqli_query($conn,$sql3);
    
				if(mysqli_affected_rows($conn)!== 0)
				{
					$query_row3 = mysqli_fetch_array($query_run3);
					$pic = $query_row3['loadimage'];
					$caption = $query_row3['loadcaption'];
?>

					<div class="col-lg-3 col-md-4 col-xs-6">
						<br/>
						<a href="<?php echo $pic; ?>" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="<?php echo $pic; ?>" alt="City">
						<font size="4" color="rgb(2, 9, 77)"><?php echo $caption; ?></font>
					</a>
					</div>
<?php
				}

				else {

				}
				$index += 1;

			}
		}
	}
?>

</div>

</div>
</body>

</html>