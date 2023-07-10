<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistrarchofer"]))
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["nombre"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["edad"]) and !empty($_POST["email"]) and !empty($_POST["lic_aldia"]))
        {
            $nombre=$_POST["nombre"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $edad=$_POST["edad"];
            $email=$_POST["email"];
            $lic_aldia=$_POST["lic_aldia"];

            $sql=$conexion->query(" insert into choferes(nombre,direccion,telefono,edad,email,lic_aldia)values('$nombre','$direccion','$telefono','$edad','$email','$lic_aldia') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Chofer registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error en Chofer registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>