<?php

session_start();

include 'scripts/db_connexion.php';

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


    //si le mail ou le numero de telephone n'existe pas
    if ($statement->rowCount() <= 0) {


        //on verifie si les deux mots de passe entrez par l'utilisateur sont identiques
        if ($pswd == $cpswd) {

            //cryptage du mots de passe
            $hashPassword = hashPassword($pswd);

            //generation du matricule 
            $id = 'Ab' . rand(00000, 99999);

            //preparation de la requete d'insertion de l'etudiant 
            $query = " INSERT INTO utilisateurs( 'id' , 'name' , 'lastname' , 'email' , 'password'  ) 
                VALUES ( ':id' , ':name', ':lastname', ':email', ':pswd') ";

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
                        'id' => "$id",
                        'name' => "$name",
                        'lastname' => "$lastname",
                        'email' => "$email",
                    ];

                //on le redire vers la page d'acceuil
                header("location: directs.php");
            } else {
                $error_msg = 'une ereur s\'est produite veuillez réessayer ';
            }
        } else {
            $error_msg = 'les mots de passe doivent etre identique';
        }
    } else {
        $error_msg = 'l\'email a deja été utilisé ';
    }
}





function hashPassword($password)
{
    // Générer un sel aléatoire
    $salt = password_hash($password, PASSWORD_DEFAULT);

    // Générer le hachage du mot de passe avec le sel
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['salt' => $salt]);

    return $hashedPassword;
}

function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}
