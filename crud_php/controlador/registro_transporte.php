<?php
//Va a decir si presiona el boton o no para registrar
    if(!empty($_POST["btnregistrartransporte"]))
    {//Con esto va a verificar que esten todos esos datos para poder llenar y aceptar una peticion
        if(!empty($_POST["fabricante"]) and !empty($_POST["descripcion"]) and !empty($_POST["asientos"]) and !empty($_POST["modelo"])and !empty($_POST["placa"])and !empty($_POST["fk_comp"]))
        {
            $fabricante=$_POST["fabricante"];
            $descripcion=$_POST["descripcion"];
            $asientos=$_POST["asientos"];
            $modelo=$_POST["modelo"];
            $placa=$_POST["placa"];
            $fk_comp=$_POST["fk_comp"];

            $sql=$conexion->query(" insert into transportes(fabricante,descripcion,asientos,modelo,placa,fk_comp)values('$fabricante','$descripcion','$asientos','$modelo','$placa','$fk_comp') ");
            if($sql==1)
            {
                echo '<div class="alert alert-success">Transporte registrada correctamente</div>';
                header("location:compania_transportes.php");
            }else{
                echo '<div class="alert alert-danger">Error en Transporte registrada correctamente</div>';
            }
        }else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
            //echo"<script>alert('Alguno de los campos esta vacio')</script>";
            
        }
    }
?>