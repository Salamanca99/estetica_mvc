<!--VENTANA DE INICO INTERFAZ -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesión</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/bubbles/50/000000/barbershop.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="assets/css/estiloLogin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
</head>
<style type="text/css">
          body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url(assets/img/imagenes/Fondos/imagenfonodo.jpg);
            background-size: cover;
            background-attachment: fixed;
            }
</style>
<body>
    <form class="formulario" method="post" action="models/Ingresar.php">
    <h1>Inicio de Sesión</h1>
     <div class="contenedor">
         
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="email"  name="correo" placeholder="Ingresa tu Correo" required id="user">
         <label for=""></label>
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input type="password"  name="contrasena" placeholder="Ingresa tu Contraseña"  required id="password">
         <label for=""></label>
         
         </div>
         <input  type="submit" value="Iniciar Sesión" class="button" id="inpIniciaSesion" >
         
         <p>¿Aun no tienes una cuenta? <a class="link" href="views/RegistrarUsuario.php">Crea una cuenta aquí </a></p>
     </div>
    </form>
    <script src="assets/js/Loginvista.js"></script>
</body>
</html>