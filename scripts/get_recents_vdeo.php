<?php

// Clé d'API YouTube // ID de la chaîne
$channelId = "UCEjOSbbaOfgnfRODEEMYlCw";
$apiKey = "AIzaSyChRsAoUBvlme4fUInFYddKkeXF37zaCL8";

// ID de la chaîne

// URL de l'API YouTube Data v3 pour récupérer les vidéos de la chaîne
$url_recents = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=" . $channelId . "&maxResults=4&order=date&type=video&key=" . $apiKey;

// Effectuer la requête à l'API
$response_recents = file_get_contents($url_recents);
$data_recents = json_decode($response_recents, true);

$videos_recents = $data_recents['items'];


?>