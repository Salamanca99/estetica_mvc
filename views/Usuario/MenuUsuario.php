<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Menu Servicios</title>
		<link rel="icon" href="https://img.icons8.com/bubbles/50/000000/barbershop.png">
		<link rel="stylesheet" href="../../assets/css/estiloscliente.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<ul class="menu">
			<label for="" class="brand">
			<a href="Servicio.php?id=<?php echo $row['idusuario']; ?>"><img src="../../assets/img/logo/logocliente.png" alt=""></a>
			</label>
			<li><a href="Servico.php?id=<?php echo $row['idusuario']; ?>">Servicios</a></li>
			<li><a href="ReservarCita.php?id=<?php echo $row['idusuario']; ?>">Reservar cita</a></li>
			<li><a href="MisCitas.php?id=<?php echo $row['idusuario']; ?>">Mis citas</a></li>
			<label for="" class="cr">
				<li><a href="../../models/CerrarSesion.php">Cerrar sesión</a></li>
			</label>	
		</ul>
	</body>
</html>
<?php 
	mysqli_close($conexion);
?>