<!DOCTYPE>
<html>
<head>
	<title>Bangladesh Railway</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">

	</style>
</head>
<body>
<?php include ('common/header.php'); ?>

<div class="container-fluid">
	<?php
	// Start the session
	session_start();
	?>
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form method ="post" action="action.php">
			<div class="form-group">
				<label>E-mail</label> <input type="email" name="usremail" placeholder="Enter Your Email Here" class="form-control">
			</div>
			<div>
				<label>Password</label> <input type ="password" name ="password" placeholder="Enter Your Password" class="form-control" /> <br>
			</div>
			<input type ="submit" class ="btn btn-primary form-control" name ="bt" value="Login" />
			<hr>If Forget Password <a href="forget.php" style="color: #000;">Click Here</a>
		</form> <hr>
		<h4>If you Don't Have Account Yet !!</h4>
		<form action="signup.php" method="">
			 <button  class ="btn btn-info" type="submit">Create</button>
		</form>
	</div>
	</div>
<!--main class end here-->
</div>

<div class="container-fluid"> <?php include ('common/footer.php'); ?> </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>