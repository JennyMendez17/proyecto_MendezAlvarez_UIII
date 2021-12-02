<?php

include("conexion.php");
$con=conectar();

$idventa=$_GET['id'];


$sql="DELETE FROM ventam where idventa='$idventa' ";


$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>