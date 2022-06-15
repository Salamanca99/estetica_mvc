<?php

    include ("../../controllers/conexion.php");

    $idusuario=$_REQUEST['idusuario'];
    $idagenda=$_REQUEST['idagenda'];
    $nombreServicio=$_POST['nombreServicio'];
    $fecha=$_POST['fechan'];
    $hora=$_POST['horan'];
    
    $query="UPDATE agenda SET nombreServicio='$nombreServicio', fecha='$fecha', hora='$hora' WHERE idagenda='$idagenda'";

    $resultado = $conexion->query($query);

    $query2="SELECT * FROM agenda WHERE idusuario=$idusuario";
    $resultado2 = $conexion->query($query2);

    $filas=$resultado2->fetch_assoc();

    if($resultado>0){
        $idusuario2=$filas['idusuario'];

        echo '
        <script>
            alert("Cita Modificada Con Exito");
            window.location = "../../views/Usuario/MisCitas.php?id='.$idusuario.'";
        </script>
        
    ';
        #header ("location:../../views/Usuario/MisCitas.php?id=$idusuario2");
        }
    else {
        echo "Modificación no exitosa";
    }
?>
