<?php
/* USE asignatura;
CREATE TABLE asignaturas(
	codAsignatura VARCHAR(20) NOT NULL PRIMARY KEY,
	nombre VARCHAR(40) NOT NULL,
	color CHAR(6) NOT NULL
); */

/* INSERT INTO asignaturas VALUES
	('A145','DWESV','543222'),
	('B210','DWENC','654321') */

	require 'configdb.php';

	$conexion = new mysqli("SERVIDOR", "USUARIO", "PASSWORD", "BBDD");

	$resultado = $conexion->query("select * from asignatura");

	function mostrarprimerafila(){
		$fila = $resultado->fetch_array();
		echo '<td>'.$fila['codAsignatura'].'</td>';
		echo '<td>'.$fila['nombre'].'</td>';
		echo '<td style="background-color:'.$fila['color'].';"></td>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php mostrarprimerafila(); ?>
</body>
</html>