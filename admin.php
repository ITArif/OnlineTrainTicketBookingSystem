<!DOCTYPE html>
<html>
<head>
	<title>Bangladesh Railway</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.adminLogin{border:5px solid #000; border-radius: 5px;}
	</style>
</head>

<body>

<?php include_once ('common/header.php') ?>	

<div class="container-fluid">
<div class="row">
	<!--This is Admin Login Form!-->
	<div class="col-sm-4 col-sm-offset-4 adminLogin">
		<form method ="post" action="">
			<center> <h1>Admin Login</h1> </center>
			<div class="form-group">
				<label>User Name</label> <input type="text" class="form-control" name="user" required>
			</div>
			<div class="form-group">
				<label>Password</label> <input type ="password" class="form-control" name ="password" required/>
			</div>
			<input type ="submit" class ="btn btn-primary form-control" name ="bt" value="Login" />
		</form> <br>	
	</div>

	<?php
	if(isset($_POST['bt'])){
		$user=$_POST['user'];
		$pass=($_POST['password']);
		if($user=="admin"&& $pass=="admin"){
			header("refresh:0;url=addshedule.php");
		} else { echo "<script>window.alert('Password Mismatch or You ane not Admin')</script>";}
	}
	?>
</div><br>
</div>

<div class="container-fluid"> <?php include ('common/footer.php'); ?> </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>