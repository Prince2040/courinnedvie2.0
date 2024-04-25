<?php

session_start();

include 'db_connexion.php';

if (isset($_POST['connexion'])) {

    //reception des information du formulaire
    $user_email = strip_tags($_POST['user_email']);
    $user_pswd = strip_tags($_POST['user_password']);


    //verification de l'existence de l'utilisateur 
    $query = " SELECT * FROM utilisateurs WHERE email = :email ";
    $statement = $link->prepare($query);
    $statement->bindParam(':email', $user_email, PDO::PARAM_STR);

    //execution des requetes
    $statement->execute();


    if ($statement->rowCount() > 0) {  //si le mail existe 

        $abonne_data = $statement->fetch(PDO::FETCH_ASSOC);


        if (password_verify($user_pswd, $abonne_data['password'])) {

            //creation de la session etudiant 
            $_SESSION['abonne_data'] = [

                'auth' => true,
                'id' => $abonne_data['id'],
                'name' => $abonne_data['name'],
                'lastname' => $abonne_data['lastname'],
                'email' => $abonne_data['email'],
            ];


            /*if (isset($_POST['rememberme'])) {

                $cookieData = [
                    'auth' => true,
                    'user_type' => $_info['user_type'],
                    'user_id' => $_info['user_id'],
                    'user_name' => $_info['user_name'],
                    'user_lastname' => $_info['user_lastname'],
                    'user_email' => $_info['user_email']
                ];

                // Convertir le tableau en une chaîne JSON
                $cookieValue = json_encode($cookieData);

                // Définir le cookie
                setcookie('user_info', $cookieValue, time() + 365 * 24 * 3600, null, null, false, true);
            }*/

            
            //redirection

            // Chiffrer le message

            $sucess_msg = ' vous etes connecté ... ';

            $sucess_msgEncoded = base64_encode($sucess_msg);

            $url = "../directs.php?sucess_msg=" . urlencode($sucess_msgEncoded);

            header("location: " . $url); 


        } else {

            $error_msg = " Votre mot de passe est incorrect  ";
            
            // Chiffrer le message
            $error_msgEncoded = base64_encode($error_msg);

            $url = "../index.php?error_msg=" . urlencode($error_msgEncoded);

            header("location: " . $url);
        }
    } else {

        $error_msg = " L'email est incorrect ou n'exite pas  ";
        
        // Chiffrer le message
        $error_msgEncoded = base64_encode($error_msg);

        $url = "../index.php?error_msg=" . urlencode($error_msgEncoded);

        header("location: " . $url);

    }
} else {
    
    header('location : ../index.php');
}

?>