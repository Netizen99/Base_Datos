
<?php

$data = $_GET['data'];
$valorArray = explode('_', $data);

if (count($valorArray) > 1) {
    $numero = $valorArray[1];
    $sql=$conexion->query(" delete from alquileres where numero=$numero");
    if($sql==1)
    {
        echo '<div class="alert alert-success">Transporte eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al transporte</div>';
    }
}
?>