<?php

$data = $_GET['data'];
$valorArray = explode('_', $data);

if (count($valorArray) > 1) {
    $codigo_bus = $valorArray[1];
    $sql=$conexion->query(" delete from transportes where codigo_bus=$codigo_bus");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Transporte eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al transporte</div>';
    }
}
?>