<?php 

include 'conexion.php';

$dashboard_analityc = "SELECT 'Productos' AS entidad, COUNT(*) AS cantidad FROM information_schema.productos
                            UNION ALL
                            SELECT 'Proveedores' AS entidad, COUNT(id_proveedor) AS cantidad FROM information_schema.proveedores
                            UNION ALL
                            SELECT 'Usuarios' AS entidad, COUNT(id_usuario) AS cantidad FROM information_schema.usuarios
                            UNION ALL
                            SELECT 'Deudas Pagos' AS entidad, SUM(monto) AS cantidad FROM information_schema.deudaspagos";

$result = pg_query($db, $dashboard_analityc);

$productos_count = 0;
$proveedores_count = 0;
$usuarios_count = 0;
$deudas_pagos_sum = 0;

while ($row = pg_fetch_assoc($result)) {
    switch ($row['entidad']) {
        case 'Productos':
            $productos_count = $row['cantidad'];
            break;
        case 'Proveedores':
            $proveedores_count = $row['cantidad'];
            break;
        case 'Usuarios':
            $usuarios_count = $row['cantidad'];
            break;
        case 'Deudas Pagos':
            $deudas_pagos_sum = $row['cantidad'];
            break;
    }
}

?>
