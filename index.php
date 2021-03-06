<!DOCTYPE html>
<html>
<head>
	<title>S-THR3E Jobs Portal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/js/jobs.js"></script>
	<link rel="stylesheet" href="assets/css/styling.css">
</head>
<body>
	
	<?php include('headerhome.php'); ?>
	<br>
	
	<div class="content">
		<div class="container" id="con">
	  		<div id="myCarousel" class="carousel slide" data-ride="carousel">    		
	    		<div class="carousel-inner" role="listbox">
					<div class="item active">
	        			<img src="assets/images/slider1.jpg" >
	      			</div>
					<div class="item">
	        			<img src="assets/images/slider2.jpg">
					</div>
	    			<div class="item">
	        			<img src="assets/images/slider3.jpg" id="slider3">
	       			</div> 
	       			<div class="item">
	       				<img src="assets/images/slider4.jpg">
	       			</div>
	      
	    			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      				<span class="sr-only">Previous</span>
	    			</a>
	    			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      				<span class="sr-only">Next</span>
	    			</a>
	  			</div>
	  		</div>
	  		<br>
	  	  	<div id="para1">
	  			The <b>S-THR3E Jobs Portal</b> has been created with the objective of enabling the unemployed youth in this country to find employment with the help of various skills and to overcome the problem of shortage of workers so that the industries can carry out their work smoothly. We are constantly striving to provide the best service to job seekers and entrepreneurs. Covid-19 was recognized not only as a health crisis but also as an economic crisis globally. Measures taken to curb the spread of the virus have led to an economic downturn. The manpower needs of the industry need to be met while responding to the current crisis.The <b>S-THR3E Jobs Portal</b> aims to revive the economy of this country from an industry perspective, keeping in view the need for skilled manpower.
	  		</div>
	  		<div id="objective">
	  			The portal has the following objectives:
				<ul id="ob">
					<li>The link between job seekers and entrepreneurs.</li>
					<li>Reducing the gap between demand and supply of manpower in different types of skills.</li>
					<li>Enabling industries to operate seamlessly.</li>
					<li>To create a permanent system of skilled manpower for industries to get suitable local workers.</li>
				</ul>
	  		</div>
	  	</div>
  	</div>
  	<br>
  	<div class="footer">
  		<div id="jobreg" >
  			<div class="forjobimg">
  				<img src="assets/images/jobimg.png" class="templateimg">
  			</div>
  			<a href="registerasseeker.php" >Register as Job Seeker</a>
  		</div>

  		<div id="comreg">
  			<div class="forempimg">
  				<img src="assets/images/employer.png" class="templateimg">
  			</div>
  			<a href="registerasemployer.php" >Register as Employer</a>
  		</div>
  	</div>
  	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>