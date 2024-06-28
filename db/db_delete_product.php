<?php 
include 'conexion.php';

// Verificar si se ha enviado una solicitud de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
    
    // Obtener el ID del usuario a eliminar
    $id_product = $_POST['delete_product'];

    $query1 = "DELETE FROM information_schema.productos where id_producto = '$id_product'";
    $result1 = pg_query($db, $query1);

    // Verificar si las consultas de eliminación fueron exitosas
    if ($result1) {
        echo "<script>window.location.href = '../index.php'</script>";
    } else {
        echo json_encode(array("status" => "error", "message" => "Error al intentar eliminar el registro."));
    }
}
?>
