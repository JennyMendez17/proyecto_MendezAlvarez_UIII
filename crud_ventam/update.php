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

$sql="UPDATE ventam SET  nombre='$fecha_venta',nombre='$nombre',productos='$productos',cantidad_productos='$cantidad_productos' ,descuento='$descuento',ventatotal='$ventatotal' WHERE idventa='$idventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>