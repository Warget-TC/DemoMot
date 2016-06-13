<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 03.06.2016
 * Description: Page permettant de vérifier la connexion
 */

include_once("../../resources/lib/Header.php");
include_once("../../resources/lib/dbconnexion.php");

ini_set("display_errors", 0);
error_reporting(0);

$db = new DbConnexion();
// Vérifie elle est défini & non nul

if (isset($_POST['pseudo'])) {

    // si elle est pas vide
    if ($_POST['pseudo'] != "") {
        // Va chercher la fonction et met le userpseudo dans le loginUser
        $check = $db->loginUser($_POST['pseudo']);
        // Vérifie si le pseudo + mdp = pareil que dans la bdd
        if ($_POST['pseudo'] == $check["memPseudo"] && $_POST['password'] == $check["memPassword"]) {
            //commence la session
            session_start();
            // Met le pseudo dans la session
            $_SESSION['pseudo'] = $_POST['pseudo'];
            // Met l'id dans la session qui va être dans une requête sql
            $_SESSION['id'] = $check['idMember'];
            //echo "Prénom tapé par l'utilisateur : ".$_POST['pseudo'];
            echo '<div class="ui purple message huge message">Vous êtes connecté!!! </div>';
            header('Location: index.php');

        } else {
            echo '<div class="ui error message">
                  <i class="close icon"></i>
                  <div class="header">
                    Vérifier les informations suviantes :
                  </div>
                  <ul class="list">
                    <li>Pseudo</li>
                    <li>Mot de passe</li>
                  </ul>
                </div>';

        }
    } else {


    }

}





?>
<?php include_once("../../resources/lib/Footer.html"); ?>