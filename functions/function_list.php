<?php

$channelId = "UCuiHjmEbjf24YfdMFaXPosg";
$apiKey = "AIzaSyChRsAoUBvlme4fUInFYddKkeXF37zaCL8";

function get_nbr_view($vdeoId)
{
    global $apiKey;

    $url = "https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $vdeoId . "&key=" . $apiKey;

    $response = file_get_contents($url);
    $data = json_decode($response, true);


    $viewCount = $data['items'][0]['statistics']['viewCount'];

    return $viewCount;
};

function get_nbr_likes($vdeoId)
{

    global $apiKey;

    $url = "https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $vdeoId . "&key=" . $apiKey;

    // Effectuer la requête à l'API
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Récupérer le nombre de likes
    $likesCount = $data['items'][0]['statistics']['likeCount'];

    return $likesCount;
};


// Fonction pour formater la durée au format "00:00:00"

//function formatDuration($duration)
//{
//    $interval = new DateInterval($duration);
//    $formattedDuration = $interval->format('%H:%I:%S');
//    return $formattedDuration;
//}

function formatDuration($duration) 
{
    // Extraire l'heure, les minutes et les secondes de la durée
    $timeComponents = sscanf($duration, "PT%dH%dM%dS");
    $hours = $timeComponents[0];
    $minutes = $timeComponents[1];

    // Formater la durée au format "00:00"
    $formattedDuration = sprintf("%02d:%02d", $hours, $minutes);

    return $formattedDuration;
};

function get_duration($vdeoId)
{

    global $apiKey;


    // URL de l'API YouTube Data v3 pour récupérer les détails de la vidéo
    $url = "https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=" . $vdeoId . "&key=" . $apiKey;

    // Effectuer la requête à l'API
    $response = file_get_contents($url);
    $data = json_decode($response, true);


    // Récupérer la durée de la vidéo
    $duration = $data['items'][0]['contentDetails']['duration'];

    // Formater la durée au format "00:00:00"
    $formattedDuration = formatDuration($duration);



    return $formattedDuration;
};

function publishedAt($publishedAt)
{
    $mois = array(
        1 => 'janvier',
        2 => 'février',
        3 => 'mars',
        4 => 'avril',
        5 => 'mai',
        6 => 'juin',
        7 => 'juillet',
        8 => 'août',
        9 => 'septembre',
        10 => 'octobre',
        11 => 'novembre',
        12 => 'décembre'
    );

    $dateTime = new DateTime($publishedAt);
    $day = $dateTime->format('d');
    $month = $dateTime->format('n');
    $year = $dateTime->format('Y');

    $formattedPublishDate = $day . ' ' . $mois[$month] . ' ' . $year;

    //$formattedPublishDate = strftime('%d %B %Y', strtotime($publishDate));

    //    $formattedPublishDate = date('d F Y', strtotime($publishedAt));

    return $formattedPublishDate;
};

function get_video_data ($vdeoId) 
{

// Clé d'API YouTube
global $apiKey;
// ID de la vidéo YouTube

// URL de l'API YouTube pour récupérer les informations de la vidéo
$urlvdeodata = "https://www.googleapis.com/youtube/v3/videos?part=snippet&id=" . $vdeoId . "&key=" . $apiKey;

// Effectuer la requête à l'API YouTube
$responsevdeodata = file_get_contents($urlvdeodata);

// Convertir la réponse JSON en tableau associatif
$datavdeo = json_decode($responsevdeodata, true);

return $datavdeo ;

};