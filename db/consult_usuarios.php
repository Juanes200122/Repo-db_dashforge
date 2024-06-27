<?php 

include 'conexion.php';

$user_usuarios = "SELECT u.id_usuario, u.nombre as nombre_usuario, u.telefono, u.email, c.nombre
FROM information_schema.usuarios u
         INNER JOIN information_schema.ciudad c ON c.id_ciudad = u.id_ciudad;
";

$result_users = pg_query($db, $user_usuarios);

$datarest = [];
while ($row = pg_fetch_assoc($result_users)) {
    $datarest[] = [
        "id_usuario" => $row["id_usuario"],
        "nombre" => $row["nombre_usuario"],
        "telefono" => $row["telefono"],
        "email" => $row["email"],
        "nombre_ciudad" => $row["nombre"]

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


$tipo_ciudad = "select id_ciudad, nombre from information_schema.ciudad";

$result_ciudad = pg_query($db, $tipo_ciudad);

$datarest_ciudad = [];
while ($row = pg_fetch_assoc($result_ciudad)) {
    $datarest_ciudad[] = [
        "id_ciudad" => $row["id_ciudad"],
        "nombre" => $row["nombre"]
    ];
}

?>
