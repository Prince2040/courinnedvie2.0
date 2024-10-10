<?php
include('scripts/get_playlists/get_recents_vdeo.php');
include('scripts/get_playlists/get_ainsiParleEternel.php');
include('scripts/get_playlists/get_dessinAnimes.php');
include('scripts/get_playlists/get_femmeVousAvezParole.php');
include('scripts/get_playlists/get_gospelFire.php');
include('scripts/get_playlists/get_allonsAlautreBord.php');
include('scripts/get_playlists/get_enseignements.php');
include('functions/function_list.php');
include('layouts/head.php');
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
<!-- End Header -->
<!-- Start Page Banner -->
<div class="page-banner-area page-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-banner">
                    <div class="page-title">
                        <h2>Nos Videos Par Catégories</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <p><a href=''>Couronne de vie TV </a> / Nos Videos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Video Carousel -->
<div class="video-carousel-area themeix-ptb bg-semi-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                    <h3>Plus recentes</h3>
                </div>
                <div class="video-carousel owl-carousel">

                    <?php
                    for ($i = 0; $i < count($videos_recents_data) && $i < 4; $i++) {
                    ?>

                        <div class="single-video">
                            <div class="video-img">
                                <a href='directs.php?id=<?= $videos_recents_data[$i]["id"] ?>'>
                                    <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_recents_data[$i]["id"] ?>/default.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">3.11</span>
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

<!-- Gospel on fire -->
<div class="wide-video-section themeix-ptb">
    <div class="container">
        <div class="row">


            <div class="themeix-section-h">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                <h3>Gospel On Fire </h3>
            </div>
            <?php

            for ($i = 0; $i < count($videos_gospelOnFire_data) && $i < 4; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_gospelOnFire_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_gospelOnFire_data[$i]['id'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">3.11</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_gospelOnFire_data[$i]['id'] ?>'> <?= $videos_gospelOnFire_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= $videos_gospelOnFire_data[$i]['viewCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?=  $videos_gospelOnFire_data[$i]['likeCount'] ?></span>
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

<!-- Start Video Carousel -->
<div class="video-carousel-area themeix-ptb bg-semi-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                    <h3>Enseignements</h3>
                </div>
                <div class="video-carousel owl-carousel">

                    <?php
                    for ($i = 0; $i < count($videos_enseignement_data) && $i < 4; $i++) {
                        
                    ?>

                        <div class="single-video">
                            <div class="video-img">
                                <a href='directs.php?id=<?= $videos_enseignement_data[$i]['id'] ?>'>
                                    <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_enseignement_data[$i]['id'] ?>/default.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">3.11</span>
                            </div>
                            <div class="video-content">
                                <h4><a class='video-title' href='directs.php?id=<?= $videos_enseignement_data[$i]['id'] ?>'><?= $videos_enseignement_data[$i]['title'] ?></a></h4>
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

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Carousel -->


<!-- Dessin animes -->
<div class="wide-video-section themeix-ptb">
    <div class="container">
        <div class="row">


            <div class="themeix-section-h">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                <h3>Déssin Animés</h3>
            </div>
            <?php

            for ($i = 0; $i < count($videos_DessinAnime_data) && $i < 8; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_DessinAnime_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_DessinAnime_data[$i]['id'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration"></span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_DessinAnime_data[$i]['id'] ?>'> <?= $videos_DessinAnime_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?=$videos_DessinAnime_data[$i]['viewCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?= $videos_DessinAnime_data[$i]['likeCount'] ?></span>
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


<!-- Ainsi parle l'eternel -->
<div class="wide-video-section themeix-ptb">
    <div class="container">
        <div class="row">


            <div class="themeix-section-h">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                <h3>Ainsi Parle L' Eternel</h3>
            </div>
            <?php

            for ($i = 0; $i < count($videos_AinsiParleEternel_data) && $i < 8; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_AinsiParleEternel_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_AinsiParleEternel_data[$i]['id'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration"></span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_AinsiParleEternel_data[$i]['id'] ?>'> <?= $videos_AinsiParleEternel_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= $videos_AinsiParleEternel_data[$i]['viewCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?= $videos_AinsiParleEternel_data[$i]['likeCount'] ?></span>
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


<!-- Start Wide Video Section -->
<div class="wide-video-section themeix-ptb">
    <div class="container">
        <div class="row">


            <div class="themeix-section-h">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                <h3>Allons A l'Autre bord</h3>
            </div>
            <?php

            for ($i = 0; $i < count($videos_allonsAlautreBord_data) && $i < 8; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_allonsAlautreBord_data[$i]['id'] ?>/default.jpg" alt="Video" />
                            </a>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'> <?= $videos_allonsAlautreBord_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= $videos_allonsAlautreBord_data[$i]['likeCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?= $videos_allonsAlautreBord_data[$i]['viewCount'] ?></span>
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



</html>