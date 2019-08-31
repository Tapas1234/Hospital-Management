<?php
$con=mysqli_connect("localhost","root","root","hmsdb");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:admin-panel.php");
}
else
{
	echo "<script>alert('Incorrect Username or Password !')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	
}
}
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$payment=$_POST['payment'];
	$query="insert into doctorapp(fname,lname,email,contact,docapp,payment)values('$fname','$lname','$email','$contact','$docapp','$payment')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Appointment Registered Successfully !')</script>";
	echo "<script>window.open('admin-panel.php','_self')</script>";
	}
}
if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$payment=$_POST['payment'];
	$query="update doctorapp set payment='$payment' where contact='$contact';";
	$result=mysqli_query($con,$query);
	if($result)
		{
		echo "<script>alert('payment updated Successfully !')</script>";
	echo "<script>window.open('update.php','_self')</script>";
	}
		
}
function get_patient_details(){
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)) {
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	$payment=$row['payment'];
	echo "<tr>
	   <tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
      <td>$payment</td>
    </tr>";
	}
}
?>