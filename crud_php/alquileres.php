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
        <h1 class="text-center p-3">Vista de Alquileres</h1>
        <?php
            include "modelo/conexion.php";
            include "controlador/eliminar_alquileres.php";
            $data = $_GET['data'];
            $valorArray = explode('_', $data);
            $sql=$conexion->query(" SELECT * from alquileres where numero=$valorArray[0] ");
            
        ?>
        <div class="container-fluid row" style="background-color:aliceblue; border-radius: 25px" >
        <form class="col-4 p-3" method="POST">
        
        <h3 class="text-center text-secondary">Registro de Alquiler</h3>
         <input type="hidden" name="data" value="<?= $_GET["data"] ?>">
            <?php
                include "controlador/registro_alquileres.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ubicacion</label>
                    <input type="text" class="form-control" name="ubicacion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Costo x dia</label>
                    <input type="text" class="form-control" name="costo_dia">
                </div>  
                
                <button type="submit" class="btn btn-primary" name="btnregistraralquileres" value="ok">Registrar</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='compania_transportes.php?'" value="boton_transportes" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">NUMERO</th>
                    <th scope="col">UBICACION</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">COSTO X DIA</th>
                    <th scope="col">CODIGO DEL BUS</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $_GET['data'];
                        $valorArray = explode('_', $data);
                        $codigo_bus = $valorArray[0];
                        $sql=$conexion->query("SELECT * FROM alquileres WHERE fk_codigo_bus = $codigo_bus ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->numero ?></td>
                                <td><?= $datos->ubicacion ?></td>
                                <td><?= $datos->fecha ?></td>
                                <td><?= $datos->costo_dia ?></td>
                                <td><?= $datos->fk_codigo_bus ?></td>
                                <td>
                                    <a href="modificar_transportes.php?fk_codigo_bus=<?= $datos->fk_codigo_bus?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="alquileres.php?data=<?= $datos->fk_codigo_bus ?>_<?= $datos->numero?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>                                </td>

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