<?php 
include 'cabecera.php';
?>

<?php
	include 'conexion.php';
	$dt = ["01", "02", "03", "04", "05", "06", "07", "08", "09"];
	$sql = "SELECT DISTINCT sigla FROM nota";
    $res = mysqli_query($con, $sql);
?>
<div >
<center>
<table border>
<tr>
<th scope="col"></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '01'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '02'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '03'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '04'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '05'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '06'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '07'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '08'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
<th scope="col"><?php $depto = "select ciudad from ciudad where cod = '09'"; $dp = mysqli_query($con, $depto); $sig = mysqli_fetch_array($dp); echo $sig[0];?></th>
</tr>
<?php 
    while($sigla = mysqli_fetch_array($res)){
        echo "  <td>".$sigla[0]."</td>";
		foreach ($dt as $d) {
			$sql2 = "SELECT AVG(n.notaf) AS Nota FROM nota n, persona p WHERE n.carnet = p.carnet AND n.sigla = '".$sigla[0]."' AND p.depto = '".$d."' GROUP BY p.depto";
            $res2 = mysqli_query($con, $sql2);
            $nota = mysqli_fetch_array($res2);
            echo "<td>".$nota[0]."</td>";
		}
        echo "</tr>";
    }
?>
</table>
</center>
</div>

<div class="cuerpo">
<center>
<form action = "pagi.php" method="GET">
<br/>
<h3><input type="submit" name="consulta" value="Consulta SQL"/></h3>
</form>
</center>
</div>

<?php 
include 'pie.inc.php';
?>