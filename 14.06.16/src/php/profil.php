<?php

/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 8.06.2016
 * Description: Page de détails de chaque scripts
 */

include_once("../../resources/lib/Header.php");
$db = new DbConnexion();
$allMember = $db->getAllMember($_GET['id']);
?>

<h1 id="Profil">Profil de <?php echo $allMember['memPseudo']; ?></h1>
<div class="ui vertical feature segment">
    <div class="ui centered page grid">
        <div class="fourteen wide column">
            <div class="ui one column center aligned stackable divided grid">
                <div class="column column-feature">
                    <div class="ui icon header">
                        <?php print('<img class="ui medium circular image" src="../../resources/images/'.$allMember["memAvatar"].'">'); //Affiche l'image ?>

                    </div>
                    <br>
                    <br>
                    <br>
                    <h7 id="grand"><?php echo $allMember['memPseudo'];?></h7>
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>
                    <table id="table" class="ui very basic collapsing celled table">
                        <thead>
                        <tr><th>Représentation</th>
                            <th>Données</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                        <p class="profils">ID :</p>
                                    </div>
                            </td>
                            <td>
                                <p class="profils"><?php echo $allMember['idMember'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                        <p class="profils">Prénom :</p>
                                        </div>
                                </h4></td>
                            <td>
                                <p class="profils"><?php echo $allMember['memFirstName'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="profils">Nom :</p>
                    </div>
                    </h4>
                    </td>
                    <td>
                        <p class="profils"><?php echo $allMember['memLastName'];?></p>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="profils">Email :</p>
                    </div>
                    </h4>
                    </td>
                    <td>
                        <p class="profils"><?php echo $allMember['memMail'];?></p>
                    </td>
                    </tr>
                        </tbody>
                    </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../../resources/lib/Footer.html"); ?>

