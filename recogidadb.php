<?php

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'sorteo', 'sorteopsw')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('sorteo') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT RND FROM concursantes limit(0,1);';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Mostrar el resultado por pantalla
echo $result;

// Cerrar la conexión
mysql_close($link);
?>