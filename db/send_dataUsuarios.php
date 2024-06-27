<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $documento = $_POST['id_documento'];
    $nit = $_POST['nit'];
    $ciudad = $_POST['ciudad'];
    $fecha_registro = $_POST['fecha_registro'];
    $usr_login = $_POST['usr_login'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];

    // Concatenar el nombre y apellido
    $nombre_completo = $nombre . ' ' . $apellido;   

    // Incluir conexión y ejecución de consulta SQL
    $sql = "INSERT INTO information_schema.usuarios (nombre, email, telefono, id_ciudad, id_tipo_documento, nit, fecha_registro, user_login, contrasena)
            VALUES ('$nombre_completo', '$email', '$celular', '$ciudad', '$documento', '$nit', '$fecha_registro', '$usr_login', '$contrasena')";
    
    $result = pg_query($db, $sql);
    $row = pg_fetch_assoc($result);

}

?>
