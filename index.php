<?php
include('functions/function_list.php');
include('scripts/get_latest_vdeo.php');
include('scripts/get_recents_vdeo.php');
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


<!-- Start Page Content Area -->
<div class="page-content-area themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <!-- Start Video Post -->
                <div class="video-post-wrapper">
                   <!-- <div class="video-posts-video"> -->

                        <div class="slider-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slider-wrapper">
                                            <ul class="slider-2">
                                                <li>
                                                    <img src="assets/images/slider/a.jpg" alt="Allons à l’autre Bord">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/b.jpg" alt="Ainsi parle l’éternel">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/c.jpg" alt="Femmes vous avez la parole">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/d.jpg" alt=" Eglise à la Une ">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/f.jpg" alt="Evangéliste en mission">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/b.jpg" alt="Lumière sur l’actu">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/c.jpg" alt="Film éducatif">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/d.jpg" alt="Dessins animés">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/e.jpg" alt="Film en Prime">
                                                </li>
                                                <li>
                                                    <img src="assets/images/slider/g.jpg" alt="Entreprendre en Christ">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- </div> -->
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
                    for ($i = 1; $i < count($videos_recents) && $i < 11; $i++) {
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


<!-- Start Video Carousel -->
<div class="video-carousel-area carous themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                    <h3>Lumière sur l’actu</h3>
                </div>
                <div class="video-carousel owl-carousel">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/28.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/28.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Funny videos 2016 funny pranks try not to laugh challenge</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>2140</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/2.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/2.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">3.11</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Double Chocolate-Stuffed Mini Churros </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>996</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/23.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/23.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">5.10</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Greek-Style Pasta Bake (Pasticcio - English Recipe)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>785</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/4.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/4.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">2.29</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Rainbow Sprinkle Cinnamon Rolls (Gougeres Video)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>991,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>7456</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/5.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Buffalo Chicken Potato Skins (Gougeres English Video)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>2140</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Carousel -->

<!-- Start Video Carousel -->
<div class="video-carousel-area themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                    <h3>Allons à l’autre Bord</h3>
                </div>
                <div class="video-carousel owl-carousel">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/28.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/28.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Funny videos 2016 funny pranks try not to laugh challenge</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>2140</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/2.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/2.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">3.11</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Double Chocolate-Stuffed Mini Churros </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>996</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/23.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/23.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">5.10</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Greek-Style Pasta Bake (Pasticcio - English Recipe)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>785</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/4.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/4.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">2.29</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Rainbow Sprinkle Cinnamon Rolls (Gougeres Video)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>991,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>7456</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/5.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Buffalo Chicken Potato Skins (Gougeres English Video)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>2140</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Carousel -->


<!-- Start Video Carousel -->
<div class="video-carousel-area themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-bolt"></i></span>
                    <h3>Lumière sur l’actu</h3>
                </div>
                <div class="video-carousel owl-carousel">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/28.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/28.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Funny videos 2016 funny pranks try not to laugh challenge</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>2140</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/2.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/2.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">3.11</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Double Chocolate-Stuffed Mini Churros </a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>996</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/23.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/23.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">5.10</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Greek-Style Pasta Bake (Pasticcio - English Recipe)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>785</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/4.jpg" alt="Video" />
                                <noscript>
                                    <img src="assets/images/thumbnails/4.jpg" alt="video" />
                                </noscript>
                            </a>
                            <span class="video-duration">2.29</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Rainbow Sprinkle Cinnamon Rolls (Gougeres Video)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>991,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>7456</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-video">
                        <div class="video-img">
                            <a href='single-video.html'>
                                <img class="lazy" data-src="assets/images/thumbnails/5.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='single-video.html'>Buffalo Chicken Potato Skins (Gougeres English Video)</a></h4>
                            <div class="video-counter">
                                <div class="video-viewers">
                                    <span class="fa fa-eye view-icon"></span>
                                    <span>241,021</span>
                                </div>
                                <div class="video-feedback">
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-up like-icon"></span>
                                        <span>2140</span>
                                    </div>
                                    <div class="video-like-counter">
                                        <span class="far fa-thumbs-down dislike-icon"></span>
                                        <span>2140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Carousel -->


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