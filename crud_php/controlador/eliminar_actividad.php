<?php

if(!empty($_GET["codigo_act"]))
{
    $codigo_act=$_GET["codigo_act"];
    $sql=$conexion->query(" delete from actividades where codigo_act=$codigo_act");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Actividad eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>