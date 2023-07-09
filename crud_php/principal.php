<!DOCTYPE html>
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
    <section class="vh-100" style="background-color: #9A616D;">
        <script>
            function eliminar()
            {
                var respuesta=confirm("Estas seguro que deseas eliminar?");
                return respuesta
            }
        </script>
        <h1 class="text-center p-3">Vista Principal</h1>
        <?php
            include "modelo/conexion.php";
            include "controlador/eliminar_persona.php";
        ?>
        <div class="container-fluid row" style="background-color:aliceblue; border-radius: 25px" >
        <form class="col-4 p-3" method="POST">
        
        <h3 class="text-center text-secondary">Registro de Personas</h3>
            <?php
                include "controlador/registro_persona.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                    <input type="text" class="form-control" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                    <input type="text" class="form-control" name="dni">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo">
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='index.php?'" value="boton_index" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <table class="table">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">FECHA DE NAC</th>
                    <th scope="col">DNI</th>
                    <th scope="col">CORREO</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from persona ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fecha_nac ?></td>
                                <td><?= $datos->correo ?></td>
                                <td>
                                    <a href="modificar_producto.php?id=<?= $datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="principal.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php    }
                    ?>
                    
                </tbody>
                </table>
            </div>
        </div> 
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </section>
    </body>
</html>