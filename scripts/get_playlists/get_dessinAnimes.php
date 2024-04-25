<?php

// Clé d'API YouTube // ID de la chaîne
$apiKey = "AIzaSyChRsAoUBvlme4fUInFYddKkeXF37zaCL8";
$playlistIdDessinAnime = 'PL9Ro4LotudZspuL56JZlJxoJRq6-0Ejhm';

// Chemin du fichier cache
$cacheFolder = dirname(dirname(__DIR__)) . "/cache/";
$cacheFile = $cacheFolder . "data_DessinAnime.json";
$cacheTime = 86400; // Durée de validité du cache en secondes (1 heure)

// Vérifier si le dossier cache existe, sinon le créer
if (!file_exists($cacheFolder)) {
    mkdir($cacheFolder, 0777, true);
}

// Vérifier si le fichier cache existe et s'il est encore valide
if (file_exists($cacheFile) && time() - filemtime($cacheFile) < $cacheTime) {
    // Lire les données à partir du fichier cache
    $videos_DessinAnime_data = json_decode(file_get_contents($cacheFile), true);
} else {
    // URL de l'API YouTube Data v3 pour récupérer les vidéos de la chaîne
    $urlDessinAnime = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=" . $playlistIdDessinAnime . "&key=" . $apiKey;

    // Utiliser cURL pour effectuer la requête à l'API
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $urlDessinAnime);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $responseDessinAnime = curl_exec($curl);
    curl_close($curl);

    // Vérifier si la requête a réussi
    if ($responseDessinAnime) {

        $data_DessinAnime = json_decode($responseDessinAnime, true);

        $videos_DessinAnime = $data_DessinAnime['items'];

        $videos_DessinAnime_data = [];


        foreach ($videos_DessinAnime as $video) {
            
           /*echo  "<pre>" ;
            foreach ($video as $vid) {
               var_dump($vid) ;
            }
            echo  "</pre>" ;
            exit ;*/

            $id = $video['snippet']['resourceId']['videoId'];


            // Rurl_videoécupérer les informations détaillées de chaque vidéo
            $url_video = "https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id=" . $id . "&key=" . $apiKey;

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url_video);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response_video = curl_exec($curl);
            curl_close($curl);

            $data_video = json_decode($response_video, true);

            // formatage de la date de publication

            $publishedAt = $video['snippet']['publishedAt'];

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

            //fin*/

            $video_DessinAnime_data = [

                'title' => $video['snippet']['title'],
                'id' => $id,
                'description' => $video['snippet']['description'],
                'publishedAt' => $formattedPublishDate,
                'viewCount' => $data_video['items'][0]['statistics']['viewCount'],
                'likeCount' => $data_video['items'][0]['statistics']['likeCount'],
            ];

            $videos_DessinAnime_data[] = $video_DessinAnime_data;

            //$videos_data[] = $video_data;
        }

        // Enregistrer les données dans un fichier JSON
        file_put_contents($cacheFile, json_encode($videos_DessinAnime_data));

    } else {
        // Erreur lors de la requête, gérer l'erreur en conséquence
        echo "Erreur lors de la récupération des vidéos récentes.";
    }
}
