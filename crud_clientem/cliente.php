<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM clientem";
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

                                    <input type="text" class="form-control mb-3" name="idcliente" placeholder="idcliente">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del cliente">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion del cliente">
                                    <input type="text" class="form-control mb-3" name="num_tel" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="idventa" placeholder="idventa">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                                <a href= "/proyecto_MendezAlvarez_tortilleria/index.php">Inicio</a> 
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idcliente</th>
                                        <th>nombre del cliente</th>
                                        <th>apellidos</th>
                                        <th>direccion</th>
                                        <th>telefono</th>
                                        <th>correo</th>
                                        <th>idventa</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idcliente']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['num_tel']?></th>
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['idventa']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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