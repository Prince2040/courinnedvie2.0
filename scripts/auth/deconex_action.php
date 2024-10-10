<?php

session_start();

if (isset($_SESSION['abonne_data']['auth'])) {

    $_SESSION = [];
    session_destroy();

    header("location: ../../index.php");
}
