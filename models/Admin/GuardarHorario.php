<?php

    include ("../../controllers/conexion.php");
    #Definicion de variables para agregar en al BD
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    
    #QUERY PARA INSERTAR EN LA BD
    $query="insert into cita(fecha, hora, estatus) VALUES ('$fecha','$hora','disponible')";
    #$resultado=$conexion->query($query);
    $query2=mysqli_query($conexion,$query);
 
    if($query2){
        #Referencias a otra seccion o a otro documento donde se manden las paginas
        echo '
        <script>
            alert("Horario Creado Con Exito");
            window.location = "../../views/Admin/Servicios.php";
        </script>
        
    ';
        #header ("location:../../views/Admin/Servicios.php");
          
        }
    else {
        echo "Error al Registrar Horario";
    }
      
?>