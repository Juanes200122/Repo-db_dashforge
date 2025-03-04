<?php
include '../db/consult_usuarios.php';

?>


<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">-->
<link rel="stylesheet" type="text/css" href="assets/css/css_datatables.css">

<style>
    .container_decoration .bloque_text {
        display: 100%;
        height: 250px;
        background-color: rgb(255, 255, 255);
        border-radius: 10px;
    }


    .container_decoration {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .container_decoration .container_decorate {
        width: 100%;
        height: 210px;
        background-color: #5b6bff;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
    }

    .container_decoration .container_decorate #text-uper {
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    .container_decoration .container_decorate .create_role span {
        color: white;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .container_decoration .grafict {
        height: 150px;
        background-color: rgb(255, 255, 255);
        border-radius: 10px;
    }

    .container_decoration .grafict .lap_-01 {
        padding: 8px 20px 0px 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .container_decoration .grafict .conunt_user {
        font-size: 30px;
        padding-left: 20px;
    }

    .container_decoration .grafict .skill-box {
        width: 100%;
        height: 30px;
        padding: 10px;

    }

    .container_decoration .grafict .skill-box .skill-bar {
        width: 100%;
        height: 10px;
        background-color: rgb(239, 239, 239);
        border-radius: 20px;
        position: relative;
    }

    .container_decoration .grafict .skill-box .skill-per {
        background-color: rgb(255, 0, 0);
        height: 100%;
        position: absolute;
        border-radius: 20px;
    }

    .container_decoration .grafict .lap_-01 .spanSVG {
        height: 20px;
    }

    .tooltip {
        position: absolute;
        right: -10px;
        top: -25px;
        font-size: 13px;
        padding: 2px 5px;
        border-radius: 10px;
        background-color: rgba(255, 0, 0, 0.344);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .open_modal_section {
        width: calc(100% - 40px);
        height: calc(100dvh - 180px);
        background-color: #f7f8fa;
        position: absolute;
        display: none;
    }

    .bloque_inputs {
        display: flex;
        flex-direction: column;
    }

    .grid-columns {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        font-size: 15px;
    }

    .grid-columns .bloque_inputs input {
        height: 30px;
        border-radius: 10px;
    }

    .grid-columns .bloque_inputs input {
        font-weight: 500;
        font-size: 14px;
        height: 40px;
        border-radius: 10px;
        padding-left: 10px;
        border: none;
        border-bottom: 1px solid #e5e5e5;
        outline: none;
    }

    .grid-columns .bloque_inputs input:focus {
        border-bottom: 1px solid #5b6bff;
        -webkit-transition: 0.1s;
        transition: 0.5s;
    }

    .paddin_top {
        padding-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    button {
        width: 100px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.75rem 1.5rem;
        background-color: #14cf34;
        color: #ffffff;
        font-size: 0.75rem;
        line-height: 1rem;
        font-weight: 700;
        cursor: pointer;
        text-align: center;
        text-transform: uppercase;
        vertical-align: middle;
        align-items: center;
        border-radius: 0.5rem;
        user-select: none;
        gap: 0.75rem;
        box-shadow: 0 4px 6px -1px #488aec31, 0 2px 4px -1px #488aec17;
        transition: all 0.6s ease;
    }

    button:hover {
        box-shadow: 0 10px 15px -3px #488aec4f, 0 4px 6px -2px #488aec17;
    }

    button:focus,
    button:active {
        opacity: 0.85;
        box-shadow: none;
    }

    button img {
        width: 1.25rem;
        height: 1.25rem;
    }

    #select_tipe {
        font-weight: 500;
        font-size: 14px;
        height: 40px;
        border-radius: 10px;
        padding-left: 10px;
        border: none;
        border-bottom: 1px solid #e5e5e5;
        outline: none;
    }

    #id_delete_alert {
        background-color: transparent;
        padding: 0;
        margin: 0;
        border-radius: 0;
        width: max-content;
        color: red;
        box-shadow: none;
    }
</style>

<div class="flex_flex">
    <div class="container_table">
        <table id="usuarios" class="display">
            <thead>
                <tr style="text-align: justify;">
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>NIT</th>
                    <th>Tipo documento</th>
                    <th>Producto asociado</th>
                    <th style="text-align: center;">Configuraciones</th>
                </tr>
            </thead>
            <tbody>
            <?php

                $dataPrint_users = '';

                foreach ($datarest_provedores as $user) {
                    $dataPrint_users .= '
                        <tr>
                            <td>' . $user["nombre_proveedor"] . '</td>
                            <td>' . $user["ciudad"] . '</td>
                            <td>' . $user["nit"] . '</td>
                            <td>' . $user["tipo_producto"] . '</td>
                            <td>' . $user["descripcion"] . '</td>


                            <th class="th_ankor">                                                                                                                                                         
                                <form method="post" action="db/db_delete_proveedores.php" id="">
                                    <input type="hidden" name="delete_product" value="' . htmlentities($user["id_proveedor"]) . '">
                                    <button type="submit" class="submit" id="id_delete_alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                        </svg>                                    
                                    </button>                                  
                                </form>                              
                            </th>
                        </tr>
                    ';
                }

                echo $dataPrint_users;

                ?>
            </tbody>
        </table>
    </div>
    <div class="container_decoration">
        <div class="container_decorate">
            <span id="text-uper">¡Lleva un registro de tus proveedores locales y nacionales!</span>
            <div class="create_role" id="open_modal" onclick="openModal()" style="cursor: pointer;">
                <span>Agregar nuevo proveedor<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                </span>
            </div>
        </div>       
    </div>

    <div class="open_modal_section" id="open_modal_section">
        <div class="close_modal" style="display: flex;justify-content: end;">
            <button onclick="closeModal()" style="background-color: rgb(221, 0, 0);">Salir</button>
        </div>
        <div>
            <h2 style="font-size: 20px;">Agregar nuevo provedor</h2>
        </div>
        <form class="paddin_top" method="post" action="db/send_proveedores.php">
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="">Nombre Provedor</label>
                    <input type="text" name="nombre_proveedor">
                </div>               
                <div class="bloque_inputs">
                    <label for="">Direccion localidad</label>
                    <input type="text" name="direccion_localidad">
                </div>             
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="">Tipo de documento</label>
                    <select id="select_tipe" require name="tipo_documento">
                        <option value="" selected>Seleccionar Tipo</option>
                        <?php                         
                            $print_options = '';
                            foreach($datarest_document as $option) {
                                $print_options .= '                             
                                    <option value="' .$option["id_tipo_documento"]. '">' .$option["descripcion"]. '</option>
                                ';
                            }
                            echo $print_options;
                        ?>                  
                    </select>
                </div>
                <div class="bloque_inputs">
                    <label for="precioUnitario">NIT</label>
                    <input type="text" id="precioUnitario" name="nit">
                </div>
                <div class="bloque_inputs">
                    <label for="precioUnitario">Fecha de registro</label>
                    <input type="date" id="precioUnitario" name="fecha_registro">
                </div>
            </div>
            <div>
                <h2 style="font-size: 20px; margin-top: 30px;">Detalles adicionales</h2>
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                <label for="">Tipo de producto</label>
                    <select id="select_tipe" require name="tipo_producto">
                        <option value="" selected>Seleccionar</option>
                        <?php                         
                            $print_options = '';
                            foreach($datarest_tipo_p as $option) {
                                $print_options .= '                             
                                    <option value="' .$option["id_tipo_producto"]. '">' .$option["nombre"]. '</option>
                                ';
                            }
                            echo $print_options;
                        ?>   
                    </select>
                </div>               
                <div class="bloque_inputs">
                    <label for="">Ciudad</label>
                    <select id="select_tipe" require name="ciudad">
                        <option selected>Seleccionar Ciudad</option>
                        <?php                         
                            $print_options = '';
                            foreach($datarest_ciudad as $option) {
                                $print_options .= '                             
                                    <option value="' .$option["id_ciudad"]. '">' .$option["nombre"]. '</option>
                                ';
                            }
                            echo $print_options;
                        ?>   
                    </select>
                </div>
                <div class="bloque_inputs">
                    <label for="">Fecha de Afiliacion</label>
                    <input type="date" name="fecha_afiliacion">
                </div>
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="precioUnitario">NIT empresarial</label>
                    <input type="text" id="precioUnitario" name="nit_empresarial">
                </div>                              
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>


    <style>

    </style>