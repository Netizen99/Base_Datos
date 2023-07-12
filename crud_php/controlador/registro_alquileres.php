<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistraralquileres"]))
        $data = $_GET['data'];
        $valorArray = explode('_', $data);
        
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["ubicacion"]) and !empty($_POST["fecha"]) and !empty($_POST["costo_dia"]))
        {
            $ubicacion=$_POST["ubicacion"];
            $fecha=$_POST["fecha"];
            $costo_dia=$_POST["costo_dia"];

            $sql=$conexion->query(" insert into alquileres(ubicacion,fecha,costo_dia,fk_codigo_bus)values('$ubicacion','$fecha',$costo_dia,'$valorArray[0]') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Alquiler registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error en Alquiler registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>