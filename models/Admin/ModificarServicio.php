<?php
    include ("../../controllers/conexion.php");

    $id=$_REQUEST['id'];
    $nombre=$_POST['nombreServicio'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    
    $query="UPDATE servicio SET nombreServicio='$nombre', descripcion='$descripcion', precio='$precio' WHERE idservicio='$id'";

    $resultado = $conexion->query($query);
    
    if($resultado){
        echo '
        <script>
            alert("Servicio Modificado Con Exito");
            window.location = "../../views/Admin/Servicios.php";
        </script>
        
    ';
        #header ("location:../../views/Admin/Servicios.php");
        }
    else {
        echo "Modificación no exitosa";
    }
   
?>