<?php

if(!empty($_POST["nueva_contra"]))
{
    if(empty($_POST["user"]) and empty($_POST["contra"]))
        {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        }else{
            $user=$_POST["user"];
            $contra=$_POST["contra"];
                //los int no se ponen entre comillas como el dni
            $sql=$conexion->query(" update login set user='$user', contra='$contra'");
            if($sql==1)
            {
                header("location:index.php");
            }else{
                echo "<div class ='alert alert-danger'> Error al modificar </div>";    
            }
        }
}

?>