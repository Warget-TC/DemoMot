<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 03.06.2016
 * Description: Page permettant de s'enregistrer
 */
?>


<?php include_once("../../resources/lib/Header.php"); ?>

    <h1>Inscription</h1>
    <div class="ui vertical feature segment">
        <div class="ui centered page grid">
            <div class="fourteen wide column">
                <div class="ui one column center aligned stackable divided grid">
                    <div class="column column-feature">
                        <div class="ui icon header">
                            <i class="add user icon"></i>
                            S'enregistrer
                            <br>
                            <br>

                            <form class="ui form" method="POST" action="registrationCheck.php"
                                  enctype="multipart/form-data">
                                <div class="field">
                                    <div class="two fields">
                                        <div class="field">
                                            <label>Pseudo</label>
                                            <input type="text" name="pseudo" placeholder="pseudo">
                                        </div>
                                        <div class="field">
                                            <label>Mot de passe</label>
                                            <input type="password" name="password" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="two fields">
                                        <div class="field">
                                            <label>Prénom</label>
                                            <input type="text" name="fristName" placeholder="Prénom">
                                        </div>
                                        <div class="field">
                                            <label>Nom</label>
                                            <input type="text" name="lastName" placeholder="Nom">
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <br>
                                <input type="file" name="avatar" id="avatar">
                                <br>
                                <br>
                                <br>

                                <button class="ui button" name="submit" type="submit">Submit</button>
                            </form>
                            <br>
                            <br>
                            <a href="connect.php">Déjà inscrit ?</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php include_once("../../resources/lib/Footer.html"); ?>