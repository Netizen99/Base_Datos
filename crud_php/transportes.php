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
        <h1 class="text-center p-3">Vista de Transportes</h1>
        <?php
            include "modelo/conexion.php";
            include "controlador/eliminar_transporte.php";
            $codigo=$_GET["codigo"];
            $sql=$conexion->query(" select * from compania_transportes where codigo=$codigo ");
            
        ?>
        <div class="container-fluid row" style="background-color:aliceblue; border-radius: 25px" >
        <form class="col-4 p-3" method="POST">
        
        <h3 class="text-center text-secondary">Registro de Transportes</h3>
         <input type="hidden" name="codigo" value="<?= $_GET["codigo"] ?>">
            <?php
                include "controlador/registro_transporte.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fabricante</label>
                    <input type="text" class="form-control" name="fabricante">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asientos</label>
                    <input type="text" class="form-control" name="asientos">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Modelo</label>
                    <input type="text" class="form-control" name="modelo">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Placa</label>
                    <input type="text" class="form-control" name="placa">
                </div>
                <?php
                while($datos=$sql->fetch_object())
                {?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Compañia Afiliada</label>
                    <input type="text" class="form-control" name="fk_comp" value="<?= $datos->codigo ?>">
                </div>
                <?php    }?>
                
                <button type="submit" class="btn btn-primary" name="btnregistrartransporte" value="ok">Registrar</button>
            </form>
            <div class="col-8 p-4">
                
            <button onclick = "location='compania_transportes.php?'" value="boton_compania_transportes" style="float: right;" class="btn btn-small btn-warning">Salir</button>
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">CODIGO BUS</th>
                    <th scope="col">FABRICANTE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">ASIENTOS</th>
                    <th scope="col">MODELO</th>
                    <th scope="col">PLACA</th>
                    <th scope="col">COMP. AF.</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from transportes ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->codigo_bus ?></td>
                                <td><?= $datos->fabricante ?></td>
                                <td><?= $datos->descripcion ?></td>
                                <td><?= $datos->asientos ?></td>
                                <td><?= $datos->modelo ?></td>
                                <td><?= $datos->placa ?></td>
                                <td><?= $datos->fk_comp ?></td>
                                <td>
                                    <a href="transportes.php?id=<?= $datos->codigo_bus?>" class="btn btn-small btn-warning"><i class="fa-sharp fa-solid fa-plus"></i></a>
                                    <a href="modificar_transportes.php?codigo_bus=<?= $datos->codigo_bus?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="transportes.php?codigo_bus=<?= $datos->codigo_bus ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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