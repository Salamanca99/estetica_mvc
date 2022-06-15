<?php 
include("../../controllers/conexion.php");
#Recibimos el ID de la cita a eliminar
$id=$_REQUEST['id'];
#Cadena para eliminar en la BD
$query="DELETE FROM agenda WHERE idagenda='$id'";
$resultado = $conexion->query($query);
if($resultado > 0){
    echo '
    <script>
        alert("Cita Eliminada Con Exito");
        window.location = "../../views/Admin/Agenda.php";
    </script>
    
';
    #header ("location:../../views/Admin/Agenda.php");
    }
else {
    echo "Eliminación no exitosa";
}
 ?>
