<?php
/*
Author: Dheka
*/

	require('model/koneksi.php')
	session_start();
	// if form submitted, insert value into the database
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = stripslashed($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashed($password);
		$password = mysql_real_escape_string($password);
	// checking is user existing in the database or not
		$query = "SELECT * FROM ' user ' WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
		if($rows==1){
			$_SESSION['username'] = $username
			header("location: index.php");
			}else{
				echo "<div class='form'><h3>username dan password anda salah<br>
				Silahkan Klik Login.
				</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
	}else{
	
echo '
<!DOCTYPE html>
<!--[if !IE]><!--><html lang="en"> <!--<![endif]-->

<!-- Begin Head -->
<head>
		<meta charset="UTF-8" />
	<title>FIT Solusion Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name"decription" />
	<meta content="" name="author" />
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<!-- Global Style -->
		 <!-- Page Style -->
		 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/login.css" />
		<link rel="stylesheet" href="assets/plugins/magic/magic.css" />
		<!-- End Page Level Style -->
		<!-- HTML5 shim and respond.js IE8 support of HTML5 elements and media queries -->
		<!-- [if it IE 9] -->
		   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		   <script src="https://pss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif] -->
</head>
	<!-- End Head -->
	
	<!-- Begin Body -->
<body>

	<!-- Page Content -->
	<div class="container">
	<div class="text-centre">
		<img src="assest/img/logo.png" id="logoimg" alt="Logo" />
	</div>
	<div class="tab-content">
	<!-- Untuk Login -->
		<div id="login" class="tab-pane active">
			<form action="" class="form-signin" method="POST" name="login">
				<p class="text-muted text-center btn-block btn btn-primary btn-rect">
					Enter You Username and Password
				</p>
				<input type="text" placeholder="Username" name="username" class="form-control" />
				<input type="password" placeholder="Password" name="password" class="form-control" />
				<button class="btn text-muted text-center btn-danger" type="submit" name="submit"> Sign In </button>
			</form>
		</div>
		<!-- untuk lupa password -->
		<div id="forgot" class="tab-pane">
			<form action="index.html" class="form-signin">
				<p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter You Valid Email</p>
				<input type="email" required="required" placeholder="Your Email" class="form-control" />
				<br />
				<button class="btn text-muted text-center btn-success" type="sumbit">Recover Password</button>
			</form>
		</div>
		<!--Untuk registrasi-->
		<div id"signup" class="tab-pane">
			<form action="index.html" class="form-signin">
				<p class="text-muted text-center btn-block btn btn-primary btn-rect" />Please Fill Details To Register</p>
				<input type="text" placeholder="First Name" class="form-control />
				<input type="text" placeholder="Last Name" class="form-control" />
				<input type="text" placeholder="Username" class="form-control" />
				<input type="text" placeholder="Your Email" class="form-control" />
				<input type="text" placeholder="password" class="form-control" />
				<input type="text" placeholder="Re Type Passsword" class="form-control" />
				<button class="btn text-muted text-center btn-success" type="submit"> Register</button>
			</form>
		</div>
	</div>
	<div class="text-center">
		<ul class="list-inline">
			<li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
			<li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
			<li><a class="text-muted" href="#signup" data-toggle="tab">SignUp</a></li>
		</ul>
	</div>
	
	
</div>';

}

echo'
		<!-- End Page Content -->
		
		<!-- Page Level Script -->
		<script src="assest/plugins/jquery-2.0.3.min.js"></script>
		<script src="assest/plugins/bootstarp/js/bootstrap.js"></script>
	<script src="assest/js/login.js"></script>
		<!-- End Page Level Script -->
		
</body>
	<!-- End body -->
</html>';
?>	