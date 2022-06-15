<?php

    include ("../../controllers/conexion.php");
    #Definicion de variables para agregar en al BD
    $nombre=$_POST['nombreServicio'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];

    #QUERY PARA INSERTAR EN LA BD
    $query="insert into servicio(nombreServicio,descripcion,precio) VALUES ('$nombre','$descripcion','$precio')";
    #$resultado=$conexion->query($query);
    $query2=mysqli_query($conexion,$query);
 
    if($query2){
        #Referencias a otra seccion o a otro documento donde se manden las paginas
        echo '
        <script>
            alert("Servicio Creado Con Exito");
            window.location = "../../views/Admin/Servicios.php";
        </script>
        
    ';
        #header ("location:../../views/Admin/Servicios.php");
          
        }
    else {
        echo "Error al Registrar Servicio";
    }
      
?>