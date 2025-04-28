<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$con=mysqli_connect("localhost","root","","flujos");
$resultado=mysqli_query($con,"select * from flujoproceso where flujo='$flujo' and proceso='$proceso'");
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila["pantalla"];
?>
<html>
	<head>

	</head>
	<body>
		<form method="GET" action="controlador.php">
			<?php include $pantalla.".inc.php"; ?>
			<br/>
			<input type="hidden" name="flujo" value="<?php echo $flujo;?>">
			<input type="hidden" name="proceso" value="<?php echo $proceso;?>">
			<input type="submit" name="Siguiente" value="Siguiente">
			<input type="submit" name="Anterior" value="Anterior">
		</form>
	</body>
</html>