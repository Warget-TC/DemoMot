<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 06.06.2016
 * Description: Page permettant de vérifier l'engistrement (l'inscription)
 */
include_once("../../resources/lib/Header.php");


if (isset($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];
} else      $pseudo = "";


if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else      $password = "";

if (isset($_POST['fristName'])) {
    $fristName = $_POST['fristName'];
} else      $fristName = "";


if (isset($_POST['lastName'])) {
    $lastName = $_POST['lastName'];
} else      $lastName = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else      $email = "";



// Si le bouton "envoyer" est soumis
if (isset($_POST['submit']))
{
    //Chemin de stockage
    $content_dir = '../../resources/images/';
    $defaultDir= '../../resources/images/stock-photo-64396363-businessman-silhouette-as-avatar-or-default-profile-picture';
    $tmp_file = $_FILES['avatar']['tmp_name'];

    // si erreur prend l'image par défaut
    if( !is_uploaded_file($tmp_file) )
    {
        $name_file = "../../resources/images/stock-photo-64396363-businessman-silhouette-as-avatar-or-default-profile-picture.jpg";
        //print('<img src="../../resources/images/default_user-884fcb1a70325256218e78500533affb.jpg">');
        //exit("Le fichier est introuvable");
    }

    // Vérifie le type du fichier sélectionné
    $type_file = $_FILES['avatar']['type'];
    // si erreur prend l'image par défaut
    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
    {
        $name_file = "../../resources/images/stock-photo-64396363-businessman-silhouette-as-avatar-or-default-profile-picture.jpg";
    }

    // Cope le fichier dans le dossier définis
    $name_file = $_FILES['avatar']['name'];
    // si erreur prend l'image par défaut
    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        $name_file = "../../resources/images/stock-photo-64396363-businessman-silhouette-as-avatar-or-default-profile-picture.jpg";
    }
}

if (empty($pseudo) OR empty($password) OR empty($fristName) OR empty($lastName) OR empty($email)) {


    echo '<div class="ui negative message">
            <i class="close icon"></i>
            <div class="header">
            Merci de remplir le formulaire !
            </div>
        </div>';
    header('Refresh: 3; registration.php');

} // Aucun champ n'est vide, on peut enregistrer dans la table
else {

    // Défini un nouvel objet
    $db = new DbConnexion();
    $db->addUser($pseudo, $password, $fristName, $lastName, $email, $name_file);
    echo '<div class="ui purple message huge message">Vous êtes maintenant un membre !!! </div>';
    header('Refresh: 4; index.php');

}
include_once("../../resources/lib/Header.php");


?>