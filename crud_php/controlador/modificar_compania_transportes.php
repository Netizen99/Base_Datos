<?php

if(!empty($_POST["btnregistro_compania_transporte"]))
{
    if(!empty($_POST["nombre"]) and !empty($_POST["telefono"]) and !empty($_POST["email"]) and !empty($_POST["webpage"]))
    {
        $codigo=$_POST["codigo"];
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        $webpage=$_POST["webpage"];
            //los int no se ponen entre comillas como el dni
        $sql=$conexion->query(" update compania_transportes set nombre='$nombre', telefono=$telefono,email='$email', webpage='$webpage' where codigo=$codigo ");
        if($sql==1)
        {
            header("location:compania_transportes.php");
        }else{
            echo "<div class ='alert alert-danger'> Error al modificar </div>";    
        }
    }else{
        echo "<div class ='alert alert-warning'> campos vacios</div>";
    }
}

?>