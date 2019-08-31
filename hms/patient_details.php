<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
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
	<div class="container">
	<div class="card">
	<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
		<div class="row">
			<div class="col-md-1">
		<a href="admin-panel.php" class="btn btn-light">Back</a>
	</div>
	<div class="col-md-3"><h3>Patient Details</h3></div>
	<div class="col-md-8">
		<form class="form-group" action="patient_search.php" method="post">
			<div class="row">
				<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter Contact number"></div>
				<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div></div>
			</form>
			</div>
			</div>
		</div>
				
	<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor Appointment</th>
      <th scope="col">Payment Status</th>
      
      
    </tr>
  </thead>
  <tbody>
  	<?php get_patient_details(); ?>
  </tbody>
</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>