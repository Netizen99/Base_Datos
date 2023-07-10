<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistrarguia"]))
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["nombre"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["edad"])and !empty($_POST["idiomas"])and !empty($_POST["estudios"])and !empty($_POST["email"]))
        {
            $nombre=$_POST["nombre"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $edad=$_POST["edad"];
            $idiomas=$_POST["idiomas"];
            $estudios=$_POST["estudios"];
            $email=$_POST["email"];

            $sql=$conexion->query(" insert into guias(nombre,direccion,telefono,edad,idiomas,estudios,email)values('$nombre','$direccion','$telefono','$edad','$idiomas','$estudios','$email') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Guia registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error en Guia registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>