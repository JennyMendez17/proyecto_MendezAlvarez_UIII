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


$sql="INSERT INTO clientem VALUES('$idcliente','$nombre','$apellidos','$direccion','$num_tel' , '$correo','$idventa')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>