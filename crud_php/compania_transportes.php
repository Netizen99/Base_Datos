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

        <style type="text/css">
        table {
            width:  100%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
        }
        .scrollingTable {
            width: auto;
            overflow-y: auto;
        }
        </style>
        <script type="text/javascript">
            function makeTableScroll() {
                // Constant retrieved from server-side via JSP
                var maxRows = 10;

                var table = document.getElementById('myTable');
                var wrapper = table.parentNode;
                var rowsInTable = table.rows.length;
                var height = 0;
                if (rowsInTable > maxRows) {
                    for (var i = 0; i < maxRows; i++) {
                        height += table.rows[i].clientHeight;
                    }
                    wrapper.style.height = height + "px";
                }
            }
        </script>

    </head>
    <body onload="makeTableScroll();">
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
            include "controlador/eliminar_compania_transportes.php";
        ?>
        <div class="container-fluid row" style="background-color:aliceblue; border-radius: 25px" >
        <!-- --------------------------------------------------------------------------------Compañia---------------------------------------------------------------------------------------------------------------------- -->

        <form class="col-4 p-3" method="POST">
        
        <h3 class="text-center text-secondary">Registro de Compañia</h3>
            <?php
                include "controlador/registro_compania_transporte.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la compañia</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pag web (nombre) </label>
                    <input type="text" class="form-control" name="webpage">
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnregistrarcompanitransporte" value="ok">Registrar Compañia</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='excursion.php?'" value="boton_index" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">PAG WEB</th>
                    <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from compania_transportes ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->codigo ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->telefono ?></td>
                                <td><?= $datos->email ?></td>
                                <td><?= $datos->webpage ?></td>
                                <td>
                                    <a href="transportes.php?codigo=<?= $datos->codigo?>" class="btn btn-small btn-warning"><i class="fa-sharp fa-solid fa-plus"></i></a>
                                    <a href="modificar_compania_transportes.php?codigo=<?= $datos->codigo?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="compania_transportes.php?codigo=<?= $datos->codigo ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php    }
                    ?>
                    
                </tbody>
                </table>
            </div>
            </div>
        <!-- --------------------------------------------------------------------------------GUIAS---------------------------------------------------------------------------------------------------------------------- -->

        <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de Guias</h3>
            <?php
                include "controlador/registro_guias.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del Guia</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Edad</label>
                    <input type="text" class="form-control" name="edad">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Idiomas</label>
                    <select name="idiomas">

                        <option>Esp/Eng</option>

                        <option>Esp</option>

                        <option>Eng</option>

                        </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Estudios </label>
                    <input type="text" class="form-control" name="estudios">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="email">
                </div>
                
                
                <button type="submit" class="btn btn-primary" name="btnregistrarguia" value="ok">Registrar Guia</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='excursion.php?'" value="boton_index" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">CEDULA GUIA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">EDAD</th>
                    <th scope="col">IDIOMAS</th>
                    <th scope="col">ESTUDIOS</th>
                    <th scope="col">CORREO</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        include "controlador/eliminar_guias.php";
                        $sql=$conexion->query(" select * from guias ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->cedula_guia ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->direccion ?></td>
                                <td><?= $datos->telefono ?></td>
                                <td><?= $datos->edad ?></td>
                                <td><?= $datos->idiomas ?></td>
                                <td><?= $datos->estudios ?></td>
                                <td><?= $datos->email ?></td>
                                <td>
                                    <!-- <a href="modificar_compania_transportes.php?id=?= $datos->codigo?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> -->
                                    <a onclick="return eliminar()" href="compania_transportes.php?cedula_guia=<?= $datos->cedula_guia ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php    }
                    ?>
                    
                </tbody>
                </table>
            </div>
            </div>
            
            <!-- --------------------------------------------------------------------------------ACTIVIDADES---------------------------------------------------------------------------------------------------------------------- -->
            <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Actividades</h3>
            <?php
                include "controlador/registro_actividad.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la Actividad</label>
                    <input type="text" class="form-control" name="plan">
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnregistraractividad" value="ok">Registrar Actividad</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='excursion.php?'" value="boton_index" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">CODIGO DE ACTIVIDAD</th>
                    <th scope="col">PLAN DE LA ACTIVIDAD</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        include "controlador/eliminar_actividad.php";
                        $sql=$conexion->query(" select * from actividades ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->codigo_act ?></td>
                                <td><?= $datos->plan ?></td>
                                <td>
                                    <!-- <a href="modificar_compania_transportes.php?id=?= $datos->codigo?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> -->
                                    <a onclick="return eliminar()" href="compania_transportes.php?codigo_act=<?= $datos->codigo_act ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php    }
                    ?>
                        
                    </tbody>
                    </table>
                </div>
                </div>
                <!-- --------------------------------------------------------------------------------CHOFERES---------------------------------------------------------------------------------------------------------------------- -->
            <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Choferes</h3>
            <?php
                include "controlador/registro_choferes.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del Chofer</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">telefono</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">edad</label>
                    <input type="text" class="form-control" name="edad">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div><div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Licencia al dia</label>
                    <select name="lic_aldia">

                        <option>Si / Yes</option>

                        <option>No / Not</option>

                        </select>
                </div>
                <button type="submit" class="btn btn-primary" name="btnregistrarchofer" value="ok">Registrar Chofer</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='excursion.php?'" value="boton_index" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">CEDULA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">EDAD</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">LICENCIA AL DIA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        include "controlador/eliminar_choferes.php";
                        $sql=$conexion->query(" select * from choferes ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->cedula ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->direccion ?></td>
                                <td><?= $datos->telefono ?></td>
                                <td><?= $datos->edad ?></td>
                                <td><?= $datos->email ?></td>
                                <td><?= $datos->lic_aldia ?></td>
                                <td>
                                    <!-- <a href="modificar_compania_transportes.php?id=?= $datos->codigo?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> -->
                                    <a onclick="return eliminar()" href="compania_transportes.php?cedula=<?= $datos->cedula ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php    }
                    ?>
                        
                    </tbody>
                    </table>
                </div>
                </div>
        </div> 
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </section>
    </body>
</html>