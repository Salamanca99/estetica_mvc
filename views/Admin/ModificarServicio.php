<!--MODIFICAR SERVICIOS-->
<?php
	include("../../controllers/conexion.php");
	
    $id=$_REQUEST['id'];
	$query="SELECT * FROM servicio WHERE idservicio='$id'";
    $resultado=$conexion->query($query);
    $row=$resultado->fetch_assoc();    
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modificar servicio</title>
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

        <form class="formulario" action="../../models/Admin/ModificarServicio.php?id=<?php echo $row['idservicio']; ?>" method="post">
    
            <h1>Modificar servicio</h1>
             <div class="contenedor">
             
                 <h2>Nombre</h2>
                 <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text" REQUIRED name="nombreServicio"  placeholder="nombre" value="<?php echo $row['nombreServicio']; ?>" >
                 <label for=""></label>
                 </div>

                 <h2>Descripción del servicio</h2>
                 <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text" REQUIRED name="descripcion"  placeholder="descripcion" value="<?php echo $row['descripcion']; ?>" >
                 <label for=""></label>
                 </div>

                 <h2>Precio</h2>
                 <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text" REQUIRED name="precio"  placeholder="precio" value="<?php echo $row['precio']; ?>" >
                 <label for=""></label>
                 </div>
                 
                 <input  type="submit" value="Guardar datos" class="button" id="inpGuardardatos" >
             </div>
            </form>
	</body>
</html>
