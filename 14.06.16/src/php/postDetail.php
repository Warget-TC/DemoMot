<?php

/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 8.06.2016
 * Description: Page de détails de chaque scripts
 */

include_once("../../resources/lib/Header.php");
$param1 = $_POST['param1'];
$param2 = $_POST['param2'];
$param3 = $_POST['param3'];
$param4 = $_POST['param4'];

echo("$param1");
$db = new DbConnexion();
//
$allScript = $db->getScriptDetail($_POST["id"]);


?>
    <h1>Accueil</h1>
    <div class="ui vertical feature segment">
        <div class="ui centered page grid">
            <div class="fourteen wide column">
                <div class="ui one column center aligned stackable divided grid">
                    <div class="column column-feature">
                        <div class="ui icon header">
                            <i class="info icon"></i>
                            Votre script Personnel !
                        </div>
                        <p>Merci de remplacer -param1 par le paramètre 1, de remplacer param2 par le paramètre 2,
                            etc...</p>

                        <div class="ui form">
                            <div class="field">
                                <label>Code Powershell de base</label>
                                <input placeholder="<?php echo $allScript['srcCode']; ?>" readonly="" type="text">
                            </div>
                            <div class="ui text container">
                                <div class="ui segments">
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 1</label>
                                            <input type="text" name="param1" readonly=""
                                                   placeholder="<?php echo("$param1"); ?>">
                                        </div>
                                    </div>
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 2</label>
                                            <input type="text" name="param2" readonly=""
                                                   placeholder="<?php echo("$param2"); ?>">
                                        </div>
                                    </div>
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 3</label>
                                            <input type="text" name="param3" readonly=""
                                                   placeholder="<?php echo("$param3"); ?>">
                                        </div>
                                    </div>
                                    <div class="ui segment">
                                        <div class="field">
                                            <label>Paramètre 4</label>
                                            <input type="text" name="param4" readonly=""
                                                   placeholder="<?php echo("$param4"); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once("../../resources/lib/Footer.html"); ?>