<?php
   
   session_start();
   
   include ("../controllers/conexion.php");
   if(!empty($_SESSION['activate'])){

       header('location: ../Index.php');
   }else{
       if(!empty($_POST)){
           if(empty($_POST['correo']) || empty($_POST['contrasena'])){
               $alert = "Ingrese su usuario y contraseña";
           }else{
               $nombre = $_POST['correo'];
               $contrasena = $_POST['contrasena'];
               #Cadena para recuperar datos y compararlos con la BD
               $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$nombre' AND contrasena = '$contrasena'");
               $result = mysqli_num_rows($query);
               #Validacion de datos para iniciar la sesion
               if($result > 0){
                $queryadmin = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$nombre' AND contrasena = '$contrasena' AND tipousuario = 'admin'");
                $resultadmin = mysqli_num_rows($queryadmin);
                if($resultadmin > 0){
                    $data = mysqli_fetch_array($query);
                    $_SESSION['activate'] = true;
                    header ("Location: ../views/Admin/Servicios.php");
                }else{
                    $queryusuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$nombre' AND contrasena = '$contrasena' AND tipousuario = 'usuario'");
                    $resultusuario = mysqli_num_rows($queryusuario);
                    if($resultusuario > 0){
                        $data = mysqli_fetch_array($query);
                        $_SESSION['activate'] = true;
                        $idusuario=$data['idusuario'];
                        header ("Location: ../views/Usuario/Servicio.php?id=$idusuario");
                    }
                }
               }else{
                  echo '
                  <script>
                      alert("Correo y/o contraseña incorrectos");
                      window.location = "../views/RegistrarUsuario.php";
                  </script>
                  
              ';
                  session_destroy();
               }
           }
       }
   }           
?>