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
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>

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
                            <td style="display: none;">'. $user["tipo_documento"] . '</td>
                            <td style="display: none;">' . $user["nit"] . '</td>
                            <td style="display: none;">' . $user["fecha_registro"] . '</td>
                            <td style="display: none;">' . $user["user_login"] . '</td>
                            <td style="display: none;">' . $user["contrasena"] . '</td>
                            <td style="display: none;">' . $user["id_ciudad"] . '</td>
                            <td style="display: none;">' . $user["id_tipo_documento"] . '</td>



                            <th class="th_ankor">                                                        
                                 <div onclick="edit_datos_formulario(
                                    ' . $user["id_usuario"] . ', 
                                    \'' . addslashes($user["nombre"]) . '\', 
                                    \'' . addslashes($user["telefono"]) . '\',
                                    \'' . addslashes($user["email"]) . '\',
                                    \'' . addslashes($user["nombre_ciudad"]) . '\',
                                    \'' . addslashes($user["tipo_documento"]) . '\',
                                    \'' . addslashes($user["nit"]) . '\',
                                    \'' . addslashes($user["fecha_registro"]) . '\',
                                    \'' . addslashes($user["user_login"]) . '\',
                                    \'' . addslashes($user["contrasena"]) . '\',
                                    \'' . addslashes($user["id_ciudad"]) . '\',
                                    \'' . addslashes($user["id_tipo_documento"]) . '\'
                                )" style="height: 18px;">                         
                                    <img src="public/image/pencil-square.svg" alt="Editar">
                                </div>                                                              
                                      
                                <form method="post" action="db/db_delete.php" id="form_delete">
                                    <input type="hidden" name="delete_user" value="' . htmlentities($user["id_usuario"]) . '">
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
                    <img src="public/image/people.svg" alt="">
                </span>
            </div>
            <div class="conunt_user">
                <span><?= $total_usuarios2 ?></span>
            </div>
            <!-- <div class="skill-box">
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
            </div> -->
        </div>
    </div>


    <div class="open_modal_section" id="open_modal_section">     
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






    <div class="open_modal_section" id="edi_modal_section">       
        <div>
            <h2 style="font-size: 20px;">Editando usuario</h2>
        </div>

        <form class="padding_top" method="post" action="db/update_dataUsuarios.php">
            <div class="grid-columns">          
                <div class="bloque_inputs">
                    <label for="">Nombre</label>
                    <input type="text" require name="nombre" id="value_nombre">
                </div>           
                <div class="bloque_inputs">
                    <label for="">Celular</label>
                    <input type="text" require name="celular" id="value_telefono">
                </div>
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="">Tipo de documento</label>
                    <select id="select_tipe" require name="id_documento">
                        <option selected id="value_documento"></option>
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
                    <input type="text" id="value_nit" require name="nit">
                </div> 
                <div class="bloque_inputs">
                    <label for="">Ciudad</label>
                    <select id="select_tipe" require name="ciudad">
                        <option selected id="value_ciudad"></option>
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
            <div class="grid-columns">          
                <div class="bloque_inputs">
                    <label for="">Identificador de Usuario</label>
                    <input type="text" require name="id_usuario" value="" id="value_id_usuario">
                </div>                
            </div>
            <div>
                <h2 style="font-size: 20px; margin-top: 30px;">Datos adicionales de plataforma</h2>
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="precioUnitario">Fecha de registro</label>
                    <input type="date" id="value_fecha" require name="fecha_registro">
                </div>
                <div class="bloque_inputs">
                    <label for="precioUnitario">User_login</label>
                    <input type="text" id="value_login" require name="usr_login">
                </div>
                <div class="bloque_inputs">
                    <label for="precioUnitario">Contraseña</label>
                    <input type="text" id="value_contrasena" require name="contrasena">
                </div>                                
            </div>
            <div class="grid-columns">
                <div class="bloque_inputs">
                    <label for="precioUnitario">Email</label>
                    <input type="email" id="value_email" require name="email">
                </div>                                               
            </div>
            <button class="submit">Submit</button>
        </form>

    </div>