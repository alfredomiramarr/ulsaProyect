<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require 'conexion.php';
	header("Content-Type: text/html; charset=ISO-8859-1", true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="right" background="white">
		<style>
				/*MENU TOP*/		
						/* Add a black background color to the top navigation */
			.topnav {
				font-family: 'Prompt', sans-serif;
			  background-color: white;
			  overflow: hidden;
			  margin: 5;
			  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			}

			/* Style the links inside the navigation bar */
			.topnav a {
			  float: left;
			  color: #000000;
			  text-align: right;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 15px;
			  font-family: 'Prompt', sans-serif;
			}

			/* Change the color of links on hover */
			.topnav a:hover {
			  background-color: #FFD74F;
			  color: black;
			  opacity: 0.5;
			}

			/* Add a color to the active/current link */
			.topnav a.active {
			  background-color: #FFD74F;
			  color: white;
			}
			.topnav a.out {
			  background-color: white;
			  color: black;
			  float: right;
			}
			/*BODY Y BACKGROUND*/
			.body{
				font-family: 'Prompt', sans-serif;
				background-image: url('images/tcultivocat.png');
				  background-repeat: no-repeat;
				  background-attachment: fixed;  
				  background-size: cover;
				  justify-content: center;

			}
			/*TABLA DEL FORMULARIO*/
			.tabla10 {
				  width: 1000px;
				  background-color: rgba(255,255,255,0.85);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: relative;
				  top: 45px;
				  margin: 0 auto;
				  z-index:10;
				  font-family: 'Prompt', sans-serif;
				  font-size: 15px;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				}
				/*==================================================================
				[ Form ]*/

				.login100-form {
				  width: 100%;
				  font-family: 'Prompt', sans-serif;
				}

				.login100-form-title {
				  display: block;
				  font-size: 30px;
				  color: #4b2354;
				  line-height: 1.2;
				  text-align: center;
				  font-family: 'Prompt', sans-serif;
				}
				/*------------------------------------------------------------------
				[ Button ]*/
				.container-login100-form-btn {
				  width: 100%;
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  flex-wrap: wrap;
				  justify-content: center;
				  font-family: 'Prompt', sans-serif;
				}

				.login100-form-btn {
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  justify-content: center;
				  align-items: center;
				  padding: 0 20px;
				  min-width: 160px;
				  height: 50px;
				  background-color: #FF8700;
				  border-radius: 25px;

				  font-family: 'Prompt', sans-serif;
				  font-size: 14px;
				  color: #fff;
				  line-height: 1.2;
				  text-transform: uppercase;

				  -webkit-transition: all 0.4s;
				  -o-transition: all 0.4s;
				  -moz-transition: all 0.4s;
				  transition: all 0.4s;

				  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
				  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
				  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
				  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
				  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
				}

				.login100-form-btn:hover {
				  background-color: #4b2354;
				  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				}
				/*------------------------------------------------------------------
				[ Alert validate ]*/

				.validate-input {
				  position: relative;
				  font-family: 'Prompt', sans-serif;
				}
				/*------------------------------------------------------------------
				[ Input ]*/

				.wrap-input100 {
				  width: 100%;
				  height: 20px;
				  position: relative;
				  background-color: #fff;
				  border-radius: 20px;
				  font-family: 'Prompt', sans-serif;
				}
				.input100 {
				  font-size: 16px;
				  color: #4b2354;
				  line-height: 1.2;
				  font-family: 'Prompt', sans-serif;

				  display: block;
				  width: 100%;
				  height: 62px;
				  background: transparent;
				  padding: 0 20px 0 23px;
				}

				/*MANU AMARILLO*/
						/* Add a black background color to the top navigation */
				.menu {
					background-color: #FFD74F;
					shape-margin: 10px;
				  	overflow: hidden;
				  	margin: 5;
				  	display: block;
					text-align: center;
					box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
					font-family: 'Prompt', sans-serif;
				}

				/* Style the links inside the navigation bar */
				.menu a {
				  float: center;
				  color: #000000;
				  text-align: center;
				  padding: 20px 20px;
				  text-decoration: none;
				  font-size: 18px;
				  text-align: center;
				  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
				  font-family: 'Prompt', sans-serif;
				}

				/* Change the color of links on hover */
				.menu a:hover {
				  background-color: #FFFBB5;
				  color: black;
				  opacity: 0.7;
				}

				/* Add a color to the active/current link */
				.menu a.active {
				  background-color: #FF8700;
				  color: white;
				}
				.menu img{
						width: 60px;
						height: 60px;
					}
					/*TABLA DE CATALOGO*/
					table.paleBlueRows {
					  font-family: 'Prompt', sans-serif;
					  border: 3px solid white;
					  width: 800px;
					  height: 200px;
					  text-align: center;
					  border-collapse: collapse;
					}
					table.paleBlueRows td, table.paleBlueRows th {
					  border: 5px solid white;
					  padding: 5px 10px;
					}
					table.paleBlueRows tbody td {
					  font-size: 17px;
					}
					table.paleBlueRows tr:nth-child(even) {
					  background: white;
					}
					table.paleBlueRows thead {
					  background: #FFD74F;
					  border-bottom: 5px solid white;
					}
					table.paleBlueRows thead th {
					  font-family: 'Prompt', sans-serif;
					  font-size: 20px;
					  font-weight: bold;
					  color: #000000;
					  text-align: center;
					  border-left: 2px solid white;
					}
					table.paleBlueRows thead th:first-child {
					  border-left: none;
					}

					table.paleBlueRows tfoot td {
					  font-size: 14px;
					}
					/*BOTON DE LA TABLA*/
					.btn {
						  display: -webkit-box;
						  display: -webkit-flex;
						  display: -moz-box;
						  display: -ms-flexbox;
						  display: flex;
						  justify-content: center;
						  align-items: center;
						  padding: 0 10px;
						  min-width: 70px;
						  height: 25px;
						  background-color: #FFD74F;
						  border-radius: 20px;

						  font-family: 'Prompt', sans-serif;
						  font-size: 6px;
						  color: black;
						  line-height: 1.2;
						  text-transform: uppercase;

						  -webkit-transition: all 0.4s;
						  -o-transition: all 0.4s;
						  -moz-transition: all 0.4s;
						  transition: all 0.4s;

						  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						}

						.btn:hover {
						  background-color: #4b2354;
						  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						}
			
		</style>
		<div class="topnav" font-family= 'Prompt';>
			  <a href="home.php">Inicio</a>
			  <a class="active"href="#">Cat&#225logos</a>
	  <a href="new_cultivo.php">Nuevo Registro</a>

			  <a class="out" href="logout.php" align="right">LOGOUT</label></a>
			  <img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52" align="right">
			  <a class="out" href="/NewProyect"> CHIQUITA BANANA </a>
			  <a class="out" href="new_user.php"> Registrar Nuevo Usuario </a>
	  </div>
	
	</header>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icon-banana.png"/>
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="style/util.css">
	<!--<link rel="stylesheet" type="text/css" href="style/main.css">-->
	<!--<link rel="stylesheet" href="style/css/menu-bar.css">-->

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;800&display=swap" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</head>
<div class="menu" align="center">
	  
	  <a class="active" href="#">CULTIVOS</a>
	  <a href="cat_abonos.php">FERTILIZANTES</a>
	  <a href="cat_spray.php">DDT</a>
	  <a href="cat_plagas.php">PLAGAS</a>
	  <a href="cat_riego.php">RIEGO</a>
	  <a href="cat_hacienda.php">HACIENDAS</a>

	</div>
<body class="body">
	<p> </p>
			<div class="tabla10 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<h1>CULTIVOS</h1>
</head>
				
				<div class="paleBlueRows" align="center">
					<table class="paleBlueRows" align="center">
					<thead>
					<tr>
					<th>IMAGEN</th>
					<th>NOMBRE DE CULTIVO</th>
					<th>TIPO DE CULTIVO</th>
					<th>CANTIDAD</th>		
					</tr>
					</thead>
					<tbody>
					<?php
					include("conexion.php");
					$sql = "SELECT * FROM C_Crop WHERE Status = 'Active'";
					$result = mysqli_query($conexion,$sql);

					if($result) {

					while ($row =mysqli_fetch_assoc($result)){

					echo "<tr>";
					$row ["Crop_ID"];
					echo '<td><img src="'.$row["Crop_Img"].'" alt="'.$row["Crop_Img"].'"style="width:40%;"></td>';
					echo "<td> ". $row ["Crop_Name"]. "</td>";
					echo "<td> ". $row ["Crop_Type"]. "</td>";
					echo "<td> ". $row ["Crop_Quant"]. "</td>";

					echo "<td> <a href='editar_cultivo.php?id=".$row["Crop_ID"]."'>EDITAR </a><br>
					<a href='eliminar_cultivo.php?id=".$row["Crop_ID"]."' style='color:red;''>ELIMINAR</a></div></td>";
										
					
					echo "</tr>";
					}
					foreach($result as $row){

					}
 
					} else {
					echo "No hay registros para mostrar";
					}
					?>
					</tbody>
				
				</table>
				</div>
		<div class="text-center p-t-40 p-b-20">
					<a href="new_cultivo.php" class="txt1">
						Nuevo Cultivo
					</a>
				</div>
				
					</div>
				</form>
		
		<div id="dropDownSelect1"></div>

</body>
</html>