<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 03.06.2016
 * Description: Page qui permet de crée des script
 */
include_once('../../resources/lib/Header.php');
echo "<br />";
echo "<br />";
if (empty($_SESSION['pseudo'])) {
    echo '<div class="ui red message huge message">Erreur !</div>';

    echo '<center><font color="red" size="4"><b>Vous devez vous connnecter pour accéder à cette page <br> <i><a href="connect.php"</a>Se connecter</i></center></font><br />';
} else {
    ?>

    <h1>Accueil</h1>
    <div class="ui vertical feature segment">
        <div class="ui centered page grid">
            <div class="fourteen wide column">
                <div class="ui one column center aligned stackable divided grid">
                    <div class="column column-feature">
                        <div class="ui icon header">
                            <i class="info icon"></i>
                            Ajout d'un script
                        </div>
                        <div class="ui piled segment">
                            <h3>Merci de respecter les normes introduites dans les input</h3>
                            <br>
                            <br>

                            <form class="ui form" method="post" action="addPost.php">
                                <div class="ui piled segment">
                                    <div class="field">
                                        <div class="field">
                                            <h4 class="ui header">Nom du script</h4>
                                            <input type="text" name="nom" placeholder="Nom">
                                        </div>
                                    </div>
                                    <h4 class="ui header">Code</h4>
                                    <label>Text</label>
                                    <textarea name="code"
                                              placeholder="Rename-Computer -NewName -Param1 -Param2 -Param3"></textarea>
                                    <br>
                                    <h4 class="ui header">Explication du script</h4>
                                    <textarea name="explication"
                                              placeholder="Ce script permet à l'utilisateur de changer de le nom de son pc - Une fois le script lancé, le pc a besoin de redémarrer, s'assurer que tout a été sauvegardé correctement"></textarea>
                                    <br>
                                    <h4 class="ui header">Syntaxe</h4>
                                    <textarea name="syntaxe" placeholder="Nombre de paramètres :
                                 -Param1 = nom du pc
                                  Exemple : INF-N509-06"></textarea>

                                    <p></p>
                                    <?php
                                    //print("<input type='hidden' name='username' value='" . $_POST["fkMember"] . "'>");
                                    ?>
                                </div>
                                <button class="ui button" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../../resources/lib/Footer.html');
}
?>

</html>