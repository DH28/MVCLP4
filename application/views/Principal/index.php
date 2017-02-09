<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h1>Bienvenido <em><?php echo $_SESSION["usuario"];?></em></h1>
	<a href="<?php echo base_url()?>Principal/index">Inicio</a>
	<a href="<?php echo base_url()?>Empleado/index">Empleados</a>
	<a href="<?php echo base_url()?>Welcome/salir">Salir</a>
	<a href="#">Otros</a>
</body>
</html>




