<?php

$channelId = "UCEjOSbbaOfgnfRODEEMYlCw";
$apiKey = "AIzaSyChRsAoUBvlme4fUInFYddKkeXF37zaCL8";

$url = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=" . $channelId . "&maxResults=1&order=date&type=video&key=" . $apiKey;

$response = file_get_contents($url);
$data = json_decode($response, true);


?>

