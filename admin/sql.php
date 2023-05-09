<?php

$objConexion= new conexion();

$sql="INSERT INTO `Productos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, 'producto 1', 'imagen.jpg', 'es de hace mucho tiempo');";

$objConexion -> ejecutar($sql);
?>