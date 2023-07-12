<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistrarturista"]))
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["identificacion"]) and !empty($_POST["nombre"]) and !empty($_POST["telefono"]) and !empty($_POST["pais"])and !empty($_POST["email"])and !empty($_POST["fk_seguro"]))
        {
            $identificacion=$_POST["identificacion"];
            $nombre=$_POST["nombre"];
            $telefono=$_POST["telefono"];
            $pais=$_POST["pais"];
            $email=$_POST["email"];
            $fk_seguro=$_POST["fk_seguro"];

            $sql=$conexion->query(" insert into turistas(identificacion,nombre,telefono,pais,email,fk_seguro)values('$identificacion','$nombre','$telefono','$pais','$email','$fk_seguro') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Turista registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error en Turista registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>