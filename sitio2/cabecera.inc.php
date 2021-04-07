<?php
include 'conexion.php';
session_start();
if(isset($_SESSION["usuario"])){
	$usuario = $_SESSION["usuario"];
	$sql = "select * from usuario where usuario = '".$usuario."'";
	$var = mysqli_query($con,$sql);
	$ans = mysqli_fetch_array($var);
	$col = $ans[3];		
}

?>

<html>
	<head>
		<title>Pagina de prueba</title>
		<style>
		
			body {background-color:
			<?php
			echo $col;
			?>
			;}
			#cabecera{width:1300;heigth:200;background-color:B98CD8;}
			.cuerpo{float:left;width:1300;heigth:600;background-color:5DCEC6;}
			.pie{float:left;width:1300;heigth:200;background-color:92A253;}
		</style>
	</head>
	<body>
		<div id="cabecera">
			<center><h1 style=""><FONT COLOR="black">UMSA</FONT></h1> </center>
			<center><h1><FONT COLOR="black">Facultad de Cs. Puras y Naturales</FONT></h1></center>
			<p><h2><FONT COLOR="black">Bienvenido a la facultad de ciencias puras y naturales</FONT></h2></p>
		</div>