<?php
include('scripts/get_playlists/get_recents_vdeo.php');
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
                        <h2>Couronne de vie TV</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <p><a href='index-2.html'>Couronne de vie TV</a> / Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<!-- Start Contat Page -->
<div class="contact-page-area themeix-ptb themeix-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themeix-section-h">
                            <span class="heading-icon"><i class="fa fa-envelope"></i></span>
                            <h3>Nous envoyer un message</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="#" method="post" class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <input type="text" name="name" id="name" class="form-control" placeholder="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <input type="text" name="website" id="website" class="form-control" placeholder="Website *" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <button type="submit" class="themeix-btn-danger text-uppercase">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Start Contact Page Video -->
            <div class="col-md-6">
                <div class="contact-video">
                    <div >

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2623.616901199778!2d2.3475805!3d48.8845793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e68cc3a0919%3A0x706917aaa613302a!2s5%20Rue%20Caplat%2C%2075018%20Paris%2C%20France!5e0!3m2!1sfr!2sbj!4v1714399131800!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
            <!-- End Contact Page Video -->
        </div>
    </div>

</div>
<!-- End Contact Page -->



<!-- Start Wide Video Section -->
<div class="wide-video-section themeix-ptb themeix-info pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="themeix-section-h">
                    <span class="heading-icon"><i class="fa fa-book"></i></span>
                    <h3>Récentes vidéos de la chaine</h3>
                    <a href="directs.php" class="see-all-link">voir plus de videos</a>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            for ($i = 0; $i < 8; $i++) {
            ?>
                <div class="col-md-6 col-lg-3 themeix-half">
                    <div class="single-video">
                        <div class="video-img">
                            <a href='directs.php?id=<?= $videos_recents_data[$i]['id'] ?>'>
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $videos_recents_data[$i]['id'] ?>/default.jpg" alt="Video" />
                            </a>
                            <span class="video-duration">5.28</span>
                        </div>
                        <div class="video-content">
                            <h4><a class='video-title' href='directs.php?id=<?= $videos_recents_data[$i]['id'] ?>'> <?= $videos_recents_data[$i]['title'] ?> </a></h4>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnh74UN6BKgq9U5fMNGhdZOSpmM_QnZqs"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from etube-html.netlify.app/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 14:25:52 GMT -->

</html>