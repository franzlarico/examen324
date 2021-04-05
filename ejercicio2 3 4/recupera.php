<?php 
	include 'conexion.php';
	$us = $_GET["usuario"];
	$password = $_GET["password"];
	$sql = "select * from usuario where (usuario = '".$us."' and  contra = '".$password."')";
	$res = mysqli_query($con,$sql);
	$ans = mysqli_fetch_array($res);
	$fondo = $ans[3];
	session_start();
	if($ans){
		$_SESSION["usuario"] = $us;
		header("Location: http://localhost/sitio2/pag.php");	
	}
	else{
		header("Location: http://localhost/sitio2/index1.php");
	}
?>
