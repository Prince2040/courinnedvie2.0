    <!-- MDB 
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />  -->

<?php

include('scripts/script_de_suivi.php');

include('scripts/get_playlists/get_evangelistEnMission.php');
include('scripts/get_playlists/get_allonsAlautreBord.php');
include('scripts/get_playlists/get_ainsiParleEternel.php');
include('scripts/get_playlists/get_enseignements.php');
include('scripts/get_playlists/get_filmEducatif.php');
include('scripts/get_playlists/get_egliseAlaUne.php');
include('scripts/get_playlists/get_recents_vdeo.php');
include('layouts/head.php');

if (isset($_GET['error_msg'])) {

    // Récupérer les données de l'URL
    $error_msgEncoded = $_GET['error_msg'];

    // Déchiffrer les données
    $error_msgDecoded = base64_decode($error_msgEncoded);
}

if (isset($_GET['sucess_msg'])) {

    // Récupérer les données de l'URL
    $sucess_msgEncoded = $_GET['sucess_msg'];

    // Déchiffrer les données
    $sucess_msgDecoded = base64_decode($sucess_msgEncoded);
}

?>
<!-- PRE LOADER -->
<div class="preloader">
    <div class='uil-ring-css' style='transform:scale(0.45);'>
        <div></div>
    </div>
</div>
<!-- Start Header -->
<?php
include('layouts/header.php');
?>


<?php

//recuperation des messages d'erreur

if (isset($error_msgDecoded)) {

?>
    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <?= $error_msgDecoded ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick=" history.replaceState({}, document.title, window.location.pathname);"></button>
    </div>

<?php
}

?>


<?php
//recuperation des messages d'erreur

if (isset($sucess_msgDecoded)) {

?>
    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <?= $sucess_msgDecoded ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick=" history.replaceState({}, document.title, window.location.pathname);"></button>
    </div>

<?php
}

?>

<!-- fin recuperation des message d'erreur et de success  -->

<!-- Start Slider Area -->
<div class="slider-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-wrapper">

                    <!-- Carousel wrapper -->
                    <div id="carouselVideoExample" data-mdb-carousel-init class="carousel slide carousel-fade" data-mdb-ride="carousel">

                        <!-- Inner -->
                        <div class="carousel-inner">
                            <!-- Single item -->
                            <div class="carousel-item active">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="vdeo1.mp4" type="video/mp4" />
                                </video>
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="vdeo2.mp4" type="video/mp4" />
                                </video>
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <!-- Single item -->
                            <div class="carousel-item">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="vdeo3.mp4" type="video/mp4" />
                                </video>
                                <div class="carousel-caption d-none d-md-block">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Inner -->
                    </div>
                    <!-- Carousel wrapper -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->






