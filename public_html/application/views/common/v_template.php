<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <!-- Title Page-->
        <title>Maintenance des moteurs</title>

        <!-- Fontfaces CSS-->
        <link href="<?php echo base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap theme CSS -->
        <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?php echo base_url(); ?>assets/css/v_accueil.css" rel="stylesheet" type="text/css"/>

    </head>

    <body class="animsition">
        <!-- Passe l'adresse du site au js -->
        <input type="hidden" id="url_js" value="<?php echo site_url(); ?>">
        <input type="hidden" id="url2_js" value="<?php echo base_url(); ?>">

        <div class="page-wrapper">

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assets/images/icon/logo.png" alt="Emerson" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar3">
                    <nav class="navbar-sidebar">
                        <ul id="ulNavbar" class="list-unstyled navbar__list">
                            <li>
                                <a href="<?php echo site_url() ?>/c_accueil">
                                    <i class="fas fa-home"></i>Accueil</a>
                            </li>
                            
                            <?php
                            /* Si l'utilisateur se trouve sur la page machine,
                              activer la redirection vers l'historique */
                            if (isset($data['numMachine'])) {
                                echo '<li>';
                                echo '<a href="' . site_url() . '/C_historique/' . (int) $data['numMachine'] . '">';
                                echo '<i class="fas fa-clock"></i>Historique</a>';
                                echo '</li>';
                            }
                            ?>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-user"></i>Compte</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo site_url('C_user/logout') ?>">Déonnexion</a>
                                    </li>
                                </ul>
                            </li>

                            <?php
                            if (isset($data['numMachine'])) {
                                echo '<li id="connectState">Erreur de connexion</li>';
                            }
                            ?>

                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">


                <!-- MAIN CONTENT-->
                <div class="main-content">        
                    <div class="section__content section__content--p30">
                        <?php echo $data['page']; ?>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->

        </div>

        <!-- Jquery JS -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>

        <!-- Vendor JS -->
        <script src="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>

        <!-- Canvas JS -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.canvasjs.min.js" type="text/javascript"></script>

        <!-- Fonctions communes JS -->
        <script src="<?php echo base_url(); ?>assets/js/common.js" type="text/javascript"></script>

        <!-- MQTT Client -->
        <script src="<?php echo base_url(); ?>assets/js/paho-mqtt-min.js" type="text/javascript"></script>

        <!-- Main JS -->
        <script src="<?php echo base_url(); ?>assets/js/<?php echo $data['javascript_location'] ?>" ></script>

    </body>

</html>
<!-- end document-->