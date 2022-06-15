<?php

    include ("../../controllers/conexion.php");
    $id=$_REQUEST['id'];
    #Definicion de variables para agregar en al BD
    $nombreUsuario=$_POST['nombreUsuario'];
    $nombreServicio=$_POST['nombreServicio'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    #$idusuario=$_POST['idusuario'];

    $query3="select * from agenda where idusuario=$id";
    $resultado3 = $conexion->query($query3);
    $row=$resultado3->fetch_assoc();

    #QUERY PARA INSERTAR EN LA BD
    $query="insert into agenda(nombreUsuario,nombreServicio,fecha,hora,idusuario) VALUES ('$nombreUsuario','$nombreServicio','$fecha','$hora','$id')";
    $resultado=$conexion->query($query);
 
    if($resultado){
        $idusuario=$row['idusuario'];
        #QUERY 2 PARA GUARAR EL HORARIO OCUPADO Y QUE NO SE REPITA LA CITA
        $query2="UPDATE cita SET estatus='ocupado' WHERE hora='$hora'";
        $resultado2=$conexion->query($query2);
        #Referencias a otra seccion o a otro documento donde se manden las paginas
        echo '
        <script>
            alert("Cita Creada Con Exito");
            window.location = "../../views/Usuario/MisCitas.php?id='.$idusuario.'";
        </script>
        
    ';
        #header ("location:../../views/Usuario/MisCitas.php?id=$id");
        }
    else {
        echo '
        <script>
            alert("Cita NO Creada");
            window.location = "../../views/Usuario/MisCitas.php?id='.$idusuario.'";
        </script>
        
    ';
    }
?>