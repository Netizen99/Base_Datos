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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
    <body>
    <section class="vh-100" style="background-color: #9A616D;">
        
        <h1 class="text-center p-3">Vista Principal</h1>
        <?php
            include "modelo/conexion.php";
            //include "controlador/ver_ciudad.php"
        ?>
        <div class="container-fluid " style="background-color:aliceblue; border-radius: 25px" >
        <form class="col-10 p-5" method="POST"> 
                    
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
          <h1>EMPIEZA CON UNA RESERVACION !!!</h1>
        </form>
        </div>
        
        <form class="col-5 p-3" method="POST"> 
          <div class="container-fluid" >

          </div>
          
        </form>
        
       </section>
       
       
    </body>
</html>