<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM empleadom WHERE idempleado='$id'";


$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                    <input type="hidden" name="idempleado" value="<?php echo $row['idempleado']?>">

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']?>">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']?>">
                    <input type="text" class="form-control mb-3" name="fecha_nac" placeholder="fecha de nacimiento" value="<?php echo $row['fecha_nac']?>">
                    <input type="text" class="form-control mb-3" name="num_telefono" placeholder="numero de telefono" value="<?php echo $row['num_telefono']?>">
                    <input type="text" class="form-control mb-3" name="curp" placeholder="curp" value="<?php echo $row['curp']?>">
                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']?>">
                    <input type="submit" class="btn btn-primary">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>