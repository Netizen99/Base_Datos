<?php

if(!empty($_GET["cedula_guia"]))
{
    $cedula_guia=$_GET["cedula_guia"];
    $sql=$conexion->query(" delete from guias where cedula_guia=$cedula_guia");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Guia eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>