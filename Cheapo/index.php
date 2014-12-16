<?php
$errorMessage = '';

if (isset($_POST['login']) && $_POST['login'] == 'Login') {
    include login.php;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE username = '$username' and password = '$password'";
    $result = $db_con->query($sql);

    if ($result->num_rows == 1) {
        header("Location: homepage.html");
        exit;
    } else {
        $errorMessage = "Incorrect username and password";
    }
}
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Cheapo-Mail</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	
</head>
<body>

	<div class="container">
		
		<div class="form-bg">
			<form action="loginpage.php" method="post">
				<div class="header">
					<h3 style="text-align:center">
						Cheapo-Mail
					</h3>
				</div>
				<hr>
				<br>
				<p><?php echo $errorMessage; ?></p>
				<p><input type="text" name="username" placeholder="User Name"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<input type="Submit" name="login" value="Login" />
			<form>
		</div>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
</body>
</html>