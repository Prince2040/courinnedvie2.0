<?php

session_start();

include 'db_connexion.php';

if (isset($_POST['Inscription'])) {
    //extract($_POST) ;

    //creation des variables 
    $name = strip_tags($_POST['user_name']);
    $lastname = strip_tags($_POST['user_lastname']);
    $email = strip_tags($_POST['user_email']);
    $pswd = strip_tags($_POST['user_password']);
    $cpswd = strip_tags($_POST['user_cpassword']);



    //preparation de la requete
    $query = " SELECT * FROM utilisateurs WHERE email = :email ";

    $statement = $link->prepare($query);

    $statement->execute(
        array(
            ":email" => $email,
        )
    );


    //si le mail  n'existe pas
    if ($statement->rowCount() <= 0) {


        //on verifie si les deux mots de passe entrez par l'utilisateur sont identiques
        if ($pswd == $cpswd) {

            //cryptage du mots de passe
            $hashPassword = hashPassword($pswd);

            //generation du matricule 
            $id = 'Ab' . rand(00000, 99999);

            //preparation de la requete d'insertion de l'etudiant 
            $query = "INSERT INTO utilisateurs (id, name, lastname, email, password) 
            VALUES (:id, :name, :lastname, :email, :pswd)";

            $statement = $link->prepare($query);

            $statement->execute(
                array(
                    ":id" => $id,
                    ":name" => $name,
                    ":lastname" => $lastname,
                    ":email" => $email,
                    ":pswd" => $hashPassword,
                )
            );

            //si l'enregistrement s'est bien passer 
            if ($statement) {

                //on creer la session de l'etudiant 
                $_SESSION['abonne_data'] =
                    [
                        'auth' => true,
                        'id' => "$id",
                        'name' => "$name",
                        'lastname' => "$lastname",
                        'email' => "$email",
                    ];

                //on le redire vers la page d'acceuil

                $sucess_msg = ' vous etes connecté ... ';

                $sucess_msgEncoded = base64_encode($sucess_msg);

                $url = "../directs.php?sucess_msg=" . urlencode($sucess_msgEncoded);

                header("location: " . $url);


            } else {

                $error_msg = 'une ereur s\'est produite veuillez réessayer ';

                // Chiffrer le message
                $error_msgEncoded = base64_encode($error_msg);

                $url = "../index.php?error_msg=" . urlencode($error_msgEncoded);

                header("location: " . $url);
            }
        } else {

            $error_msg = 'les mots de passe doivent etre identique';

            // Chiffrer le message
            $error_msgEncoded = base64_encode($error_msg);

            $url = "../index.php?error_msg=" . urlencode($error_msgEncoded);

            header("location: " . $url);
        }
    } else {
        $error_msg = 'l\'email a deja été utilisé ';

        // Chiffrer le message
        $error_msgEncoded = base64_encode($error_msg);

        $url = "../index.php?error_msg=" . urlencode($error_msgEncoded);

        header("location: " . $url);
    }
}





function hashPassword($password)
{
    // Générer le hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    return $hashedPassword;
}

function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}
