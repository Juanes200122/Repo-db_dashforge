<?php
include '../db/consult_dashboard.php';
?>

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/css_dashboard.css">


<div class="container_dashboard">

    <div class="top bloque_estadisticas">
        <div class="containers">
            <div class="flex">
                <span>Total de productos</span>
                <div class="bloque_nm">
                    <div class="circle"></div>
                    <span><?= $productos_count ?></span>
                </div>
            </div>
            <div class="iconsFooter">
                <img src="../public/image/localizacion.png" alt="" width="40px">
            </div>
        </div>
        <div class="containers">
            <div class="flex">
                <span>Proveedores</span>
                <div class="bloque_nm">
                    <div class="circle"></div>
                    <span><?= $proveedores_count ?></span>
                </div>
            </div>
            <div class="iconsFooter">
                <img src="../public/image/cuchilleria (1).png" alt="" width="40px">
            </div>
        </div>
        <div class="containers">
            <div class="flex">
                <span>usuarios</span>
                <div class="bloque_nm">
                    <div class="circle"></div>
                    <span><?= $usuarios_count ?></span>
                </div>
            </div>
            <div class="iconsFooter">
                <img src="../public/image/usuario (1).png" alt="" width="40px">
            </div>
        </div>
        <div class="containers">
            <div class="flex">
                <span>Total de activos</span>
                <div class="bloque_nm">
                    <div class="circle"></div>
                    <span>$<?= $deudas_pagos_sum ?></span>
                </div>
            </div>
            <div class="iconsFooter">
                <img src="../public/image/deuda (1).png" alt="" width="40px">
            </div>
        </div>
    </div>

    <div class="center bloque_informativo">
        <div class="bloque_1">
            <div class="bloque_left">
                <div class="text">
                    <span>Administra el inventario de tus productos
                        <img src="../inventario.gif" alt="" width="30px">
                    </span>
                    <span>Mantén un control preciso y actualizado del inventario de productos de tu negocio</span>
                </div>
                <div class="line_grafic">

                    <div class="line Enero">
                        <div class="line_top balde_grande" style="height: 20%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 80px;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño" style="height: 10%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Febrero">
                        <div class="line_top balde_grande" style="height: 47%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 23%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 30%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Marzo">
                        <div class="line_top balde_grande" style="height: 80%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 20%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Abril">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Mayo">
                        <div class="line_top balde_grande" style="height: 0%; ">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Junio">
                        <div class="line_top balde_grande" style="height: 0%; ">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Julio">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Agosto">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Septiembre">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Octubre">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Noviembre">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="line Diciembre">
                        <div class="line_top balde_grande" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>28</span>
                            </div>
                        </div>
                        <div class="line_top balde_mediano" style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                        <div class="line_top balde_pequeño " style="height: 0%;">
                            <div class="hover_bar">
                                <div class="color"></div>
                                <span>23</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bloque_right">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="bloque_2">
            <div class="filter">
                <span>Crea y actualiza tus productos</span>
                <span>No dudes en realizar los cambios que consideres adecuados para mejorar y optimizar tus
                    creaciones</span>
            </div>
        </div>
    </div>
</div>