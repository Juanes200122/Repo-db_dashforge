<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $id_proveedor = $_POST['id_proveedor'];
    $tipo_producto = $_POST['tipo_producto'];
    $cantidad = $_POST['cantidad'];
    $referencia_id = $_POST['referencia_id'];
    $fecha_ingreso = $_POST['fecha_ingreso'];

    $numero = filter_var($precio, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $numero = str_replace('.', '', $numero);

    $precio = $cantidad * $numero;





    
    // Incluir conexión y ejecución de consulta SQL
    $sql = "INSERT INTO information_schema.productos (nombre,
                                                    precio, 
                                                    id_proveedor, 
                                                    tipo_producto, 
                                                    cantidad,
                                                    referencia_id, 
                                                    fecha_ingreso)
                                                     VALUES ('$nombre', '$numero', '$id_proveedor', '$tipo_producto', '$cantidad', '$referencia_id', '$fecha_ingreso')";
    
    $result = pg_query($db, $sql);
    $row = pg_fetch_assoc($result);

    echo "<script>window.location.href = '../index.php'</script>";




}

?>
