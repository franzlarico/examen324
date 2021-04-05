<?php 
include 'cabecera.inc.php';
?>

<?php
include 'conexion.php';
session_start();
if(isset($_SESSION["usuario"])){
	$usuario = $_SESSION["usuario"];
	$sql = "select n.sigla, n.nota1, n.nota2, n.nota3, n.notaf from usuario u, nota n where u.carnet = n.carnet and u.usuario = '".$usuario."'";
	$var = mysqli_query($con,$sql);
}
?>
<table border>
<th>Sigla</th>
<th>Nota 1</th>
<th>Nota 2</th>
<th>Nota 3</th>
<th>Nota Final</th>
<?php
    while($fila = mysqli_fetch_array($var)){
        echo "<tr>
        <td>".$fila["sigla"]."</td><td>".$fila["nota1"]."</td><td>".$fila["nota2"]."</td>
		<td>".$fila["nota3"]."</td><td>".$fila["notaf"]."</td>
        </tr>";
    }
?>
</table>
<?php 
include 'pie.inc.php';
?>