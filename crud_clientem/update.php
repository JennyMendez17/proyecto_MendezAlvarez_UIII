<?php

include("conexion.php");
$con=conectar();

$idcliente=$_POST['idcliente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$num_tel=$_POST['num_tel'];
$correo=$_POST['correo'];
$idventa=$_POST['idventa'];

$sql="UPDATE clientem SET  nombre='$nombre',apellidos='$apellidos',direccion='$direccion',num_tel='$num_tel' ,correo='$correo',idventa='$idventa' WHERE idcliente='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>