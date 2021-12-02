<?php

include("conexion.php");
$con=conectar();

$idrepartidor=$_POST['idrepartidor'];
$nombre_negocio=$_POST['nombre_negocio'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$preferencia_entrega=$_POST['preferencia_entrega'];
$idventa=$_POST['idventa'];

$sql="UPDATE repartidorm SET nombre_negocio='$nombre_negocio',correo='$correo',telefono='$telefono',direccion='$direccion' ,preferencia_entrega='$preferencia_entrega',idventa='$idventa' WHERE idrepartidor='$idrepartidor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: repartidor.php");
    }
?>