<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<!-- Bootstrap core CSS -->
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="CSS.css">

<!-- Custom fonts for this template -->
    <link href="Assignmentphp/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<!-- Plugin CSS -->
    <link href="Assignmentphp/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Assignmentphp/css/creative.min.css" rel="stylesheet">

<?php
		include_once 'Header.php';
 ?>
 
     <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Welcome To Galería</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Let's check out amazing photos in our website</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Here got all kind of Pictures!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"></p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#portfolio">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/gallery/3.jpg">
              <img class="img-fluid" src="image/gallery/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Beef Jalepeno
                  </div>
                </div>
              </div>
            </a>
          </div>
		  
		  <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/gallery/6.jpg">
              <img class="img-fluid" src="image/gallery/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Skyscrappers
                  </div>
                </div>
              </div>
            </a>
          </div>
		  
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/gallery/sunmoonlake.jpg">
              <img class="img-fluid" src="image/gallery/sunmoonlake.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Sun Moon Lake
                  </div>
                </div>
              </div>
            </a>
          </div>
		  
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/gallery/11.jpg">
              <img class="img-fluid" src="image/gallery/11.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Sunset View
                  </div>
                </div>
              </div>
            </a>
          </div>
		  
		  <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/gallery/8.jpg">
              <img class="img-fluid" src="image/gallery/8.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Mountains
                  </div>
                </div>
              </div>
            </a>
          </div>
		  
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/gallery/7.jpg">
              <img class="img-fluid" src="image/gallery/7.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Wassily Kandinsky
                  </div>
                </div>
              </div>
            </a>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="Assignmentphp/vendor/jquery/jquery.min.js"></script>
    <script src="Assignmentphp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="Assignmentphp/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="Assignmentphp/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="Assignmentphp/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="Assignmentphp//js/creative.min.js"></script>

  </body>

</html>