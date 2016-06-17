<?php
/**
 * Created by PhpStorm.
 * User: cheemata
 * Date: 15.06.16
 * Time: 09:03
 */
include_once("../../resources/lib/Header.php");
$db = new DbConnexion();
$allScript = $db->getComment($_GET['id']);
?>
<h1 xmlns="http://www.w3.org/1999/html">Scripts disponibles </h1>
<div class="ui vertical feature segment">
    <div class="ui centered page grid">
        <div class="fourteen wide column">
            <div class="ui one column center aligned stackable divided grid">
                <div class="column column-feature">
                    <div class="ui icon header">
                        <i class="book icon"></i>
<table class="ui celled table">
                                <thead>
                                <tr>
                                    <th>Posteur (anonyme)</th>
                                    <th>Commentaire</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                for ($teacherCptr = 0; $teacherCptr < count($allScript); $teacherCptr++) {
                                    ?>

                                    <tr>
                                        <td> <?php echo /*Affiche la firstName*/
                                            $allScript[$teacherCptr]['comPseudo']; ?> </td>
                                        <td> <?php echo $allScript[$teacherCptr]['comComment']; ?> </td>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>


</tbody>
</table>
                        <a href="<?php print("detail.php?id=" . $_GET['id']) ?>"<span>Commenter ce script (anonyme)</span></a>
                        <br>
                        <br>
                        <div class="ui negative message">
                            <div class="header">
                                Les commentaires désobligeant seront supprimés !
                            </div>
                          </div>


                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once("../../resources/lib/Footer.html"); ?>
