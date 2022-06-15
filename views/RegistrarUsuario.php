<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuario</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/bubbles/50/000000/barbershop.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../assets/css/estiloLogin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>  
<style type="text/css">
          body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url(../assets/img/imagenes/Fondos/imagenfonodo.jpg);
            background-size: cover;
            background-attachment: fixed;
            }
</style>
<body>
 <form class="formulario" method="post"  action="../models/Usuario/GuardarUsuario.php">
         
 <h1>Crear cuenta</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Ingresa tu nombre" name="nombreUsuario" required id="name">
         <label for=""></label>
         </div>

         <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Ingresa tu apellido" name ="apellido" required id="lastname">
            <label for=""></label>
        </div>    

        <div class="input-contenedor">
            <i class="fas fa-phone icon"></i>
            <input type="tel" placeholder="Ingresa tu teléfono" name="telefono" required id="phone">
        </div>      
         
         <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="email" placeholder="Ingresa tu correo electronico" name="correo" required id="email">
         </div>
         
         <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Ingresa tu contraseña" name="contrasena" required id="pass">
         </div>
         <input type="submit" value="Crear cuenta" class="button" required id="inpCrearCuenta">
        
         <p>¿Ya tienes una cuenta?<a class="link" href="../Index.php"> Inicia Sesión</a></p>
     </div>
    </form>
    <script src="../../assets/js/registrarvista.js"></script>
</body>
</html>
