<!DOCTYPE html>
<html>
<head>
	<title>Bangladesh Railway</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.col-sm-4{border: 3px solid #000;}
	</style>
</head>

<body>
<div class="container-fluid">
<?php include_once ('common/header.php'); ?>
<!--  -->
<div class="row">
	<div class="col-sm-4 col-sm-offset-1">
	<form method ="get" action="">
		<h3 class="text-center">Train Schedule</h3>
		<div>
			<label>From</label>
			<select class="form-control"  name="from">  
			<option>Select Station</option>
			<?php
				include "connection.php"; 
			    $get = "select * FROM location ";
				$run = mysqli_query($connection,$get);
				while ($row=mysqli_fetch_array($run)){
				$tid =$row['tid'];
			    $station =$row['station'];
				//$tm =$row['time'];
			   // $valuetrain=$train." ".$tm;
			    echo "<option value='$station'>$station</option>";
				}
			?>
			</select>
		</div>
		<br> <br>
		<div>
			<label>To</label>
			<select class="form-control" name="to">  
			<option>Select Destination</option>
			<?php
				include "connection.php"; 
			    $get = "select * FROM location ";
				$run = mysqli_query($connection,$get);
				while ($row=mysqli_fetch_array($run)){
				$tid =$row['tid'];
			    $destination =$row['des'];
				//$tm =$row['time'];
			   // $valuetrain=$train." ".$tm;
			    echo "<option value='$destination'>$destination</option>";
						
				}
			?>
			</select>
		</div>	<br>
		<input type ="submit" class ="btn btn-primary " name ="bt" value="Show Schedule" style="margin-bottom: 10px;" />
	</form>
	</div>
	<div class="col-sm-2"></div>
	<div class="col-sm-4 text-center">
		<h3> Train Schedule </h3>
		<?php
			include "connection.php";
			if(isset($_GET['bt'])){
				$from=$_GET['from'];
				$to=$_GET['to'];
				
				$query=("SELECT station, des, time,train FROM t_time WHERE station ='$from' and des='$to' ");
				$result=mysqli_query($connection,$query);
				//$row = mysqli_fetch_array($result);
			    //echo $row['station']." To ".$row['des'];
					//$query="insert into singup(name,email,mobile,pass,repass)values('$name','$email','$mobi','$password','$repassword');";
			//$result = mysqli_query($connection,$query);
				while($row = mysqli_fetch_array($result)){
				//echo $row['station']." To ".$row['des']."<br>Departure Time ".$row['time']."<br>";
				echo $row['train']." : ".$row['time']."<br>";
				}
			}
		?>
	</div>
</div>
<!--main class end here-->
<div class="row" style="height: 50px;">

</div>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>