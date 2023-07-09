<?php

if(!empty($_POST["btnregistrar"]))
{
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"]))
    {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha_nac=$_POST["fecha_nac"];
        $correo=$_POST["correo"];
            //los int no se ponen entre comillas como el dni
        $sql=$conexion->query(" update persona set nombre='$nombre', apellido='$apellido', dni=$dni, fecha_nac='$fecha_nac', correo='$correo' where id=$id ");
        if($sql==1)
        {
            header("location:principal.php");
        }else{
            echo "<div class ='alert alert-danger'> Error al modificar </div>";    
        }
    }else{
        echo "<div class ='alert alert-warning'> campos vacios</div>";
    }
}

?>