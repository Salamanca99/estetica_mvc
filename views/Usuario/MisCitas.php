<?php
    include("../../controllers/conexion.php");
    $id=$_REQUEST['id'];
	$query="SELECT * FROM agenda WHERE idusuario='$id'";
    $resultado=$conexion->query($query);
    $row=$resultado->fetch_assoc();    
?>

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
        </style>

	</head>
	<body>
		<ul class="menu">
			<label for="" class="brand">
			<a href="Servicio.php?id=<?php echo $row['idusuario']; ?>"><img src="../../assets/img/logo/logocliente.png" alt=""></a>
			</label>
			<li><a href="Servicio.php?id=<?php echo $row['idusuario']; ?>">Servicios</a></li>
			<li><a href="ReservarCita.php?id=<?php echo $row['idusuario']; ?>">Reservar cita</a></li>
			<li><a href="MisCitas.php?id=<?php echo $row['idusuario']; ?>">Mis citas</a></li>
			<label for="" class="cr">
			<li><a href="../../models/CerrarSesion.php">Cerrar sesión</a></li>
			</label>
			
		</ul>

        <h2>Mis citas</h2>

        <table style="width: 75%">

            <tr>
                <th>
                    Fecha
                </th>
                <th>
                    Hora
                </th>
                <th>
                    Servicios
                </th>
            </tr>
            <?php
					while ($filas=mysqli_fetch_assoc($resultado)) {
				?>
            <tr>

                <th><?php echo $filas['fecha']?></th>
				<th><?php echo $filas['hora']?></th>
				<th><?php echo $filas['nombreServicio']?></th>
                <td><input type="submit" value="Modificar" class="boton-agenda1" id="modificar" onClick=" location.href='../../views/Usuario/ModificarCita.php?idusuario=<?php echo $filas['idusuario'];?>&idagenda=<?php echo $filas['idagenda'];?>'"></td>
				<td><input type="submit" value="Eliminar" class="boton-agenda2" id="eliminar" onClick=" location.href='../../models/Usuario/EliminarCita.php?id=<?php echo $filas['idagenda'];?> & idusuario=<?php echo $filas['idusuario'];?>'"></td>
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