<!-- Start Video Carousel -->
<div class="video-carousel-area themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                    <h3>Videos Recentes </h3>
                </div>

                <div class="video-carousel owl-carousel">

                    <?php
                    for ($i = 1; $i < 4; $i++) {
                    ?>
                        <div class="single-video">
                            <div class="video-img">
                        
                            <a href='directs.php?id=<?= $videos_recents_data[$i]["id"] ?>'>
                                    <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_recents_data[$i]["id"] ?>/hqdefault.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">5.28</span>
                            </div>
                            <div class="video-content">
                                <h4><a class='video-title' href='directs.php?id=<?= $videos_recents_data[$i]["id"] ?>'><?= $videos_recents_data[$i]['title'] ?></a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span><?= $videos_recents_data[$i]['viewCount'] ?></span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span><?= $videos_recents_data[$i]['likeCount'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Carousel -->


<!-- Start Wide Video Section -->
<div class="wide-video-section themeix-ptb themeix-info pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-book"></i></span>
                    <h3>Vos Emissions / Allons a l'autre bord </h3>
                    <a href="playlists/allonsAlautreBord.php" class="see-all-link">voir plus de videos</a>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            for ($i = 1; $i < 9; $i++) {
            ?>
                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_allonsAlautreBord_data[$i]['id'] ?>/hqdefault.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'> <?= $videos_allonsAlautreBord_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= $videos_allonsAlautreBord_data[$i]['viewCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?= $videos_allonsAlautreBord_data[$i]['likeCount'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- End Wide Video Section -->


<!-- Start Review And Contribute Section -->
<div class="review-and-contribute themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="review-area">
                    <div class="themeix-section-h">
                        <span class="heading-icon"><i class="fab fa-html5" aria-hidden="true"></i></span>
                        <h3>Vos Emissions / Evangeliste En Mission</h3>
                    </div>

                    <?php
                    for ($i = 0; $i < count($videos_evangelistEnMission_data) && $i < 4; $i++) {
                    ?>
                        <div class="single-review" style="display: flex; justify-content: space-between; ">
                            <div class="review-img" style="width: 300px;">
                                <a href='directs.php?id=<?= $videos_evangelistEnMission_data[$i]['id'] ?> '>
                                    <img class="lazy" style="width: 100%;" data-src="https://img.youtube.com/vi/<?= $videos_evangelistEnMission_data[$i]['id'] ?>/hqdefault.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">5.28</span>
                            </div>
                            <div class="review-content">
                                <h4><a class='video-title' href='directs.php?id=<?= $videos_evangelistEnMission_data[$i]['id'] ?> '> <?= $videos_evangelistEnMission_data[$i]['title'] ?> </a></h4>
                                <div class="video-counter-plan">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span><?= $videos_evangelistEnMission_data[$i]['viewCount'] ?></span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span><?= $videos_evangelistEnMission_data[$i]['likeCount'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviwe-text">
                                    <p><?= $videos_evangelistEnMission_data[$i]['description'] ?></p>
                                </div>
                                <div class="review-btn">
                                    <a href="directs.php?id=<?= $videos_evangelistEnMission_data[$i]['id'] ?> " class="view-btn">Voir</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </div>


            <!-- Start Top Contribute -->
            <div class="col-lg-4 col-md-6">
                <div class="right-sidebar">
                    <div class="themeix-section-h">
                        <span class="heading-icon"><i class="fab fa-html5"></i></span>
                        <h3>Top 5 Contributor</h3>
                    </div>
                    <div class="single-contributor">
                        <div class="contributor-img">
                            <a href="#"><img src="assets/images/team/1.jpg" alt="team"></a>
                        </div>
                        <div class="contributor-content">
                            <h4><a href="#" class="heading-link">James Combap</a></h4>
                            <p>100 videos</p>
                            <p>joined 2015</p>
                        </div>
                    </div>
                    <div class="single-contributor">
                        <div class="contributor-img">
                            <a href="#"><img src="assets/images/team/2.jpg" alt="team"></a>
                        </div>
                        <div class="contributor-content">
                            <h4><a href="#" class="heading-link">Matthew S. Villanueva</a></h4>
                            <p>100 videos</p>
                            <p>joined 2015</p>
                        </div>
                    </div>
                    <div class="single-contributor">
                        <div class="contributor-img">
                            <a href="#"><img src="assets/images/team/3.jpg" alt="team"></a>
                        </div>
                        <div class="contributor-content">
                            <h4><a href="#" class="heading-link">Arden E. Halpern</a></h4>
                            <p>210 videos</p>
                            <p>joined 2015</p>
                        </div>
                    </div>

                    <div class="single-contributor">
                        <div class="contributor-img">
                            <a href="#"><img src="assets/images/team/5.jpg" alt="team"></a>
                        </div>
                        <div class="contributor-content">
                            <h4><a href="#" class="heading-link">David C. Burle</a></h4>
                            <p>65 videos</p>
                            <p>joined 2015</p>
                        </div>
                    </div>
                    <!-- Start Subscribe Box -->
                    <div class="subscribe-box">
                        <div class="themeix-section-h">
                            <span class="heading-icon"><i class="fab fa-html5" aria-hidden="true"></i></span>
                            <h3>Souscrire maintenant</h3>
                        </div>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Give Your Email Address" required>
                                <button type="submit">Go</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Subscribe Box -->
                </div>
                <!-- End Top Contribute -->
            </div>
        </div>
    </div>
</div>
<!-- End Review And Contribute Section -->


<!-- Start Sports News Area -->
<div class="wide-video-section themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fas fa-futbol" aria-hidden="true"></i></span>
                    <h3>Vos Emissions / Enseignements </h3>
                    <a href="playlists/enseignements.php" class="see-all-link">Plus de videos </a>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            for ($i = 1; $i < count($videos_enseignement_data) && $i < 9; $i++) {
            ?>
                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_enseignement_data[$i]['id'] ?>'>
                                <img style=" width: 100%; " class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_enseignement_data[$i]['id'] ?>/hqdefault.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_enseignement_data[$i]['id'] ?>'> <?= $videos_enseignement_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= $videos_enseignement_data[$i]['viewCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?= $videos_enseignement_data[$i]['likeCount'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>


        </div>
    </div>
</div>
<!-- End Sports News Area -->


<!-- Start Call To Action Area -->
<?php
include('layouts/call_to_action.php');
?>
<!-- End Call To Action Area -->



<!-- Start Footer Area -->
<?php
include('layouts/footer.php');
?>
<!-- End Footer Area -->


<!-- style supllementaire --->


<!-- Load JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/pgwslideshow.min.js"></script>
<script src="assets/js/pgwslider.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.lazy.min.js"></script>
<script src="assets/js/jquery.lazy.plugins.min.js"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/main.js"></script>

</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.umd.min.js"></script>

<!-- Mirrored from etube-html.netlify.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 14:23:52 GMT -->

</html>