<!--MENU DE LOS SERVICIOS ADMIN-->
<?php
	include("../../controllers/conexion.php");
	$sql="select * from servicio";
	$resultado=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Menu Servicios Administrador</title>
		<link rel="icon" href="https://img.icons8.com/bubbles/50/000000/barbershop.png">
        <link rel="stylesheet" href="../../assets/css/estiloadmin.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <style type="text/css">
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse ;
               
            }

            th, td{
                padding: 25px;
            }

            .boton-agenda1{
                border: none;
                width: 75px;
                color: black;
                font-size: 15px 25%;
                background:  #EFB7B7;
                padding: 12px;
                border-radius: 5px;
                cursor: pointer;
	            margin-bottom: -15px;
	            text-align: center;
                font-family: 'Arimo', sans-serif;
            }

            .boton-agenda1:hover{
                color: black;
	            background-color: #E6CD8F;  
            }

            .boton-agenda2{
                border: none;
                width: 90px;
                color: black;
                font-size: 16px 25%;
                background:  #EFB7B7;
                padding: 12px;
                border-radius: 5px;
                cursor: pointer;
	            margin-bottom: -15px;
	            text-align: center;
                font-family: 'Arimo', sans-serif;
            }

            .boton-agenda2:hover{
                color: black;
	            background-color: #E6CD8F;  
            }

            .botonRH{
                position: relative;
	            left: 70%;
                margin-top: 70px;
                border: none;
                width: 15%;
                color: black;
                font-size: 16px;
                font-weight: bold;
                background:  #E6CD8F;
                padding: 17px 25px;
                border-radius: 5px;
                cursor: pointer;
	            margin-bottom: 15px;
	            text-align: center;
            }

            .botonRH:hover{
                color: black;
	            background-color: #D8AC9C; 
            }
        </style>

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

        <h2 class="servicios-titulo1">Servicios</h2><br><br><br>
    
        <input type="submit" value="Registrar servicio" class="botonRS" id="Registrar-servicio" onClick="location.href='../../views/Admin/RegistrarServicio.php'">
        <input type="submit" value="Registrar horario" class="botonRH" id="Registrar-servicio" onClick="location.href='../../views/Admin/RegistrarHorario.php'">

        <table class="tabla" style="width: 75%" >

            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Precio
                </th>
            </tr>

            <?php
				while ($filas=mysqli_fetch_assoc($resultado)) {
			?>
				<tr>
					<th><?php echo $filas['nombreServicio']?></th>
					<th><?php echo $filas['descripcion']?></th>
                    <th><?php echo $filas['precio']?></th>
                    <td><input type="submit" value="Modificar" class="boton-agenda1" id="modificar" onClick=" location.href='../../views/Admin/ModificarServicio.php?id=<?php echo $filas['idservicio'];?>' "></td>
					<td><input type="submit" value="Eliminar" class="boton-agenda2" id="eliminar" onClick=" location.href='../../models/Admin/EliminarServicio.php?id=<?php echo $filas['idservicio'];?>' "></td>
				</tr>
				<?php
					}
				?>

        </table>
	</body>
</html>
<?php 
	mysqli_close($conexion);
?>