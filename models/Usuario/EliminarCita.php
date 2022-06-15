<?php 
include("../../controllers/conexion.php");
#Recibimos el ID de la cita a eliminar
$id=$_REQUEST['id'];
$idusuario=$_REQUEST['idusuario'];
$query2="select * from agenda where idusuario=$idusuario";
$resultado2 = $conexion->query($query2);
$row=$resultado2->fetch_assoc();
#Cadena para eliminar en la BD
$query="DELETE FROM agenda WHERE idagenda='$id'";
$resultado = $conexion->query($query);
if($resultado > 0){
    $idusuario=$row['idusuario'];
    echo '
    <script>
        alert("Cita eliminada con exito");
        window.location = "../../views/Usuario/MisCitas.php?id='.$idusuario.'";
    </script>

';
    #header ("location:../../views/Usuario/MisCitas.php?id=$idusuario");
    }
else {
    echo "Eliminación no exitosa";
}
?>