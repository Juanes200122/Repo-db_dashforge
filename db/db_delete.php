<?php 
include 'conexion.php';

// Verificar si se ha enviado una solicitud de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    
    // Obtener el ID del usuario a eliminar
    $id_user = $_POST['delete_user'];

    $query1 = "DELETE FROM information_schema.deudaspagos WHERE id_usuario = '$id_user'";
    $result1 = pg_query($db, $query1);

    $query2 = "DELETE FROM information_schema.usuarios WHERE id_usuario = '$id_user'";
    $result2 = pg_query($db, $query2);

    // Verificar si las consultas de eliminación fueron exitosas
    if ($result1 && $result2) {
    echo "<script>window.location.href = '../index.php'</script>";
        
    } else {
        echo json_encode(array("status" => "error", "message" => "Error al intentar eliminar el registro."));
    }
}
?>
