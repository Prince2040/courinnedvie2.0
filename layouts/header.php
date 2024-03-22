<?php 
include('scripts/insc_action.php') ;
?>

<header>
    <div class="header-top hidden-xs accordion-body" style="background-color: #5f99be;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top-area">
                        <div class="site-info left">
                            <div class="mail-address">
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:couronnedevie@gmail.com">couronnedevie@gmail.com</a>
                                <span class="sepator">|</span>
                            </div>
                            <div class="server-time">
                                <i class="fa fa-clock-o"></i>
                                <span> 5 Rue Caplat 75018 Paris</span>
                            </div>
                        </div>
                        <div class="user-info right">
                            <div class="upload-opt">
                                <i class="fa fa-envelope"></i>
                                <a href="#upload-options" data-bs-toggle="modal">Se connecter</a>
                                <span class="sepator">|</span>
                            </div>
                            <div class="login-info">
                                <i class="fa fa-heart"></i>
                                <a href="#login-info" data-bs-toggle="modal">S'abonner</a>
                            </div>
                        </div>


                        <div id="upload-options" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header"  style="background-color: #5f99be;">
                                        <h3 class="modal-title">Se connecter</h3>
                                        <button class="btn btn-sm btn-default close-btn" data-bs-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" method="post" class="upload-form" enctype="multipart/form-data">

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
                                    <form action=" " method="post" class="login-form">
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
    <?php
    include('layouts/navbar.php');
    ?>
    <!-- Navigation area ends -->
</header>