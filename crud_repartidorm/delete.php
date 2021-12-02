<?php

include("conexion.php");
$con=conectar();

$nidrepartidor=$_GET['id'];


$sql="DELETE FROM repartidorm where idrepartidor='$idrepartidor' ";


$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: repartidor.php");
    }
?>