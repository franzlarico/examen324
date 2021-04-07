<?php 
include 'cabecera.inc.php';
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
	$sql2 = "select n.sigla,(sum(case when p.depto ='01' then n.notaf else 0 end )) /(count(case when p.depto ='01' then 1 end )) 'La Paz',
						(sum(case when p.depto ='02' then n.notaf else 0 end )) /(count(case when p.depto ='02' then 1 end )) 'Cochambama',
						(sum(case when p.depto ='03' then n.notaf else 0 end )) /(count(case when p.depto ='03' then 1 end )) 'Beni',
						(sum(case when p.depto ='04' then n.notaf else 0 end )) /(count(case when p.depto ='04' then 1 end )) 'Chuquisaca',
						(sum(case when p.depto ='05' then n.notaf else 0 end )) /(count(case when p.depto ='05' then 1 end )) 'Oruro',
						(sum(case when p.depto ='06' then n.notaf else 0 end )) /(count(case when p.depto ='06' then 1 end )) 'Pando',
						(sum(case when p.depto ='07' then n.notaf else 0 end )) /(count(case when p.depto ='07' then 1 end )) 'Potosi',
						(sum(case when p.depto ='08' then n.notaf else 0 end )) /(count(case when p.depto ='08' then 1 end )) 'Santa Cruz',
						(sum(case when p.depto ='09' then n.notaf else 0 end )) /(count(case when p.depto ='09' then 1 end )) 'Tarija'
						from persona p, nota n where p.carnet=n.carnet group by n.sigla ORDER by sigla";
	$res2 = mysqli_query($con, $sql2);		
	while($nota = mysqli_fetch_array($res2)){
		echo "<tr>";
			echo "<td>".$nota[0]."</td>";
			echo "<td>".$nota[1]."</td>";
			echo "<td>".$nota[2]."</td>";
			echo "<td>".$nota[3]."</td>";
			echo "<td>".$nota[4]."</td>";
			echo "<td>".$nota[5]."</td>";
			echo "<td>".$nota[6]."</td>";
			echo "<td>".$nota[7]."</td>";
			echo "<td>".$nota[8]."</td>";
			echo "<td>".$nota[9]."</td>";
		echo "</tr>";
	}
?>
</table>
</center>
</div>

<?php 
include 'pie.inc.php';
?>