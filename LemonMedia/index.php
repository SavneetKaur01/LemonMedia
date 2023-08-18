<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LemonMedia</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="navigation" >
    <nav class="navbar navbar-expand-lg "> <!-- Use "navbar-light" for light background or "navbar-dark" for dark background -->
      <div class="container-fluid">
      	<p class="navbar-brand logo" >LemonMedia</p>
        <!-- <img class="navbar-brand" src="images/logo1.png"> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           		<li class="nav-item">
		          <a class="nav-link" aria-current="page" href="#">Home</a>
		        </li>
		        <!-- <li class="nav-item">
		          <a class="nav-link" href="#">Locations</a>
		        </li> -->
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Free Courses
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="#udemy">Udemy Courses</a></li>
		          </ul>
		      	</li>
		      	<li class="nav-item">
		          <a class="nav-link" href="#">Internships</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="about.html">About Us</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="#con">Contact Us</a>
		        </li>
		      
		      	<!-- <li class="nav-item">
		      		<button class="btn btn-primary ">Download</button>
		  		</li> -->
			  	</ul>
			 </div>
	      </div>
	    </nav>
	</div>

	<div class="main" id="udemy">
		<h3>Find your Udemy course</h3>
		</div>
		<div class="course_container">
		<div class="row">
			<!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
					<!-- <div class="course_container"> -->
							<?php include 'get_courses.php'; ?>
					<!-- </div> -->
				<!-- </div>			 -->
			</div>
			</div>

			<div class="foot_grid">

	 			<div>
	 				<p style="font-size:30px">About LemonMedia</p>
	 				<a href="https://www.linkedin.com/company/coursearena/"><img src="images/link.png" alt="LinkedIn" style="width:30px;height: 30px; margin:10px;"></a>
	 				<a href="https://t.me/Coursearena"><img src="images/tele.png" alt="Telegram" style="width:30px; height:30px;margin:10px;"></a>
	 				<!-- <a href="#"><img src="images/twitter.png" alt="Twitter" style="width:30px; height:30px;margin: 10px;"></a> -->
	 			</div>
	 			<div class="foot_link" style="margin-left: 30px;">
	 				<h5>Useful Links</h5>
	 				<li><a href="#">Home</a></li>
	 				<li><a href="about.html">About Us</a></li>
	 				<li><a href="team.html">Our Team</a></li>
	 				<li><a href="#">Submit Coupon</a></li>
	 				<li><a href="disclaimer.html" target="_blank">Disclaimer</a></li>
	 				<li><a href="https://chat.whatsapp.com/GqXD9WguuEl4plWgKGLMVn">Join Our Group</a></li>
	 				<li><a href="#">Donate</a></li>
	 			</div>
	 			<div class="foot_link" id="con">
	 				<h5>Contact Us</h5>
	 				<p>Mumbai,India</p>
	 				<p>Email: contactlemonmedia@gmail.com</p>
	 				<!-- <p>Phone Number: +91 2347654123</p> -->
	 			</div>	 			

	 		</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>