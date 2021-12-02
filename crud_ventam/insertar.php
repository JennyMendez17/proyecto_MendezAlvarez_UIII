<?php
include("conexion.php");
$con=conectar();

$idventa=$_POST['idventa'];
$fecha_venta=$_POST['fecha_venta'];
$nombre=$_POST['nombre'];
$productos=$_POST['productos'];
$cantidad_productos=$_POST['cantidad_productos'];
$descuento=$_POST['descuento'];
$ventatotal=$_POST['ventatotal'];


$sql="INSERT INTO ventam VALUES('$idventa','$fecha_venta','$nombre','$productos' ,'$cantidad_productos' ,'$descuento' ,'$ventatotal')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>
