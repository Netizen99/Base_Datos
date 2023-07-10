<?php

if(!empty($_GET["cedula"]))
{
    $cedula=$_GET["cedula"];
    $sql=$conexion->query(" delete from choferes where cedula=$cedula");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Chofer eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>