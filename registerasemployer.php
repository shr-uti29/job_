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
	
	<div class="bkgimg" style="height: auto;">
		<br>
		<div class="reg">
			<h2 style="text-align: center;"><b>Company Registration</b></h2>
			<p>Please enter the following details:-</p>
			<form action="registrationasemployer.php" method="post">
				<label for="ename">Name*</label>
		  		<input type="text" id="ename" name="ename" required><br><br>
		  		<label for="econtactNumber">Contact Number*</label>
		  		<input type="tel" id="econtactNumber" name="econtactNumber" pattern="[0-9]{10}" required><br><br>
		  		<label for="eaddress">Address*</label>
		  		<input type="text" id="elocality" name="elocality" placeholder="Locality" required>
		  		<input type="text" id="ecity" name="ecity" placeholder="City" required>
		  		<input type="text" id="estate" name="estate" placeholder="State" required><br><br>
		  		<label for="gst">GST Number*</label>
		  		<input type="text" id="gst" name="gst" required ><br><br>
				<label for="aboutus">About Us*</label>
		  		<input type="text" id="aboutus" name="aboutus" required ><br><br>
		  		<label for="eemail">Email Id*</label><br>
		  		<input type="email" id="eemail" name="eemail" required ><br><br>
		  		<label for="epassword">Password*</label>
		  		<input type="password" id="epassword" name="epassword" required ><br><br>
		  		<button type="submit" class="btn">Register</button><br><br>
			</form>
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>