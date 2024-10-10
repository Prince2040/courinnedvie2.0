<?php
include('../scripts/auth/insc_action.php');
?>

<header>
    <div class="header-top hidden-xs accordion-body" style="background-color: #5f99be;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top-area">
                        <div class="user-info right">

                            <?php
                            if (isset($_SESSION['abonne_data']['auth'])) {

                            ?>
                                <div class="upload-opt">
                                    <i class="fa fa-user"></i>
                                    <a href="#"> <?= $_SESSION['abonne_data']['name'] . ' ' . $_SESSION['abonne_data']['lastname'] ?> </a>
                                    <span class="sepator">|</span>
                                </div>
                            <?php

                            } else {
                            ?>
                                <div class="upload-opt">
                                    <i class="fa fa-sign-in-alt"></i>
                                    <a href="#upload-options" data-bs-toggle="modal">Se Connecter</a>
                                    <span class="sepator">|</span>
                                </div>
                            <?php
                            }

                            ?>

                            <?php
                            if (isset($_SESSION['abonne_data']['auth'])) {

                            ?>

                                <div class="login-info">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <a href="../scripts/auth/deconex_action.php">Se deconnecter</a>
                                </div>

                            <?php
                            } else {
                            ?>
                                <div class="login-info">
                                    <i class="fa fa-user-plus"></i>
                                    <a href="#login-info" data-bs-toggle="modal">Creer un compte</a>
                                </div>

                            <?php
                            }

                            ?>

                        </div>


                        <div id="upload-options" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #5f99be;">
                                        <h3 class="modal-title">Se connecter</h3>
                                        <button class="btn btn-sm btn-default close-btn" data-bs-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../scripts/auth/conex_action.php" method="post" class="upload-form" enctype="multipart/form-data">

                                            <div class="form-group mb-3">
                                                <label for="user_password">Email :</label>
                                                <input type="email" name="user_email" class="form-control" id="user_password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="user_password">Mots de passe :</label>
                                                <input type="password" name="user_password" class="form-control" id="user_password">
                                            </div>


                                            <!--<div class="form-group">
                                                <label for="video_title">Video Title</label>
                                                <input type="text" class="form-control" id="video_title" placeholder="Video Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="video-desc">Video Description</label>
                                                <textarea name="video-desc" id="video-desc" class="form-control" placeholder="Video Description"></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="upload_file" class="custom-file-upload">Select Your File
                                                    <input type="file" name="upload_file" id="upload_file">
                                                </label>
                                            </div>-->
                                            <div class="form-group">
                                                <button type="submit" name="connexion" style="background-color: #5f99be;" class="btn btn-primary btn-lg">Se Connecter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="login-info" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #5f99be;">
                                        <h3 class="modal-title">S' inscrire </h3>
                                        <button data-bs-dismiss="modal" class="btn btn-sm btn-default close-btn">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../scripts/auth/insc_action.php" method="post" class="login-form">
                                            <div class="form-group">
                                                <label for="user_name">Nom :</label>
                                                <input type="text" name="user_name" class="form-control" id="user_name">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="user_password">Prenom :</label>
                                                <input type="text" name="user_lastname" class="form-control" id="user_password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="user_password">Email :</label>
                                                <input type="email" name="user_email" class="form-control" id="user_password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="user_password">Mots de passe :</label>
                                                <input type="password" name="user_password" class="form-control" id="user_password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="user_password">confimer le mots de passe :</label>
                                                <input type="password" name="user_cpassword" class="form-control" id="user_password">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" style="background-color: #5f99be;" class="btn btn-primary bg-blue btn-lg" name="Inscription">Inscription</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation area starts -->
    <div class="main-menu" >
            <!-- Start Navigation -->
            <nav class="header-section pin-style" style="background-color: #5f99be;">
                <div class="container">
                       <div class="mod-menu">
                        <div class="row">
                            <div class="col-3">
                                <a href="../index.php" title="logo" class="logo"><img src="../assets/images/monlogo.png" alt="logo"></a>
                            </div>
                            <div class="col-9 nopadding">
                                <div class="main-nav rightnav">
                                    <ul class="top-nav">
                                        <li class="visible-this d-md-none menu-icon">
                                            <a href="#" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false"><i class="fa fa-bars"></i></a>
                                        </li>
                                    </ul>
                                    <div id="menu" class="collapse header-menu">
                                        <ul class="nav themeix-nav">
                                            <li><a href='../index.php' title='acceuil'>Acceuil</a></li>
                                            <li><a href='../directs.php' title='directs'>Directs</a></li>
                                            <li><a href='../bible/genese.php' title='Bible'>Bible</a></li>                                                                        
                                            <li><a href='../blog.php'>Actualités</a> </li>
                                            <li class="mega-menu remove-border active"><a href="#">Vos Emisions</a><span class="arrow"></span>
                                                <ul>
                                                    <li><span class="subtitle">Parole vivante</span> <span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href='../playlists/allonsAlautreBord.php'><i class="fa fa-angle-right"></i>Allons à l’autre Bord</a></li>
                                                            <li><a href='../playlists/ainsiParleEternel.php'><i class="fa fa-angle-right"></i>Ainsi parle l’éternel</a></li>
                                                            <li><a href='../playlists/femmeVousAvezParole.php'><i class="fa fa-angle-right"></i>Femmes vous avez la parole</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><span class="subtitle">Evangelisation</span> <span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href='../playlists/egliseAlaUne.php'><i class="fa fa-angle-right"></i>Eglise à la Une</a></li>
                                                            <li><a href='../playlists/evangelisteEnMission.php'><i class="fa fa-angle-right"></i>Evangéliste en mission</a></li>
                                                            <li><a href='../playlists/lumiereSurActu.php'><i class="fa fa-angle-right"></i>Lumière sur l’actu</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><span class="subtitle">Film / Dessin animés</span><span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href='../playlists/filmEducatif.php'><i class="fa fa-angle-right"></i>Film éducatif</a></li>
                                                            <li><a href='../playlists/dessinAnimes.php'><i class="fa fa-angle-right"></i>Dessins animés</a></li>
                                                            <li><a href='../playlists/filmEnPrime.php'><i class="fa fa-angle-right"></i>Film en Prime</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><span class="subtitle">Marche avec Christ</span> <span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href='../playlists/entreprendreEnChrist.php'><i class="fa fa-angle-right"></i>Entreprendre en Christ</a></li>
                                                            <li><a href='../playlists/contact.php'><i class="fa fa-angle-right"></i>Contact</a></li>
                                                            <li><a href='../playlists/single-video.html'><i class="fa fa-angle-right"></i>Single Video</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href='../gallery.php' title='nos_videos'>Nos vidéos</a></li>
                                            <li><a href='../contact.php' title='contact'>Nous contacter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </nav>
            <!-- end navigation -->
        </div>
    <!-- Navigation area ends -->
</header>