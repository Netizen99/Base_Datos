<?php

if(!empty($_GET["codigo"]))
{
    $codigo=$_GET["codigo"];
    $sql=$conexion->query(" delete from compania_transportes where codigo=$codigo");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Compañia eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>