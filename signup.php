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

<!--main class start here-->

<div class="container-fluid">
<div class="col-sm-6">
	<form method ="post" action="">
		<div class="form-group">
			<label>Name*</label> <input name ="name" type ="text" class="form-control" placeholder="Enter Your Full name" required>
		</div>
		<div class="form-group">
			<label>E-mail*</label> <input type="email" name="mail" class="form-control" placeholder="Enter An Valid Email" required/>
		</div>
		<div class="form-group">
			<label>Moblie No*</label> <input type="tel" name="mobi" class="form-control" placeholder="Your Moblie Number" required/>
		</div>
		<div class="form-group">
			<label>Password*</label> <input type ="password" name ="passwor" class="form-control" placeholder="Type a pssword" quired/>
		</div>
		<div>
			<labe> Re-Enter Password* </label> <input type ="password" name ="repassword" class="form-control" placeholder="Retype Password" required/>
		</div> <br>
		<input type ="submit" class ="btn btn-primary" name ="bt" value="Submit" />
	</form>
</div> <div class="col-sm-1"></div>
	<div class="col-sm-4">
		<center><h3> Sing Up Rules </h3> <hr> </center>
		<ul class="text-justify" style="font-size: 18px;">
			<li>For sing up you have to fill up the form your email and password will need then you want to login.</li>
			<li>
			Use a valid email. Conformation link will sent to your email address.</li>
			<li>Then LOGIN your Account</li>
		</ul>
	</div>
</div>

<?php
include "connection.php";
// if(isset($_POST['bt'])){
// 	$name=$_POST['name'];
// 	$email=$_POST['mail'];
// 	$mobi=$_POST['mobi'];
// 	$password=$_POST['password'];
// 	$repassword=$_POST['repassword'];
// 	if($password<>$repassword || $name==null||$email==null||$mobi==null||$password==null ){
		
// 		if($password<>$repassword){echo "<script>window.alert('Password Mismatch')</script>";}
		
//        else{echo "<script>window.alert('Please Fill All Section')</script>";}

// 	//echo "Kayword Error";
// 	}
// 	else{
// 		$query="insert into singup(name,email,mobile,pass)values('$name','$email','$mobi',md5('$password'));";
// $result = mysqli_query($connection,$query);
	
// 	if($result){
// 	echo "<script>window.alert('Your Account is ready please login')</script>";
// 	header("refresh:2;url=login.php");
// 	}
// 	else{
		
// 		echo "<script>window.alert('Email Already Used')</script>";
		
// 		}
// 	}	
// }


if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $name=$_POST['name'];
	$email=$_POST['mail'];
	$mobi=$_POST['mobi'];
	$passwor=$_POST['passwor'];
	$repassword=$_POST['repassword'];
     if($passwor<>$repassword || $name==null||$email==null||$mobi==null||$passwor==null ){

	//echo "Kayword Error";
	}else{
		$query="insert into singup(name,email,mobile,pass)values('$name','$email','$mobi',md5('$passwor'));";
         $result = mysqli_query($connection,$query);
	
	if($result){
	echo "<script>window.alert('Your Account is ready please login')</script>";
	header("refresh:2;url=login.php");
	}
	else{
		
		echo "<script>window.alert('Email Already Used')</script>";
		
		}
	}	

    }


?>
<!--main class end here-->

<div class="container-fluid"> <?php include ('common/footer.php'); ?> </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>