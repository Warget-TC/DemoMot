<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 07.06.2016
 * Description: Page permettant de se connecter
 */
include_once("../../resources/lib/Header.php");

if (!empty($_SESSION['pseudo'])) {
    echo '<div class="ui red message huge message">Erreur !</div>';

    echo '<center><font color="red" size="4"><b>Vous êtes connecté !<br> <i></i></center></font><br />';
}

else
{
?>


    <h1>Connexion</h1>
    <div class="ui vertical feature segment">
        <div class="ui centered page grid">
            <div class="fourteen wide column">
                <div class="ui one column center aligned stackable divided grid">
                    <div class="column column-feature">
                        <div class="ui icon header">
                            <i class="checkmark icon"></i>
                            Se Connecter
                            <br>
                            <br>

                            <form action="checkConnect.php" method="post" class="ui form">
                                <div class="field">
                                    <label>Pseudo</label>
                                    <input type="text" name="pseudo" placeholder="Pseudo">
                                </div>


                                <div class="field">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password">
                                </div>

                                <button class="ui button" type="submit" value="Valider">Submit</button>
                            </form>
                            <br>
                            <br>
                            <a href="registration.php">Pas encore inscrit ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php include_once("../../resources/lib/Footer.html"); ?>