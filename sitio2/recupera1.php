<?php 
	include 'conexion.php';
	$us = $_GET["usuario"];
	$password = $_GET["password"];
	$sql = "select * from docente where (usuario = '".$us."' and  contras = '".$password."')";
	$res = mysqli_query($con,$sql);
	$ans = mysqli_fetch_array($res);
	$fondo = $ans[3];
	session_start();
	if($ans){
		$_SESSION["usuario"] = $us;
		header("Location: http://localhost/sitio2/pag1.php");	
	}
	else{
		header("Location: http://localhost/sitio2/cuerpodoc.php");
	}
?>
