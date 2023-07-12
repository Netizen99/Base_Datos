<?php
include "modelo/conexion.php";
$codigo_bus=$_GET["codigo_bus"];

$sql=$conexion->query(" select * from transportes where codigo_bus=$codigo_bus ");

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
        <h3 class="text-center text-secondary">Modificar Transporte</h3>
        <input type="hidden" name="codigo_bus" value="<?= $_GET["codigo_bus"] ?>">
            <?php
            include "controlador/modificar_transportes.php";
                //mientras traiga datos, se van a almacenar en la variable datos
                while($datos=$sql->fetch_object())
                {?>
                    
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fabricante</label>
                    <input type="text" class="form-control" name="fabricante" value="<?= $datos->fabricante ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asientos</label>
                        <input type="text" class="form-control" name="asientos" value="<?= $datos->asientos ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="modelo" value="<?= $datos->modelo ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Placa</label>
                        <input type="text" class="form-control" name="placa" value="<?= $datos->placa ?>">
                    </div>
            <?php    }

            ?>
                
                <button type="submit" class="btn btn-primary" name="btnregistro_transporte" value="ok">Modificar Transporte</button>
            </form>
        </body>
</html>
