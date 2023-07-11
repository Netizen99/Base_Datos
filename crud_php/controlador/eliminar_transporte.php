<?php

if(!empty($_GET["codigo_bus"]))
{
    $codigo_bus=$_GET["codigo_bus"];
    $sql=$conexion->query(" delete from transportes where codigo_bus=$codigo_bus");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Transporte eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al transporte</div>';
    }
}

?>