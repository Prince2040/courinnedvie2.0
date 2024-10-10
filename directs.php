<?php
include('scripts/get_playlists/get_recents_vdeo.php');
include('scripts/get_playlists/get_enseignements.php');
include('scripts/get_playlists/get_allonsAlautreBord.php');
include('functions/function_list.php') ;
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



//var_dump($videos_recents_data) ;
//exit ;

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
<?php
include('layouts/header.php');
?>
<!-- End Header -->




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
//recuperation des messages de success

if (isset($sucess_msgDecoded)) {

?>
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <?= $sucess_msgDecoded ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick=" history.replaceState({}, document.title, window.location.pathname);"></button>
    </div>

<?php
}

?>

<!-- fin recuperation des message d'erreur et de success  -->







<!-- Start Page Content Area -->
<div class="page-content-area themeix-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <!-- Start Video Post -->
                <div class="video-post-wrapper">
                    <div class="video-posts-video">

                        <div class="embed-responsive embed-responsive-16by9 ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?= isset($videos_view_id) ? $videos_view_id : $videos_recents_data[0]["id"] ?>" class="embed-responsive-item"></iframe>
                        </div>
                    </div>
                    <div class="video-posts-data">
                        <div class="video-post-title">
                            <span class="video-icons"><i class="fa fa-info-circle"></i></span>

                            <div class="video-post-info">
                                <h4><a href="#"><?= isset($datavdeo) ? $datavdeo['items'][0]['snippet']['title'] : $videos_recents_data[0]['title'] ?></a></h4>
                                <div class="video-post-date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <p><?= isset($datavdeo) ? publishedAt($datavdeo['items'][0]['snippet']['publishedAt']) : $videos_recents_data[0]['publishedAt'] ?></p>
                                    <span class="video-posts-author">
                                        <i class="fa fa-folder-o"></i>
                                        <!--<a href="#">Animals Videos</a>-->
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="video-post-counter">
                            <div class="video-post-viewers">
                                <h3><?= isset($videos_view_id) ? get_nbr_view($videos_view_id) : $videos_recents_data[0]["viewCount"] ?> views</h3>
                            </div>
                            <div class="video-like">
                                <span><i class="far fa-thumbs-up"></i></span>
                                <p><?= isset($videos_view_id) ? get_nbr_likes($videos_view_id)  : $videos_recents_data[0]["likeCount"] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="video-post-text">
                        <p> La vidéo que vous allez regarder est une nouvelle publication de la chaîne "Couronne de vie TV". </p>
                            <p>Cette vidéo spécifique vous offre un contenu inspirant et édifiant dans le cadre de leur mission d'apprentissage et d'évangélisation chrétienne. Profitez pleinement de cette vidéo et du message qu'elle transmet.</p> 
                            <p>N'oubliez pas de visiter leur chaîne, de vous abonner et de laisser un "like" pour soutenir leur travail continu. Bonne écoute à vous !</p>
                    </div>
                    <!-- Start Tags And Share Options -->
                    <div class="tags-and-share">
                        <div class="post-tags widget">
                            <ul class="tagcloud">
                                <li><a href="playlists/evenements.php">Événements</a></li>
                                <li><a href="playlists/enseignements.php">Enseignements</a></li>
                                <li><a href="playlists/dessinAnimes.php">Dessin Animés</a></li>
                            </ul>
                        </div>
                        <div class="share-options">
                            <h4>Suivez Nous</h4>
                            <ul class="social-share">
                                <li class="twitter-bg"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="facebook-bg"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="google-bg"><a href="https://www.youtube.com/@couronnedevietv1815"><i class="fab fa-youtube"></i></a></li>
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
                    for ($i = 1; $i < count($videos_recents_data) && $i < 4; $i++) {
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
                for ($i = 4; $i < count($videos_recents_data) && $i < 12; $i++) {
            ?>

                <div class="col-md-6 col-lg-3 themeix-half">
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
                </div>

            <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- Plus de video -->


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
            for ($i = 1;  $i < 9; $i++) {
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