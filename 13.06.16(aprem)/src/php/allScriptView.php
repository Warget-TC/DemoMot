<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 08.06.2016
 * Description: Page qui affiche tout les scripts disponibles
 */
include_once("../../resources/lib/Header.php");
include_once("../../resources/lib/dbconnexion.php");

$db = new DbConnexion();
$allScript = $db->getAllScripts();
?>
    <h1>Scripts disponibles </h1>
    <div class="ui vertical feature segment">
        <div class="ui centered page grid">
            <div class="fourteen wide column">
                <div class="ui one column center aligned stackable divided grid">
                    <div class="column column-feature">
                        <div class="ui icon header">
                            <i class="inbox icon"></i>
                            Liste des scripts
                        </div>
                        <br>

                        <p>Voici ci-dessous la liste des scripts disponibles</p>
                        <br>
                        <br>
                        <br>
                        <br>

                        <form action="detail.php" method="post">

                            <table class="ui celled table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom du script</th>
                                    <th>Posteur</th>
                                    <th>Autres</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                //permet de voir si l'user est connecté (juste pour vérifier)
                                // echo $_SESSION['userPseudo'];

                                // On affiche chaque entrée une à une (Ligne du tableau)
                                for ($teacherCptr = 0; $teacherCptr < count($allScript); $teacherCptr++) {
                                    ?>

                                    <tr>
                                        <td> <?php echo /*Affiche la firstName*/
                                            $allScript[$teacherCptr]['idScript']; ?> </td>
                                        <td> <?php echo $allScript[$teacherCptr]['srcNom']; ?> </td>
                                        <td> <?php echo $allScript[$teacherCptr]['memPseudo']; ?> </td>
                                        <td class="warning"><a
                                                href="<?php /*Fait un lien sur la page Detail en prenant l'id */
                                                print("detail.php?id=" . $allScript[$teacherCptr]['idScript']) ?>"
                                            <span></span>Voir <i class="forward mail icon"></i></a></td>
                                    </tr>

                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </form>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php include_once("../../resources/lib/Footer.html"); ?>