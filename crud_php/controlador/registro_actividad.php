<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistraractividad"]))
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["plan"]) )
        {
            $plan=$_POST["plan"];

            $sql=$conexion->query(" insert into actividades(plan)values('$plan') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Actividad registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error en Actividad registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>