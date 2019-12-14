<!DOCTYPE html>
<html>
<head>
	<title>Bangladesh Railway</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">

	</style>
</head>
<body>
<?php include ('common/header.php'); ?>
<?php
	// Start the session
	session_start();
?>
<div class="container-fluid">

<div class="row">
	<div class="col-md-4 col-md-offset-4" style="background-color: #000; color: #fff;">
		<center> <h4 style="padding: 10px;">Change Your Passwor Here</h4> </center>
	</div>
</div>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h4 class="text-center">Enter Your Last Account Info Below</h4> <br>
		<form method ="post" action="">
			<div class="form-group">
				<label> E-mail </label> <input type="email" name="usremail" class="form-control" required>
			</div>
			<div>
				<label>Mobile No</label> <input type ="text" name ="mobi" class="form-control" required/>
			</div> <br>
			<input type ="submit" class ="btn btn-primary" name ="bt" value="Check mail" />
	</div> <br>
</div> <br>

<?php
	include "connection.php";
	if(isset($_POST['bt'])){
		$email=$_POST['usremail'];
		$mobi=$_POST['mobi'];
	 	$_SESSION["email"] = $email;
	     $_SESSION["mobi"] = $mobi;

	$query=("select * from singup where email='$email' and mobile ='$mobi' ");
	$result=mysqli_query($connection,$query);
	$row = mysqli_fetch_array($result);

	if($row['email']==$email && $row['mobile']==$mobi && $row['email']!=null){
		header("refresh:0;url=change.php");
		}
		else{
			echo "<script>window.alert('Information Wrong')</script>";
			header("refresh:0;url=forget.php");
			}
	}
	//} 
	//header("refresh:2;url=form.html");
?>
</div>

<div class="container-fluid"> <?php include ('common/footer.php'); ?> </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>