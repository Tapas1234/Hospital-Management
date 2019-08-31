<!DOCTYPE html>
<html>
<head>
	<title>Update Payment Status</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <marquee direction="right"><a class="navbar-brand" href="#"><h3>Dr. Pramanik-Roy Hospital</h3></a></marquee>
     <ul class="navbar-nav mr-auto">
       <li>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
</nav>
</head>
<body>
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat; background-size:cover;height:250px;"></div>
<div class="container-fluid">
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB;">Patient Corner</a>
			<a href="admin-panel.php" class="list-group-item">Make Appointment</a>
			<a href="patient_details.php" class="list-group-item">Patient Details</a>
			<a href="update.php" class="list-group-item">Update Payment Status</a>
			</div>
			<hr>
			<div class="list-group">
			<a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB;">About</a>
			<a href="about.php" class="list-group-item">About Us</a>
			<a href="doctor.php" class="list-group-item">Doctors</a>
			<a href="contact.php" class="list-group-item">Contact Us</a>
			</div>
		</div>	
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
			Update Payment Status
		</div>
			<div class="card-body"></div>
			<form class="form-group" action="func.php" method="post">

			<label>Contact :</label>
			<input type="text" name="contact" class="form-control" required><br>
	
			<select class="form-control" name="payment">
			
				<option value="Paid">Paid</option>
				<!-- <option value="Pay Later">Pay Later</option> -->
			</select><br>
			<input type="submit" class="btn btn-primary"name="update_data" value="Update">
			<input type="reset" class="btn btn-primary" value="Clear">
			</form>
		</div>
	</div>
</div>
	<div class="col-md-1"></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>