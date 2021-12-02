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

$sql="UPDATE empleadom SET  nombre='$nombre',apellidos='$apellidos',fecha_nac='$fecha_nac',num_telefono='$num_telefono' ,curp='$curp',correo='$correo' WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>