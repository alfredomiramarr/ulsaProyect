<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
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
	<a href="logout.php" align="right">SALIR</a>
	
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
  <a href="home.php">Inicio</a>
  <a class="active" href="#news">Nuevo Registro</a>
  <a href="cat_zonas.php">Catálogos</a>

  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
</div>
	
	<div class="container-login100" style="background-image: url('images/banana-crop.jpg');">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
			<form class="login100-form validate-form" method="POST" action="alta_cultivo.php">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					New Crop
				</span>

				<div class="wrap-input100 validate-input m-b-20" >
					<input class="input100" type="text" name="n" placeholder="Nombre del cultivo" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" >
					<input class="input100" type="text" name="l" placeholder="Zona del cultivo" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" >
					<input class="input100" type="text" name="t" placeholder="Tipo de cultivo" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" >
					<input class="input100" type="text" name="q" placeholder="Cantidad sembrada" required="required">
					<span class="focus-input100"></span>
				</div>
				
				
				
				<div class="container-login100-form-btn">
					<button type="submit"  name="sub_button" value="Add" class="login100-form-btn">
						Registrar Cultivo
					</button>

				</div>
			</form>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

</body>
</html>