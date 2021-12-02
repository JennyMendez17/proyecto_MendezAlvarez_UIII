<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha_nac=$_POST['fecha_nac'];
$num_telefono=$_POST['num_telefono'];
$curp=$_POST['curp'];
$correo=$_POST['correo'];


$sql="INSERT INTO empleadom VALUES('$idempleado','$nombre','$apellidos','$fecha_nac','$num_telefono' , '$curp','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>