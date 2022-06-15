<?php 
include("../../controllers/conexion.php");
#Recibimos el ID de la cita a eliminar
$id=$_REQUEST['id'];
#Cadena para eliminar en la BD
$query="DELETE FROM servicio WHERE idservicio='$id'";
$resultado = $conexion->query($query);
if($resultado > 0){
    echo '
    <script>
        alert("Servicio Eliminado Con Exito");
        window.location = "../../views/Admin/Servicios.php";
    </script>
    
';
    #header ("location:../../views/Admin/Servicios.php");
    }
else {
    echo "Eliminación no exitosa";
}
 ?>
