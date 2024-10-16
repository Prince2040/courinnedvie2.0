<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=couronnedvie', 'root', '');

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_REAL_IP'])) {
        $ipaddress = $_SERVER['HTTP_X_REAL_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    }
    return $ipaddress;
}

// Récupérer l'adresse IP du visiteur
$ip_visiteur = get_client_ip();

// Récupérer la page visitée
$page = $_SERVER['REQUEST_URI'];

// Insérer les informations dans la base de données
$stmt = $pdo->prepare('INSERT INTO visites (page, visiteur_ip) VALUES (?, ?)');
$stmt->execute([$page, $ip_visiteur]);
