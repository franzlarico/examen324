<?php 
include 'cabecera.inc.php';
?>
<?php
include 'conexion.php';
session_start();

if(isset($_SESSION["usuario"])){
	$usuario = $_SESSION["usuario"];
}

if(isset ($_GET["rojo"])){
	$fondo = $_GET["rojo"];
	$sql = "update usuario set color = '".$fondo."' where usuario = '".$usuario."'";
	mysqli_query($con,$sql);
	header("Location: http://localhost/sitio2/pag.php");
}


if(isset ($_GET["azul"])){
	$fondo = $_GET["azul"];
	$sql = "update usuario set color = '".$fondo."' where usuario = '".$usuario."'";
	mysqli_query($con,$sql);
	header("Location: http://localhost/sitio2/pag.php");
}

if(isset ($_GET["verde"])){
	$fondo = $_GET["verde"];
	$sql = "update usuario set color = '".$fondo."' where usuario = '".$usuario."'";
	mysqli_query($con,$sql);
	header("Location: http://localhost/sitio2/pag.php");
}

?>

<form action = "pag.php" method="GET">
  <p>
    Empleo actual:<br>
    <input type="radio" name="rojo" value="#FF0000"> Rojo<br>
    <input type="radio" name="azul" value="#0000FF"> Azul<br>
    <input type="radio" name="verde" value="#00FF00"> Verde
  </p>
  <p><input type="submit" value="Cambiar Color"></p>

</form>
<form action = "nota.php" method="GET">
  <p><input type="submit" value="Ver Notas"></p>
</form>

<?php 
include 'pie.inc.php';
?>