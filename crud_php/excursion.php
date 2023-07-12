<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <title>Trabajo BD</title>
        <!--CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
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
      <button onclick = "location='index.php?'" value="boton_index" style="float: right;" class="btn btn-small btn-warning">Salir</button>
        <h1 class="text-center p-3">Vista Principal</h1>
        <?php
            include "modelo/conexion.php";
            //include "controlador/ver_ciudad.php"
        ?>
        <div class="container-fluid " style="background-color:aliceblue; border-radius: 25px; width: 1400px;" >
        <form class="col-10 p-5" method="POST" > 
          
          <div class="container-fluid" style="width:850px;" >

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" >
              <div class="item active">
                <img src="images/arequipa.jpg" alt="arequipa">
                <div class="carousel-caption">
                </div>
              </div>

              <div class="item">
                <img src="images/cusco.jpg" alt="cuzco">
                <div class="carousel-caption">
                </div>
              </div>

              <div class="item">
                <img src="images/limas.jpg" alt="lima">
                <div class="carousel-caption">
                </div>
              </div>
            </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- -------------------------------------------------------------------------------------------- -->
          <h1>EMPIEZA CON UNA RESERVACION !!!</h1>
          <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de Turista</h3>
        <?php
                include "controlador/registro_actividad.php";
            ?>

            <?php
                include "controlador/registro_turista.php";
            ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Identificacion</label>
                    <input type="text" class="form-control" name="identificacion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pais</label>
                    <input type="text" class="form-control" name="pais">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Seguro</label>
                </div>
                <select name="fk_seguro" class="form-control">
                  <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" select * from seguros order by numero ");
                    while ($datos = $sql->fetch_object()){ ?> 
                            <option value="<?= $datos->numero ?>"><?= $datos->numero ?>  </option>
                            <?php    }
                    ?>
                    </select>
                
                <button type="submit" class="btn btn-primary" name="btnregistrarturista" value="ok">Registrar Guia</button>
            </form>
            <div class="col-8 p-4">
                
            <div class="scrollingTable">
            <table class="table" id="myTable">
                <thead class="bg-info"> 
                    <tr>
                    <th scope="col">NUMERO</th>
                    <th scope="col">IDENTIFICACION</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">PAIS</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SEGURO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from turistas ");
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->numero ?></td>
                                <td><?= $datos->identificacion ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->telefono ?></td>
                                <td><?= $datos->pais ?></td>
                                <td><?= $datos->email ?></td>
                                <td><?= $datos->fk_seguro ?></td>
                            </tr>
                        <?php    }
                    ?>
                    
                </tbody>
                </table>
            </div>
            </div>
            <button>AKI!!</button>
          <!-- -------------------------------------------------------------------------------------------- -->
          

          <h1>Agregar Compañia de transportes !!!</h1>
          <a href="compania_transportes.php?" class="btn btn-small btn-warning">Vamos o Añadir o Modificar una compañia :D</a>

        </form>
        </div>
        
        <form class="col-5 p-3" method="POST"> 
          <div class="container-fluid" >

          </div>
          
        </form>
       </section>
    </body>
</html>