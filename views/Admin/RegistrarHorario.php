<!--REGISTRAR SERVICIOS-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registrar servicio</title>
		<link rel="icon" href="https://img.icons8.com/bubbles/50/000000/barbershop.png">
        <link rel="stylesheet" href="../../assets/css/estiloadmin.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<ul class="menu">
			<label for="" class="brand">
			<a href="Servicios.php"><img src="../../assets/img/logo/logocliente.png" alt=""></a>
			</label>
			<li><a href="Servicios.php">Servicios</a></li>
			<li><a href="Agenda.php">Agenda</a></li>
            <label for="" class="cr">
            <li><a href="../../models/CerrarSesion.php">Cerrar sesión</a></li>  
            </label>
		</ul>

        <form class="formulario" action="../../models/Admin/GuardarHorario.php" method="post" enctype="multipart/form-data">
    
            <h1>Registrar Horarios</h1>
             <div class="contenedor">
             
                 <h2>Fecha</h2>
                 <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text"  name="fecha" placeholder="Ingrese la fecha" required id="name-rs">
                 <label for=""></label>
                 </div>

                 <h2>Hora</h2>
                 <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text"  name="hora" placeholder="Ingrese la hora" required id="service-rs">
                 <label for=""></label>
                 </div>

                 <input  type="submit" value="Guardar datos" class="button" id="inpGuardardatos">
             </div>
            </form>
	</body>
</html>
