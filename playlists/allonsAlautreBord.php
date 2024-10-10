<?php
include('../scripts/get_playlists/get_allonsAlautreBord.php');
include('../layouts/head_playlist.php');
?>
<!-- PRE LOADER -->
<div class="preloader">
    <div class='uil-ring-css' style='transform:scale(0.45);'>
        <div></div>
    </div>
</div>
<!-- Start Header -->
<?php
include('../layouts/header_playlists.php');
?>
<!-- End Header -->
<!-- Start Page Banner -->
<div class="page-banner-area page-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-banner">
                    <div class="page-title">
                        <h2>Allons a l'autre bord</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <p><a href='index-2.html'>Vos Emissions </a> / Allons a l'autre bord </p>
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
                    for ($i = 0; $i < count($videos_allonsAlautreBord_data) && $i < 4; $i++) {
                    ?>

                        <div class="single-video">
                            <div class="video-img">
                                <a href='../directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'>
                                    <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_allonsAlautreBord_data[$i]['id'] ?>/default.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">3.11</span>
                            </div>
                            <div class="video-content">
                                <h4><a class='video-title' href='../directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'><?= $videos_allonsAlautreBord_data[$i]['title'] ?></a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span><?= $videos_allonsAlautreBord_data[$i]['viewCount'] ?></span> 
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <?= $videos_allonsAlautreBord_data[$i]['likeCount'] ?></span>
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
<div class="wide-video-section themeix-ptb">
    <div class="container">
        <div class="row">


            <div class="themeix-section-h">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                <h3>Plus vidéos</h3>
            </div>
            <?php

            for ($i = 0; $i < count($videos_allonsAlautreBord_data) && $i < 30; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='../directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_allonsAlautreBord_data[$i]['id'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration"></span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='../directs.php?id=<?= $videos_allonsAlautreBord_data[$i]['id'] ?>'> <?= $videos_allonsAlautreBord_data[$i]['title'] ?> </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= $videos_allonsAlautreBord_data[$i]['likeCount'] ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?=  $videos_allonsAlautreBord_data[$i]['viewCount'] ?></span>
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
include('../layouts/call_to_action.php');
?>
<!-- End Call To Action Area -->
<!-- Start Footer Area -->
<?php
include('../layouts/footer_playlists.php');
?>
<!-- End Footer Area -->

<!-- Load JS -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/pgwslideshow.min.js"></script>
<script src="../assets/js/pgwslider.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.lazy.min.js"></script>
<script src="../assets/js/jquery.lazy.plugins.min.js"></script>
<script src="../assets/js/megamenu.js"></script>
<script src="../assets/js/main.js"></script>

</body>



</html>