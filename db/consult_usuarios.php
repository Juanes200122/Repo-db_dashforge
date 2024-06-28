<?php 

include 'conexion.php';

$user_usuarios = "SELECT u.id_usuario, 
                        u.nombre as nombre_usuario,
                        u.email, 
                        u.telefono, 
                        c.id_ciudad,
                        c.nombre as ciudad,
                        t.id_tipo_documento,
                        t.descripcion as tipo_documento,
                        u.nit, 
                        u.fecha_registro,
                        u.user_login,
                        u.contrasena

FROM information_schema.usuarios u
         INNER JOIN information_schema.ciudad c ON c.id_ciudad = u.id_ciudad
    inner join information_schema.tipodocumento t on t.id_tipo_documento = u.id_tipo_documento;
";

$result_users = pg_query($db, $user_usuarios);

$datarest = [];
while ($row = pg_fetch_assoc($result_users)) {
    $datarest[] = [
        "id_usuario" => $row["id_usuario"],
        "nombre" => $row["nombre_usuario"],
        "email" => $row["email"],
        "telefono" => $row["telefono"],
        "id_ciudad" => $row["id_ciudad"],
        "nombre_ciudad" => $row["ciudad"],
        "id_tipo_documento" => $row["id_tipo_documento"],
        "tipo_documento" => $row["tipo_documento"],
        "nit" => $row["nit"],
        "fecha_registro" => $row["fecha_registro"],
        "user_login" => $row["user_login"],
        "contrasena" => $row["contrasena"],
    ];
}

//==========================================================================================================
//
//
//==========================================================================================================

$sec_productos = "SELECT id_producto,
                            nombre, 
                            precio, 
                            id_proveedor,
                            tipo_producto, 
                            cantidad,
                            referencia_id
                        FROM information_schema.productos";


$result_product = pg_query($db, $sec_productos);

$datarest_product = [];
while ($row = pg_fetch_assoc($result_product)) {
    $datarest_product[] = [
        "id_producto" => $row["id_producto"],
        "nombre" => $row["nombre"],
        "precio" => $row["precio"],
        "id_proveedor" => $row["id_proveedor"],
        "tipo_producto" => $row["tipo_producto"],
        "cantidad" => $row["cantidad"],
        "referencia_id" => $row["referencia_id"]
    ];
}

//==========================================================================================================
//
//
//==========================================================================================================


$sec_provedores = "SELECT id_proveedor,
                        proveedores.nombre as nombre_proveedor,
                        c.nombre as ciudad,
                        direccion_localidad,
                            descripcion, 
                            nit,
                            fecha_registro,
                            t.nombre as tipo_producto,
                            fecha_afiliacion, 
                            nit_empresarial 
       FROM information_schema.proveedores
inner join information_schema.ciudad c on c.id_ciudad = proveedores.id_ciudad
inner join information_schema.tipoproducto t on proveedores.tipo_prodcuto = t.id_tipo_producto
inner join information_schema.tipodocumento tp on proveedores.tipo_documento = tp.id_tipo_documento


";


$result_provedores = pg_query($db, $sec_provedores);

$datarest_provedores = [];
while ($row = pg_fetch_assoc($result_provedores)) {
    $datarest_provedores[] = [
        "id_proveedor" => $row["id_proveedor"],
        "nombre_proveedor" => $row["nombre_proveedor"],
        "ciudad" => $row["ciudad"],
        "nit" => $row["nit"],
        "tipo_producto" => $row["tipo_producto"],
        "descripcion" => $row["descripcion"]

    ];
}



//==========================================================================================================
//
//
//==========================================================================================================


$tipo_documento = "select id_tipo_documento, descripcion from information_schema.tipodocumento";

$result_documento = pg_query($db, $tipo_documento);

$datarest_document = [];
while ($row = pg_fetch_assoc($result_documento)) {
    $datarest_document[] = [
        "id_tipo_documento" => $row["id_tipo_documento"],
        "descripcion" => $row["descripcion"]
    ];
}

//==========================================================================================================
//
//
//==========================================================================================================


$tipo_ciudad = "select id_ciudad, nombre from information_schema.ciudad order by nombre";

$result_ciudad = pg_query($db, $tipo_ciudad);

$datarest_ciudad = [];
while ($row = pg_fetch_assoc($result_ciudad)) {
    $datarest_ciudad[] = [
        "id_ciudad" => $row["id_ciudad"],
        "nombre" => $row["nombre"]
    ];
}


$tipo_prodcuto_list = "select id_tipo_producto, nombre from information_schema.tipoproducto order by nombre";

$result_list_product = pg_query($db, $tipo_prodcuto_list);

$datarest_tipo_p = [];
while ($row = pg_fetch_assoc($result_list_product)) {
    $datarest_tipo_p[] = [
        "id_tipo_producto" => $row["id_tipo_producto"],
        "nombre" => $row["nombre"]
    ];
}



$tipo_provedores_list = "select id_proveedor, nombre from information_schema.proveedores order by nombre";

$result_list_product = pg_query($db, $tipo_provedores_list);

$datarest_tipo_provedor = [];
while ($row = pg_fetch_assoc($result_list_product)) {
    $datarest_tipo_provedor[] = [
        "id_proveedor" => $row["id_proveedor"],
        "nombre" => $row["nombre"]
    ];
}



//traemos la cantidad de usuarios totales 
$query_contUsers = "select count(*) from information_schema.productos";
$CountUser = pg_query($db, $query_contUsers);

// Obtener el resultado de la consulta
$total_usuarios = pg_fetch_result($CountUser, 0);



//traemos la cantidad de usuarios totales 
$query_contUsers2 = "select count(*) from information_schema.usuarios";
$CountUser2 = pg_query($db, $query_contUsers2);

// Obtener el resultado de la consulta
$total_usuarios2 = pg_fetch_result($CountUser2, 0);

?>
