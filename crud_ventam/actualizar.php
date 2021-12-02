<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM ventam WHERE idventa='$id'";


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
                    
                                
                    <input type="hidden" name="idventa" value="<?php echo $row['idventa']?>">

<input type="text" class="form-control mb-3" name="fecha_venta" placeholder="fecha_venta" value="<?php echo $row['fecha_venta']?>">
<input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del cliente" value="<?php echo $row['nombre']?>">
<input type="text" class="form-control mb-3" name="productos" placeholder="productos" value="<?php echo $row['productos']?>">
<input type="text" class="form-control mb-3" name="cantidad_productos" placeholder="cantidad de productos" value="<?php echo $row['cantidad_productos']?>">
<input type="text" class="form-control mb-3" name="descuento" placeholder="descuento" value="<?php echo $row['descuento']?>">
<input type="text" class="form-control mb-3" name="ventatotal" placeholder="total de la venta" value="<?php echo $row['ventatotal']?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>