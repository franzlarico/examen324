<?php 
include 'cabecera.inc.php';
?>
<div class="cuerpo">
<h3>Bienvenido querido Estudiante</h3>
<form action = "recupera.php" method="GET">
<label>Usuario</label>
<input type="text" name="usuario"/>
<br/>
<label>Password</label>
<input type="password" name="password"/>
<br/>
<input type="submit" name="Login" value="Login"/>
</form>
</div>
<?php 
include 'pie.inc.php';
?>