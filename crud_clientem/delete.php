<?php

include("conexion.php");
$con=conectar();

$idcliente=$_GET['id'];


$sql="DELETE FROM clientem where idcliente='$idcliente' ";


$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>