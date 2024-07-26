<?php

if (isset($_POST['id_usuario'])) {
    
    $id_usuario = $_POST['id_usuario'];


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="asx.css">
</head>

<body>
    <div class="container_element">
        <div class="side-bar">
            <!--space namber one-->
            <div class="side-top">
                <span id="initials-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-box-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                    </svg>
                </span>
                <span id="name-actuality">DashForge.</span>
            </div>
            <!--space namber two-->
            <div class="side-center">
                <nav class="nav-navbar">
                    <ul>
                        <li class="sidebar_navbar">
                            <a href="views/01_dashboard.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-columns-gap" viewBox="0 0 16 16">
                                    <path
                                        d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z" />
                                </svg>
                                <span id="opacity-nav">Panel</span>
                            </a>
                            <a href="views/02_usuarios.php" class="frame-list frame-users">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                </svg>
                                <span id="opacity-nav">Usuarios</span>
                            </a>
                            <a href="views/03_registerProducts.php" id="frame_food">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-cpu" viewBox="0 0 16 16">
                                    <path
                                        d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0m-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
                                </svg>
                                <span id="opacity-nav">Registrar Productos</span>
                            </a>
                            <a href="views/05_provedores.php" class="frame-restaurant">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-house-add" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                    <path
                                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
                                </svg>
                                <span id="opacity-nav">Provedores</span>
                            </a>                           
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section_container">
            <div class="navbar-nav">
                <div class="bloque_welcome">
                    <span class="welcome">Bienvenido a DashForge</span>
                    <span class="welcome_to">Hola USRDCC012, bienvenido de nuevo!</span>
                </div>
               
            </div>
            <div class="component_container">
                <section id="component"></section>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" charset="utf8" src="assets/js/jquery_datatables.js"></script>
    <script type="text/javascript" charset="utf8" src="assets/js/datatables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Función para cargar y mostrar la vista
            function loadView(href) {
                fetch(href)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('component').innerHTML = html;

                        // Una vez cargada la vista, inicializar DataTables
                        if (href.includes('views/02_usuarios.php')) {
                            $(document).ready(function () {
                                $('#usuarios').DataTable();
                            });

                          
                            const elemento = document.getElementById('aply_onclick');
                            elemento.onclick = function() {
                                if (validarFormulario()) {
                                    enviarFormulario();
                                }
                            };

                            function validarFormulario() {
                                const form = document.getElementById('myForm');
                                const inputs = form.querySelectorAll('input[require], select[require]');
                                for (let input of inputs) {
                                    if (!input.value.trim()) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'Todos los campos son obligatorios.'
                                        });
                                        return false;
                                    }
                                }
                                return true;
                            }

                            function enviarFormulario() {
                                var formData = new FormData(document.getElementById('myForm'));

                                fetch('db/send_dataUsuarios.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Network response was not ok');
                                    }
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: 'Usuario almacenado exitosamente'
                                    }).then(() => {
                                        document.getElementById('myForm').reset();
                                    });
                                })
                                .catch(error => {
                                    console.error('Hubo un problema con la petición Fetch:', error);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Hubo un problema con la petición Fetch. Por favor, inténtalo de nuevo más tarde.'
                                    });
                                });
                            }
                                                                                      
                        }

                        // Una vez cargada la vista, inicializar DataTables 
                        if (href.includes('views/05_provedores.php')) {
                            $(document).ready(function () {
                                $('#usuarios').DataTable();
                            });
                        }

                        // Una vez cargada la vista, inicializar DataTables 
                        if (href.includes('views/03_registerProducts.php')) {
                            $(document).ready(function () {
                                $('#usuarios').DataTable();
                            });

                            document.getElementById('precioUnitario').addEventListener('input', function (e) {

                                let value = e.target.value;

                                // Eliminar todos los caracteres que no sean dígitos
                                value = value.replace(/[^0-9]/g, '');

                                // Convertir el valor a un número entero
                                let numericValue = parseInt(value);

                                // Formatear como moneda colombiana
                                if (!isNaN(numericValue)) {
                                    let formattedValue = new Intl.NumberFormat('es-CO', {
                                        style: 'currency',
                                        currency: 'COP',
                                        minimumFractionDigits: 0
                                    }).format(numericValue);

                                    // Actualizar el valor del campo de entrada
                                    e.target.value = formattedValue;
                                } else {
                                    e.target.value = '';
                                }
                            });
                            document.getElementById('cantidad').addEventListener('input', function (e) {
                                let value = e.target.value;

                                // Eliminar todos los caracteres que no sean dígitos
                                value = value.replace(/[^0-9]/g, '');

                                // Actualizar el valor del campo de entrada
                                e.target.value = value;
                            });

                        }


                        // Una vez cargada la vista, inicializar o actualizar el gráfico si es necesario
                        if (href.includes('dashboard')) {
                            // Código para inicializar el gráfico de pastel con Chart.js
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'doughnut', // Cambio a tipo de gráfico de pastel
                                data: {
                                    labels: [],
                                    datasets: [{
                                        label: 'Tipo Producto',
                                        data: [23, 12, 21],
                                        backgroundColor: [
                                            '#4bc0c0',
                                            '#5b6bff',
                                            '#ff6384'
                                        ],
                                        borderColor: [
                                            '#4bc0c0',
                                            '#5b6bff',
                                            '#ff6384'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    plugins: {
                                        legend: {
                                            display: true,
                                            position: 'right'
                                        }
                                    },
                                    scales: {
                                        // Ocultar la cuadrícula y etiquetas en ambos ejes
                                        x: {
                                            display: false,
                                            grid: {
                                                display: false
                                            }
                                        },
                                        y: {
                                            display: false,
                                            grid: {
                                                display: false
                                            }
                                        }
                                    }
                                }
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error cargando la página:', error);
                    });
            }

            // Cargar la vista por defecto al iniciar la página
            loadView('views/01_dashboard.php');

            // Manejar clicks en los enlaces del menú lateral
            document.querySelectorAll('.sidebar_navbar a').forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const href = this.getAttribute('href');
                    loadView(href);
                });
            });
        });
    </script>


    <script>
        function openModal() {
            const modalSection = document.getElementById('open_modal_section');
            modalSection.style.display = 'block';
        }





        function edit_datos_formulario(id_usuario, nombre, telefono, email, nombre_ciudad,  tipo_documento, nit, fecha_registro, user_login, contrasena, id_ciudad, id_tipo_documento) {
            const open_edit = document.getElementById('edi_modal_section');
            open_edit.style.display = 'block';

            document.getElementById('value_id_usuario').value = id_usuario;
            document.getElementById('value_nombre').value = nombre;
            document.getElementById('value_telefono').value = telefono;
            document.getElementById('value_documento').textContent = tipo_documento;
            document.getElementById('value_documento').value = id_tipo_documento;
            document.getElementById('value_nit').value = nit;
            document.getElementById('value_ciudad').value = id_ciudad;
            document.getElementById('value_ciudad').textContent = nombre_ciudad;
            document.getElementById('value_fecha').value = fecha_registro;
            document.getElementById('value_login').value = user_login;
            document.getElementById('value_contrasena').value = contrasena;
            document.getElementById('value_email').value = email;
        }





        function closeModal() {
            const modalClose = document.getElementById('open_modal_section');
            modalClose.style.display = 'none';

            const open_edit = document.getElementById('edi_modal_section');
            open_edit.style.display = 'none';
        }
    </script>



    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load the default page
            const defaultPage = 'views/01_dashboard.html';
            fetch(defaultPage)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('component').innerHTML = html;
                })
                .catch(error => {
                    console.error('Error loading the default page:', error);
                });

            // Add event listeners to sidebar links
            document.querySelectorAll('.sidebar_navbar a').forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const href = this.getAttribute('href');
                    fetch(href)
                        .then(response => response.text())
                        .then(html => {
                            document.getElementById('component').innerHTML = html;
                        })
                        .catch(error => {
                            console.error('Error loading the page:', error);
                        });
                });
            });
        });
    </script> -->
</body>

</html>