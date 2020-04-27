<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="center" background="FFFBB5">
	<a href="alfredo/NewProyect/home.php"> CHIQUITA BANANA  </a>
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

	<?php if(!empty($user)):
	//echo "WELCOME'".$row['Admin_name']."' '".$row['Admin_Last_Name'];?>
	<br> YOU ARE SUCCESSFULLY LOGGED IN
	<a href="logout.php">LOGOUT</a>
	
	<?php endif; ?>


	<div class="topnav">
	  <a href="home.php">Home</a>
	  <a href="crop.php">New Crop</a>
	  <a class="active"href="#contact">Catalogos</a>

	  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
	</div>
	<div class="topnav">
	  <a href="section.php">ZONAS</a>
	  <a class="active" href="cat_cultivos.php">CULTIVOS</a>
	  <a href="cat_tratamientos.php">TRATAMIENTOS</a>

	  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
	</div>
		
		<div class="container-login100" style="background-image: url('images/banana-back.jpg');">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<h1>CULTIVOS</h1>
</head>
			<table>
					<tr>
				
					<th>NOMBRE DE CULTIVO</th>
					<th>LOCACION</th>
					<th>TIPO DE CULTIVO</th>
					<th>CANTIDAD</th>
					
					
					</tr>

					<?php
					//include("include/conexion.php");
					$sql = "SELECT * FROM T_Crop;";
					$result = mysqli_query($conexion,$sql);

					if($result) {

					while ($row =mysqli_fetch_assoc($result)){

					echo "<tr>";
					
					echo "<td> ". $row ["Crop_Name"]. "</td>";
					echo "<td> ". $row ["Crop_Location"]. "</td>";
					echo "<td> ". $row ["Crop_Type"]. "</td>";
					echo "<td> ". $row ["Crop_Quant"]. "</td>";
					
					echo "<td> . <a href 'editar.php?no=".$row["Crop_ID"]."'> <button type='submit' class='ed'>Editar</button></a></td>";
					echo "<td> . <a href 'modificar.php?no=".$row["Crop_ID"]."'> <button type='submit' class='el'>Eliminar</button></a></td>";
					
					
					echo "</tr>";
					}
					foreach($result as $row){

					}

					} else {
					echo "Error";
					}
					?>
				
		</table>
		<div class="text-center p-t-40 p-b-20">
					<a href="crop.php"class="txt1">
						New Crop
					</a>
				</div>
		</div>
		
					</div>
				</form>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>