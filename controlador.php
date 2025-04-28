<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$con=mysqli_connect("localhost","root","","flujos");
$resultado=mysqli_query($con,"select * from flujoproceso where flujo='$flujo' and proceso='$proceso'");
$fila=mysqli_fetch_array($resultado);
$siguiente=$fila["siguiente"];
header("Location: inicial.php?flujo=$flujo&proceso=$siguiente")
?>
