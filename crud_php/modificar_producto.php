<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from persona where id=$id ");

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <title>Trabajo BD</title>
        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymus"></script>
    </head>
    <body>
        <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Productos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "controlador/modificar_producto.php";
                //mientras traiga datos, se van a almacenar en la variable datos
                while($datos=$sql->fetch_object())
                {?>
                    
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                        <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
                    </div>
            <?php    }

            ?>
                
                
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Producto</button>
            </form>
        </body>
</html>
