<!DOCTYPE html>
<?php
$flujo=$_GET['flujo'];
$proceso=$_GET['proceso'];
$con=mysqli_connect("localhost","root","","flujos");
$resultado=mysqli_query($con,"SELECT * FROM flujoproceso");
$pantalla=$fila['pantalla'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controlador.php" action="GET">
        <?php include $pantalla "otra.php"; ?>
        <input type="submit" name="siguiente" value="siguiente" >
        <input type="submit" name="anterior" value="anterior" >
    </form>
</body>
</html>