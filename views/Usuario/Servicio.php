<?php
	include("../../controllers/conexion.php");
    $id=$_REQUEST['id'];
	$sql="select * from servicio";
	$resultado=mysqli_query($conexion,$sql);
    $query2="SELECT * FROM usuario WHERE idusuario='$id'";
    $resultado2=$conexion->query($query2);
    $row=$resultado2->fetch_assoc();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Menu Servicios Cliente</title>
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

        <h2 class="servicios-titulo1">Servicios</h2>

        </div>

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