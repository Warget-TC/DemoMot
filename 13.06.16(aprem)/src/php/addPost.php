<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 08.06.2016
 * Description: Page qui gère les ajout de scripts
 */
include_once('../../resources/lib/Header.php');


// On commence par récupérer les champs de la page ADD
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else      $nom = "";


if (isset($_POST['code'])) {
    $code = $_POST['code'];
} else      $code = "";

if (isset($_POST['explication'])) {
    $explication = $_POST['explication'];
} else      $explication = "";

if (isset($_POST['syntaxe'])) {
    $syntaxe = $_POST['syntaxe'];
} else      $syntaxe = "";

if (isset($_POST['id'])) {
    $section = $_POST['id'];
} else      $id = "";


// On vérifie si les champs sont vides 
if (empty($nom) OR empty($code) OR empty($explication) OR empty($syntaxe)) {
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

} // Aucun champ n'est vide, on peut enregistrer dans la table
else {
    // Défini un nouvel objet
    $db = new DbConnexion();
    $db->addScript($nom, $code, $explication, $syntaxe);
    echo '<div class="ui success message">
         <i class="close icon"></i>
         <div class="header">
            Votre script a été correctement ajouté !
         </div>
          Merci de participer à la vie du site !
        </div>';
 header('Refresh: 3; allScriptView.php');
}


include_once("../../resources/lib/Footer.html");
?>
