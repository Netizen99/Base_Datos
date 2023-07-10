<?php

    if(!empty($_POST["botonprincipal"]))
    {
        if(empty($_POST["user"]) and empty($_POST["contra"]))
        {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        }else{
            $user=$_POST["user"];
            $contra=$_POST["contra"];
            $sql=$conexion->query(" select * from login where user='$user' and contra='$contra' ");
            if($datos=$sql->fetch_object())
            {
                header("location:excursion.php");
            }else
            {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        }
            
        }
?>