<?php
	include("../../controllers/conexion.php");
    $id=$_REQUEST['id'];
	$sql="select fecha from cita  WHERE estatus = 'disponible'";
	$resultado=mysqli_query($conexion,$sql);
    $sql2="select * from servicio";
    $resultado2=mysqli_query($conexion,$sql2);
    $sql3="select hora from cita  WHERE estatus = 'disponible'";
	$resultado3=mysqli_query($conexion,$sql3);
    $sql4="select * from usuario where idusuario=$id";
    $resultado4=mysqli_query($conexion,$sql4);
    $row=$resultado4->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Reservar cita</title>
		<link rel="icon" href="https://img.icons8.com/bubbles/50/000000/barbershop.png">
        <link rel="stylesheet" href="../../assets/css/estiloscliente.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>

    <style type="text/css">
        .combobox{
	        border: none;
            width: 100%;
            color: black;
            font-size: 20px;
            background:  #fff;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
	        margin-bottom: 1px;	
        }

        .formulario-rc{
	        background: #FFF6EA;
            margin-top: 150px;
            padding: 3px;
        }
        @media(min-width:768px)
        {
        .formulario-rc{
	        margin: 33%;
	        width: 500px;
	        margin-top: 70px;
	        border-radius: 2%;
        }
}
        </style>

	<body>
		<ul class="menu">
			<label for="" class="brand">
			<a href="Servicio.php?id=<?php echo $row['idusuario']; ?>"><img src="../../assets/img/logo/logocliente.png" alt=""></a>
			</label>
			<li><a href="Servicio.php?id=<?php echo $row['idusuario']; ?>">Servicios</a></li>
			<li><a href="ReservarCita.php?id=<?php echo $row['idusuario']; ?>">Reservar cita</a></li>
			<li><a href="MisCitas.php?id=<?php echo $row['idusuario']; ?>">Mis citas</a></li>
			<label for="" class="cr">
				<li><a href="../../models/CerrarSesion.php">Cerrar Sesión</a></li>
			</label>
		</ul>

        <form class="formulario-rc" action="../../models/Usuario/GuardarCita.php?id=<?php echo $row['idusuario']; ?>" method="post">
    
             <div class="contenedor">

             <h1>Reservar cita</h1>
             
                 <h2>Nombre</h2>
                 <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text"  name="nombreUsuario" value=<?php echo $row['nombreUsuario']; ?> readonly required id="name-rc">
                 <label for=""></label>
                 </div>

                 <h2>Servicio</h2>
                 <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                       <select name="nombreServicio" placeholder="Seleccione una servicio" class="combobox" required id="service-rc">
                       <?php
                            while ($filas = mysqli_fetch_array($resultado2)) {
                                $nombreServicio=$filas['nombreServicio'];
				        ?>
                          <option><?php echo $nombreServicio; ?></option>
				        
                        <?php
					        }
				        ?>    
                       </select>    
                 </div>

                 <h2>Fecha</h2>
                 <div class="input-contenedor">
                         <i class="fas fa-date icon"></i>
                        <select name="fecha" placeholder="Seleccione una Fecha" class="combobox" required id="service-rc">
                        <?php
                            while ($filas = mysqli_fetch_array($resultado)) {
                                $fecha=$filas['fecha'];
				        ?>
                          <option><?php echo $fecha; ?></option>
				        
                        <?php
					        }
				        ?>    
                        </select>    
                 </div>

                 <h2>Hora</h2>
                
                 <div class="input-contenedor">
                        <i class="fas fa-datetime icon"></i>
                        <select name="hora" placeholder="Seleccione una hora" class="combobox" required id="service-rc">
                        <?php
                       
				            while ($filas = mysqli_fetch_array($resultado3)) {
                                $hora=$filas['hora'];
				        ?>
                        <option><?php echo $hora; ?></option>
				        
                        <?php
					        }
				        ?>  
                        </select>    
                     </div>

                 <input  type="submit" value="Reservar cita" class="button" id="inpReservarcita" >
                 
             </div>
            </form>
	</body>
</html>
<?php 
	mysqli_close($conexion);
?>
