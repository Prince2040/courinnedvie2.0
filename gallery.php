<?php
include('scripts/get_recents_vdeo.php');
include('scripts/get_mores_vdeo.php');
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
                        <h2>Nos Videos</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <p><a href='index-2.html'>Accueil </a> / Nos Videos</p>
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
                    for ($i = 0; $i < count($videos_recents) && $i < 4; $i++) {
                    ?>

                    <div class="single-video">
                        <div class="video-img">
                            <a href='index.php?id=<?= $videos_recents[$i]["id"]['videoId'] ?>'>
                            <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_recents[$i]["id"]['videoId'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">3.11</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'><?= $videos_recents[$i]['snippet']['title'] ?></a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span><?= get_nbr_view($videos_recents[$i]['id']['videoId']) ?></span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span><?= get_nbr_likes($videos_recents[$i]['id']['videoId']) ?></span>
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


        <?php

            for ($i = 14; $i < count($videos_mores) && $i < 30; $i++) {
            ?>

            <div class="col-md-6 col-lg-3 themeix-half">
                <div class="single-video">
                    <div class="video-img">
                        <a href='index.php?id=<?= $videos_mores[$i]["id"]['videoId'] ?>'>
                            <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_mores[$i]["id"]['videoId'] ?>/default.jpg" alt="Video" />
                        </a>
                        <span class="video-duration"><?= get_duration($videos_mores[$i]['id']['videoId']) ?></span>
                    </div>
                    <div class="video-content">
                        <h4><a class='video-title' href='single-video.html'> <?= $videos_mores[$i]['snippet']['title'] ?> </a></h4>
                        <div class="video-counter">
                            <div class="video-viewers">
                                <span class="fa fa-eye view-icon"></span>
                                <span><?= get_nbr_view($videos_mores[$i]['id']['videoId']) ?></span>
                            </div>
                            <div class="video-feedback">
                                <div class="video-like-counter">
                                    <span class="far fa-thumbs-up like-icon"></span>
                                    <span><?= get_nbr_likes($videos_mores[$i]['id']['videoId']) ?></span>
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
<div class="call-to-action-area hover-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="action-content">
                    <h2>Enough imporessed to get own video blog?</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="purchase-link text-right text-sm-center text-xs-center">
                    <a href="#" class="themeix-purchase-btn-3">purchase now</a>
                </div>
            </div>
        </div>
    </div>
</div>
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