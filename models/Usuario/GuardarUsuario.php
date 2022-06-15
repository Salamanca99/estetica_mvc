<?php

    include ("../../controllers/conexion.php");
    #Definicion de variables para agregar en al BD
    $nombreUsuario=$_POST['nombreUsuario'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];

    #VERIFICAR QUE EL CORREO NO SE REPITA
    $veririfcar = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");
    if(mysqli_num_rows($veririfcar) > 0 ){
        echo '
            <script>
                alert("Este correo ya existe, intenta con otro diferente");
                window.location = " ../../views/RegistrarUsuario.php";
            </script>
            
        ';
        #header ("Location: ../../Index.php");
        exit();
    }

    #QUERY PARA INSERTAR EN LA BD
    $query="insert into usuario(nombreUsuario,apellido,telefono,correo,contrasena,tipousuario) VALUES ('$nombreUsuario','$apellido','$telefono','$correo','$contrasena','usuario')";
    $resultado=$conexion->query($query);
 
    if($resultado){
        echo '
            <script>
                alert("Cuenta creada con exito");
                window.location = " ../../Index.php";
            </script>
            
        ';         
        }
    else {
        echo "Error al Registrar Usuario";
    }
      
?>