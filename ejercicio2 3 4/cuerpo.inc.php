<?php 
include 'cabecera.inc.php';
?>
<div class="cuerpo">
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