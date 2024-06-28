<?php 
include 'conexion.php';

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $direccion_localidad = $_POST['direccion_localidad'];
    $tipo_documento = $_POST['tipo_documento'];
    $nit = $_POST['nit'];
    $fecha_registro = $_POST['fecha_registro'];
    $tipo_producto = $_POST['tipo_producto'];
    $ciudad = $_POST['ciudad'];
    $fecha_afiliacion = $_POST['fecha_afiliacion'];
    $nit_empresarial = $_POST['nit_empresarial'];

    // Consulta SQL para inserción
    $sql = "INSERT INTO information_schema.proveedores (nombre, direccion_localidad, tipo_documento, nit, fecha_registro, tipo_prodcuto, id_ciudad, fecha_afiliacion, nit_empresarial)
            VALUES ('$nombre_proveedor', '$direccion_localidad', '$tipo_documento', '$nit', '$fecha_registro', '$tipo_producto', '$ciudad', '$fecha_afiliacion', '$nit_empresarial')";

                
    $result = pg_query($db, $sql);
    $row = pg_fetch_assoc($result);

}

?>