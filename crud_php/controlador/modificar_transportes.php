<?php

if(!empty($_POST["btnregistro_transporte"]))
{
    if(!empty($_POST["fabricante"]) and !empty($_POST["descripcion"]) and !empty($_POST["asientos"]) and !empty($_POST["modelo"]) and !empty($_POST["placa"]))
    {
        $codigo_bus=$_POST["codigo_bus"];
        $fabricante=$_POST["fabricante"];
        $descripcion=$_POST["descripcion"];
        $asientos=$_POST["asientos"];
        $modelo=$_POST["modelo"];
        $placa=$_POST["placa"];
            //los int no se ponen entre comillas como el dni
        $sql=$conexion->query(" update transportes set fabricante='$fabricante', descripcion='$descripcion',asientos='$asientos', modelo='$modelo' , placa='$placa' where codigo_bus='$codigo_bus' ");
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