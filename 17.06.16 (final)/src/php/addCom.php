<?php
/**
 * Created by PhpStorm.
 * User: cheemata
 * Date: 14.06.16
 * Time: 14:18
 */
include_once("../../resources/lib/Header.php");
if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];
}
else      $comment = "";

if (isset($_POST['userPseudo'])) {
    $userPseudo = $_POST['userPseudo'];
}
else      $userPseudo = "";

if (empty($comment)OR empty($userPseudo))
{
    echo '<div class="ui icon message">
    <div class="ui error message">
    <i class="close icon"></i>
    <div class="header">
    Merci de remplir correctement tout les champs du formulaire !
    </div>
    <br>
    <br>
    <ul class="list">
    <li>Au plaisir de vous voir à nouveau poster !</li>
    <li><a href="createScript.php">Retour</a> </li>
    </ul>
    </div>
    </div>';
}

else {
    // Défini un nouvel objet
    $db = new DbConnexion();
    $db->addComment($comment, $userPseudo);
    echo '<div class="ui success message">
         <i class="close icon"></i>
         <div class="header">
            Votre commentaire a été correctement ajouté !
         </div>
          Merci de participer à la vie du site !
        </div>';
    //header('Refresh: 3; allScriptView.php');
}


include_once("../../resources/lib/Footer.html");
?>