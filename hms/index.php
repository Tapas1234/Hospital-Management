<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <marquee direction="right"><a class="navbar-brand" href="#"><h3>Dr. Pramanik-Roy Hospital</h3></a></marquee>
     <ul class="navbar-nav mr-auto">
</nav>
</head>
<style type="text/css">
	#ab1:hover{cursor:pointer;}
</style>
<body style="background:url('images/2.jpg') no-repeat; background-size:cover;">
<div class="container" style="width:400px;margin-top:135px;">
	<div class="card">
	<img src="images/1.jpg" class="card-img-top">
	<div class="card-body">
	<form class="form-group" action="func.php" method="post">
		<label>Username :</label><br>
		<input type="text" name="username" class="form-control" placeholder="Enter username" required><br>
		<label>Password :</label><br>
		<input type="Password" name="password" class="form-control" placeholder="Enter password" required><br>
		<input type="submit" name="login_submit" class="btn btn-primary">
		<input type="reset" class="btn btn-primary"value="Clear"/>
	</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.7/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			Swal.fire({
						  title: 'Welcome!',
						  text: ' Have a nice day! ',
						  imageUrl: 'images/4.jpg',
						  imageWidth: 400,
						  imageHeight: 250,
						  imageAlt: 'Custom image',
						  animation: true,
					})
});
</script>
</html>