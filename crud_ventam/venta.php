<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventam";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Crud tortilleria</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idventa" placeholder="idventa">
                                    <input type="text" class="form-control mb-3" name="fecha_venta" placeholder="fecha_venta">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del cliente">
                                    <input type="text" class="form-control mb-3" name="productos" placeholder="productos">
                                    <input type="text" class="form-control mb-3" name="cantidad_productos" placeholder="cantidad de productos que desea">
                                    <input type="text" class="form-control mb-3" name="descuento" placeholder="descuento">
                                    <input type="text" class="form-control mb-3" name="ventatotal" placeholder="ventatotal">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                                <a href= "/proyecto_MendezAlvarez_tortilleria/index.php">Inicio</a> 
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idventa</th>
                                        <th>fecha de la venta</th>
                                        <th>nombre del cliente</th>
                                        <th>productos que desea</th>
                                        <th>cantidad de productos que desea</th>
                                        <th>descuento</th>
                                        <th>ventatotal</th>
                                        <th></th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idventa']?></th>
                                                <th><?php  echo $row['fecha_venta']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['productos']?></th>
                                                <th><?php  echo $row['cantidad_productos']?></th>
                                                <th><?php  echo $row['descuento']?></th> 
                                                <th><?php  echo $row['ventatotal']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['idventa'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idventa'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
