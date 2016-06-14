<?php

/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 8.06.2016
 * Description: Page de détails de chaque scripts
 */

include_once("../../resources/lib/Header.php");
$db = new DbConnexion();
$allScript = $db->getScriptDetail($_GET['id']);
?>
    <h1>Accueil</h1>
    <div class="ui vertical feature segment">
        <div class="ui centered page grid">
            <div class="fourteen wide column">
                <div class="ui one column center aligned stackable divided grid">
                    <div class="column column-feature">
                        <div class="ui icon header">
                            <i class="info icon"></i>
                            Information & création d'un script & commentaire
                        </div>
                        <form class="ui form" method="post" action="postDetail.php">
                            <p>ID: <?php echo $allScript['idScript']; ?></p>

                            <p>Nom du script : <?php echo $allScript['srcNom']; ?></p>

                            <p>Nom du posteur : <?php echo $allScript['memPseudo']; ?></p>
                            <!---    <div class="ui form">
                                <div class="ui corner labeled input">
                                <div class="field">
                                    <label>Explication & syntaxe du script</label>
                                    <input placeholder="<?php echo $allScript['srcExplanation']; ?>" readonly="" type="text">
                                </div>
                                </div>
                            </div> --->

                            <div class="ui piled segment">
                                <h4 class="ui header">Explication du script</h4>

                                <p><?php echo nl2br($allScript['srcExplanation']); ?></p>
                                <br>
                                <h4 class="ui header">Syntaxe</h4>

                                <p><?php echo nl2br($allScript['srcSyntax']); ?></p>
                            </div>


                            <div class="ui form">
                                <div class="field">
                                    <label>Code Powershell de base</label>
                                    <input placeholder=" <?php echo $allScript['srcCode']; ?>" readonly=""
                                           type="text">
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>


                            <h3 class="ui center aligned header">Paramètre (facultatif)</h3>

                            <div class="ui text container">
                                <div class="ui segments">
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 1</label>
                                            <input type="text" name="param1" placeholder="Laisser vide si non utilisé">
                                        </div>
                                    </div>
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 2</label>
                                            <input type="text" name="param2" placeholder="Laisser vide si non utilisé">
                                        </div>
                                    </div>
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 3</label>
                                            <input type="text" name="param3" placeholder="Laisser vide si non utilisé">
                                        </div>
                                    </div>
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 4</label>
                                            <input type="text" name="param4" placeholder="Laisser vide si non utilisé">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            // Pour récuperer la valeur de l'id qui est en get pour l'envoyer en post
                            print("<input type='hidden' name='id' value='" . $_GET["id"] . "'>");
                            ?>


                            <br>
                            <button class="ui secondary button" TYPE="SUBMIT">
                                Script Perso → GOO
                            </button>
                        </form>

                        <br>
                        <h3 class="ui center aligned header">Commentaire (facultatif)</h3>

                            <form class="ui form" action="addCom.php" method="post">
                                <div class="field">
                                    <textarea type="text" name="comment" placeholder="Donner votre avis !"></textarea>
                                </div>
                                <?php
                                // Pour récuperer la valeur de l'id qui est en get pour l'envoyer en post
                                print("<input type='hidden' name='id' value='" . $_GET["id"] . "'>");
                                ?>
                                <button class="ui secondary button" TYPE="SUBMIT">
                                    Poster votre avis !
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once("../../resources/lib/Footer.html"); ?>