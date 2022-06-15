<!--MENU DE LA AGENDA DEL ADMIN-->
<?php
	include("../../controllers/conexion.php");
	$sql="select * from agenda";
	$resultado=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Agenda</title>
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
                padding: 30px;
                margin: 40px;
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
				<a href="Servicios.php"><img src="../../assets/img/logo/logocliente.png" alt=""></a>
			</label>
			<li><a href="Servicios.php">Servicios</a></li>
			<li><a href="Agenda.php">Agenda</a></li>
			<label for="" class="cr">
				<li><a href="../../models/CerrarSesion.php">Cerrar sesión</a></li>
			</label>
			
		</ul>

        <h2 class="servicios-titulo2">Agenda</h2><br><br><br>

        <table class="tabla2" style="width: 75%">

            <tr>
                <th>
                    Usuario
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Hora
                </th>
            </tr>

            <?php
					while ($filas=mysqli_fetch_assoc($resultado)) {
				?>
				<tr>
                    <th><?php echo $filas['nombreUsuario']?></th>
					<th><?php echo $filas['fecha']?></th>
					<th><?php echo $filas['hora']?></th>
					<td width="200px"><input type="submit" value="Eliminar" class="boton-agenda2" id="eliminar" onClick=" location.href='../../models/Admin/EliminarCita.php?id=<?php echo $filas['idagenda'];?>' "></td>
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