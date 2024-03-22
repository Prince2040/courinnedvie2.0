<?php

// Clé d'API YouTube // ID de la chaîne
$channelId = "UCEjOSbbaOfgnfRODEEMYlCw";
$apiKey = "AIzaSyChRsAoUBvlme4fUInFYddKkeXF37zaCL8";

// ID de la chaîne

// URL de l'API YouTube Data v3 pour récupérer les vidéos de la chaîne
$url_mores = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=" . $channelId . "&maxResults=30&order=date&type=video&key=" . $apiKey;

// Effectuer la requête à l'API
$response_mores = file_get_contents($url_mores);
$data_mores = json_decode($response_mores, true);

$videos_mores = $data_mores['items'];


?>