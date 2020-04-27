<?php

	//ini_set('display_errors', 1);
	//ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);
	
	require "conexion.php";
	
	$cropName = htmlspecialchars($_POST['crop_name']);
	$cropLocation = htmlspecialchars($_POST["crop_location"]);
	$cropType = htmlspecialchars($_POST["crop_type"]);
	$cropQuant = htmlspecialchars($_POST["crop_quantity"]);

	echo $cropName;
	echo $cropLocation;
	echo $cropType;
	echo $cropQuant;
	
	if(!empty($_POST['crop_name']) && !empty($_POST['crop_location']) && !empty($_POST['crop_type']) && !empty($_POST['crop_quantity'])) {
		$sql= "INSERT INTO T_Crop (Crop_Name, Crop_Location, Crop_Type, Crop_Quant) 
		VALUES ('".$cropName."', '".$cropLocation."', '".$cropType."', '".$cropQuant."')";
	}
	echo $sql;

	$result = $conexion->query($sql);

	if($result){
		echo "Registroo insertado correctamente.";
		} else {
			echo "Fallo al insertar";
			}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="center" background="FFFBB5">
	<a href="home.php"> CHIQUITA BANANA  </a>
	<img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52">
	
	</header>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icon-banana.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css">
<!--NO===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/select2.min.css">
<!--===============================================================================================--NO-->	
	<link rel="stylesheet" type="text/css" href="style/css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/util.css">
	<link rel="stylesheet" type="text/css" href="style/css/main.css">
	<link rel="stylesheet" href="style/css/menu-bar.css">
<!--===============================================================================================-->
</head>
<body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a class="active" href="#news">New Crop</a>
  <a href="section.php">Catalogos</a>

  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
</div>
	
	<div class="container-login100" style="background-image: url('images/banana-crop.jpg');">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
			<form class="login100-form validate-form" method="post" action="">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					New Crop
				</span>

				<div class="wrap-input100 validate-input m-b-20" >
					<input class="input100" type="crop_name" name="crop_name" placeholder="Crop Name" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" >
					<input class="input100" type="crop_location" name="crop_location" placeholder="Crop Location" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" >
					<input class="input100" type="crop_type" name="crop_type" placeholder="Crop Type" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" >
					<input class="input100" type="crop_quantity" name="crop_quantity" placeholder="Crop Quantity" required="required">
					<span class="focus-input100"></span>
				</div>
				
				
				
				<div class="container-login100-form-btn">
					<button type="submit"  name="sub_button" value="Add" class="login100-form-btn">
						Add Crop
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

</body>
</html>