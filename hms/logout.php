<!DOCTYPE html>
<html>
<head>
	<title>Logged out</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <marquee direction="right"><a class="navbar-brand" href="#"><h3>Dr. Pramanik-Roy Hospital</h3></a></marquee>
     <ul class="navbar-nav mr-auto">
</nav>
</head>
<body>
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat; background-size:cover;height:250px;"></div>
	<div class="col-md-1">
		<a href="index.php" class="btn btn-dark">Back To Login</a>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.7/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			Swal.fire({
						  title: 'Logout successfull',
						  text: ' Session Expired! ',
						  imageUrl: 'images/4.jpg',
						  imageWidth: 400,
						  imageHeight: 250,
						  imageAlt: 'Custom image',
						  animation: true
					})
});
</script>
</body>
</html>