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
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="images/travelagency.jpg";
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <form method="POST" action="">
                            <?php    
                            include "modelo/conexion.php";
                            include "controlador/ingresar_usuario.php";
                            ?>
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                <span class="h1 fw-bold mb-0">Nombre de la empresa</span>
                            </div>

                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa con tu cuenta</h5>

                            <div class="form-outline mb-4">
                                <h5>Usuario</h5>
                                <input id="user" name="user" class="form-control form-control-lg" value="Victor"/>
                            </div>

                            <div class="form-outline mb-4">
                                <h5>Contraseña</h5>
                                <input id="contra" name="contra" type="password" class="form-control form-control-lg" value="victor123"/>
                            </div>

                            <div class="pt-1 mb-4">
                                <!-- <button href="principal.php?" class="btn btn-dark btn-lg btn-block" type="button">Entrar</button> -->
                                <input name="botonprincipal"  class="btn btn-dark btn-lg btn-block" type="submit" value="Entra">
                            </div>

                            <a name="nueva_contra" onclick = "location='olvidar_contra.php?'" class="small text-muted" href="#!">Olvista contraseña?</a>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? <a href="#!"
                                style="color: #393f81;">Registra aquí</a></p>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        
    </body>
</html>
