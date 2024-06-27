<?php

$host = 'localhost';
$port = '5432'; // Puerto predeterminado para PostgreSQL
$dbname = 'db_dashforge'; // Nombre de tu base de datos
$username = 'postgres'; // Nombre de usuario de tu base de datos
$password = '12345'; // Contraseña de tu base de datos

// Establecer conexión a la base de datos
$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");

// Verificar la conexión
if (!$db) {
    echo "Error de conexión: " . pg_last_error();
    exit();
}

?>
