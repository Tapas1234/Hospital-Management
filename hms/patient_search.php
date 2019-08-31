<html>
<head>
	<title>Patient Search</title>
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
<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top:50px;'>
	<div class'card'>
	<div class='card-body'><a href='patient_details.php' class='btn btn-dark'>Back</a></div>
	<img src='images/3.jpg' class='card-img-top' height='250px;'>
	<div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
	<table class='table table-hover'>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Contact</th>
      <th>Email id</th>
      <th>Doctor Appointment</th>
      <th>Payment Status</th>
    </tr>
  </thead>
  <tbody>
	";
	while($row=mysqli_fetch_array($result)){
		$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	$payment=$row['payment'];
	echo "  <tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$contact</td>
      <td>$email</td>
      <td>$docapp</td>
      <td>$payment</td>
    </tr>";
	}
	echo "</tbody></table></div></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
