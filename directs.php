<?php
include('functions/function_list.php');
include('scripts/get_recents_vdeo.php');
include('layouts/head.php');

if (isset($_GET['id'])) {

    $videos_view_id = $_GET['id'];

    // URL de l'API YouTube pour récupérer les informations de la vidéo
    $urlvdeodata = "https://www.googleapis.com/youtube/v3/videos?part=snippet&id=" . $videos_view_id . "&key=" . $apiKey;

    // Effectuer la requête à l'API YouTube
    $responsevdeodata = file_get_contents($urlvdeodata);

    // Convertir la réponse JSON en tableau associatif
    $datavdeo = json_decode($responsevdeodata, true);
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
<!-- End Header -->


<!-- Start Page Content Area -->
<div class="page-content-area themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <!-- Start Video Post -->
                <div class="video-post-wrapper">
                    <div class="video-posts-video">

                        <div class="embed-responsive embed-responsive-16by9 ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?= isset($videos_view_id) ? $videos_view_id : $videos_recents[0]['id']['videoId'] ?>" class="embed-responsive-item"></iframe>
                        </div>
                    </div>
                    <div class="video-posts-data">
                        <div class="video-post-title">
                            <span class="video-icons"><i class="fa fa-info-circle"></i></span>

                            <div class="video-post-info">
                                <h4><a href="#"><?= isset($datavdeo) ? $datavdeo['items'][0]['snippet']['title'] : $videos_recents[0]['snippet']['title'] ?></a></h4>
                                <div class="video-post-date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <p><?= isset($datavdeo) ? publishedAt($datavdeo['items'][0]['snippet']['publishedAt']) : publishedAt($videos_recents[0]['snippet']['publishedAt']) ?></p>
                                    <span class="video-posts-author">
                                        <i class="fa fa-folder-o"></i>
                                        <!--<a href="#">Animals Videos</a>-->
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="video-post-counter">
                            <div class="video-post-viewers">
                                <h3><?= isset($videos_view_id) ? get_nbr_view($videos_view_id) : get_nbr_view($videos_recents[0]['id']['videoId']) ?> views</h3>
                            </div>
                            <div class="video-like">
                                <span><i class="far fa-thumbs-up"></i></span>
                                <p><?= isset($videos_view_id) ? get_nbr_likes($videos_view_id)  : get_nbr_likes($videos_recents[0]['id']['videoId']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="video-post-text">
                        <p><?= $videos_recents[0]['snippet']['description'] ?></p>
                    </div>
                    <!-- Start Tags And Share Options -->
                    <div class="tags-and-share">
                        <div class="post-tags widget">
                            <ul class="tagcloud">
                                <li><a href="#">Cat</a></li>
                                <li><a href="#">my pets</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Songs</a></li>
                            </ul>
                        </div>
                        <div class="share-options">
                            <h4>Share On</h4>
                            <ul class="social-share">
                                <li class="twitter-bg"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="facebook-bg"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="google-bg"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Tags And Share Options -->

                </div>
                <!-- End Video Post -->
            </div>
            <!-- Start Popular Videos -->
            <div class="col-lg-3 col-md-4">
                <!-- Start Popular Videos -->
                <div class="popular-videos">
                    <div class="themeix-section-h">
                        <span class="heading-icon"><i class="fa fa-fire" aria-hidden="true"></i></span>
                        <h3>Videos recentes</h3>
                    </div>

                    <?php
                    for ($i = 1; $i < count($videos_recents) && $i < 5; $i++) {
                    ?>
                        <div class="single-video">
                            <div class="video-img">
                                <a href='index.php?id=<?= $videos_recents[$i]["id"]['videoId'] ?>'>
                                    <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_recents[$i]["id"]['videoId'] ?>/default.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">5.28</span>
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
<!-- End Page Content Area -->



<!-- Plus de video -->

<div class="wide-video-section themeix-ptb pt-1">
    <div class="container">
        <div class="themeix-section-h">
            <span class="heading-icon"><i class="fa fa-fire" aria-hidden="true"></i></span>
            <h3>Plus de vidéos</h3>
        </div><br>
        <div class="row">

            <?php
                for ($i = 4; $i < count($videos_recents) && $i < 12; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='index.php?id=<?= $videos_recents[$i]["id"]['videoId'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_recents[$i]["id"]['videoId'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration"><?= get_duration($videos_recents[$i]['id']['videoId']) ?></span>
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
                </div>

            <?php
            }
            ?>

        </div>
    </div>
</div>

<!-- Plus de video -->


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