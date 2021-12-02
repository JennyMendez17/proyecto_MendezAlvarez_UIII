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


$sql="INSERT INTO repartidorm VALUES('$idrepartidor','$nombre_negocio','$correo','$telefono','$direccion' , '$preferencia_entrega','$idventa')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: repartidor.php");
    
}else {
}
?>