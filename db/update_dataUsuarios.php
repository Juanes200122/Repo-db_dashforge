<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $documento = $_POST['id_documento'];
    $nit = $_POST['nit'];
    $ciudad = $_POST['ciudad'];
    $fecha_registro = $_POST['fecha_registro'];
    $usr_login = $_POST['usr_login'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];
    $id_usuario = $_POST['id_usuario'];


// Incluir conexión y ejecución de consulta SQL
$sql = "UPDATE information_schema.usuarios 
        SET nombre = '$nombre', 
            email = '$email', 
            telefono = '$celular', 
            id_ciudad = '$ciudad', 
            id_tipo_documento = '$documento', 
            nit = '$nit', 
            fecha_registro = '$fecha_registro', 
            user_login = '$usr_login', 
            contrasena = '$contrasena'
        WHERE id_usuario = '$id_usuario'";

    $result = pg_query($db, $sql);
    $row = pg_fetch_assoc($result);

    echo "<script>window.location.href = '../index.php'</script>";

}

?>
