<?php

    
        if(!empty($_POST["nombre"]) and empty($_POST["provincia"]) and empty($_POST["pais"]))
        {
            $user=$_POST["nombre"];
            $contra=$_POST["provincia"];
            $contra=$_POST["pais"];
            $sql=$conexion->query(" select * from ciudades where nombre='$nombre' and provincia='$provincia' and pais='$pais' ");
        }
            
        
?>