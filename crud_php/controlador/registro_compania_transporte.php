<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistrarcompanitransporte"]))
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["nombre"]) and !empty($_POST["telefono"]) and !empty($_POST["email"]) and !empty($_POST["webpage"]))
        {
            $nombre=$_POST["nombre"];
            $telefono=$_POST["telefono"];
            $email=$_POST["email"];
            $webpage=$_POST["webpage"];

            $sql=$conexion->query(" insert into compania_transportes(nombre,telefono,email,webpage)values('$nombre','$telefono','$email','$webpage') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Compañia registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error en Compañia registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>