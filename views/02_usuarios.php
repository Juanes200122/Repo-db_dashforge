<?php
include '../db/consult_usuarios.php';
?>

<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">-->
<link rel="stylesheet" type="text/css" href="assets/css/css_datatables.css">
<link rel="stylesheet" type="text/css" href="assets/css/css_usuarios.css">


<div class="flex_flex">
    <div class="container_table">
        <table id="usuarios" class="display">
            <thead>
                <tr style="text-align: justify;">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th style="text-align: center;">Configuraciones</th>
                </tr>
            </thead>
            <tbody>
            <?php

                $dataPrint_users = '';

                foreach ($datarest as $user) {
                    $dataPrint_users .= '
                        <tr>
                            <td>' . $user["id_usuario"] . '</td>
                            <td>' . $user["nombre"] . '</td>
                            <td>' . $user["telefono"] . '</td>
                            <td>' . $user["email"] . '</td>
                            <td>' . $user["nombre_ciudad"] . '</td>

                            <th class="th_ankor">
                                <a class="ankor_link" href="">
                                    <img src="public/image/pencil-square.svg" alt="">
                                </a>
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
            <span id="text-uper">¡Es hora de innovar y crear algo diferente, Que esperas?!</span>
            <div href="" class="create_role" onclick="openModal()" style="cursor: pointer;">
                <span>Agregemos nuevos usuarios<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="grafict">
            <div class="lap_-01">
                <span>Usuarios Actuales</span>
                <span class="spanSVG">
                    <img src="../public/image/people.svg" alt="">
                </span>
            </div>
            <div class="conunt_user">
                <span>9</span>
            </div>
            <div class="skill-box">
                <div class="skill-bar">
                    <span class="skill-per User-total" style="width: 10%">
                        <span class="tooltip">6</span>
                    </span>
                </div>
            </div>
            <div class="skill-box">
                <div class="skill-bar">
                    <span class="skill-per User-total" style="width: 22%">
                        <span class="tooltip">3</span>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="open_modal_section" id="open_modal_section">
        <div class="close_modal" style="display: flex;justify-content: end;">
            <button onclick="closeModal()" style="background-color: rgb(221, 0, 0);">Salir</button>
        </div>
        <div>
            <h2 style="font-size: 20px;">Agregar Usuario</h2>
        </div>
        <form id="myForm" class="padding_top" method="post" action="db/send_dataUsuarios.php">
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="">Nombre</label>
                    <input type="text" require name="nombre">
                </div>
                <div class="bloque_inputs">
                    <label for="cantidad">Apellido</label>
                    <input type="text" id="cantidad" require name="apellido">
                </div>
                <div class="bloque_inputs">
                    <label for="">Celular</label>
                    <input type="text" require name="celular">
                </div>
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="">Tipo de documento</label>
                    <select id="select_tipe" require name="id_documento">
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
                    <input type="text" id="precioUnitario" require name="nit">
                </div> 
                <div class="bloque_inputs">
                    <label for="">Ciudad</label>
                    <select id="select_tipe" require name="ciudad">
                        <option value="" selected>Seleccionar Ciudad</option>
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
            </div>
            <div>
                <h2 style="font-size: 20px; margin-top: 30px;">Datos adicionales de plataforma</h2>
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="precioUnitario">Fecha de registro</label>
                    <input type="date" id="precioUnitario" require name="fecha_registro">
                </div>
                <div class="bloque_inputs">
                    <label for="precioUnitario">User_login</label>
                    <input type="text" id="precioUnitario" require name="usr_login">
                </div>
                <div class="bloque_inputs">
                    <label for="precioUnitario">Contraseña</label>
                    <input type="text" id="precioUnitario" require name="contrasena">
                </div>                                
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="precioUnitario">Email</label>
                    <input type="email" id="precioUnitario" require name="email">
                </div>                                               
            </div>
            <button type="button" class="submit" id="aply_onclick">Submit</button>
        </form>
    </div>


    <script>
      
    </script>