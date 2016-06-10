<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 03.06.2016
 * Description: Page d'entête
 */
session_start();
include_once('../../resources/lib/dbconnexion.php');
$db = new DbConnexion();

?>


<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>DemoMot</title>
  <link rel="stylesheet" type="text/css" href="../../resources/lib/semantic-ui/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../../resources/lib/semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="../../resources/lib/homepage.css">
  <link rel="stylesheet" type="text/css" href="../../resources/lib/iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../../resources/lib/semantic-ui/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../../resources/lib/semantic-ui/icon.css">
  <link rel="stylesheet" type="text/css" href="../../resources/css/Footer.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../../resources/lib/semantic-ui/semantic.js"></script>
  <script src="../../resources/lib/homepage.js"></script>
   <script>
    $(function(){
        $('.ui.card').popup();
    });
    </script>
</head>
<body id="home">
  <div class="ui inverted masthead centered segment">
    <div class="ui page grid">
      <div class="column">
        
 

<div class="ui secondary pointing menu">

   <a href="../../src/php/index.php" class="logo item">
    DemoMot
  </a>
  <a href="../../src/php/index.php" class="active item">
    <i class="flaticon-home"></i> Accueil
  </a>
    <a href="../../src/php/allscriptview.php" class="active item">
        <i class="file icon"></i>Voir les scripts
    </a>
    <?php
    if(isset($_SESSION['pseudo']))
    {
    echo'  <a href="../../src/php/createScript.php" class="active item">
      <i class="edit icon"></i>Crée un script
  </a>';


    }
    ?>

  <a href="../../src/php/contact.php" class="active item">
   <i class="call square icon"></i> Contact & à propos
  </a>

    <div class="right menu">
        <div class="item">


    <?php
    if(isset($_SESSION['pseudo'])) {
        echo $_SESSION['pseudo'];
        echo '  </div>
    <a href="../../src/php/disconnect.php" class="active item">
    <i class="remove user icon"></i>   Déconnexion
    </a>';
    }

    else
    {      echo '  </div>
    <a href="../../src/php/registration.php" class="active item">
    <i class="add user icon"></i>   Inscription
    </a>
        <a href="../../src/php/connect.php" class="active item">
            <i class="connectdevelop icon"></i> Connexion
        </a>';

    }
    ?>
        </div>

</div>

</div>
</div>
</div>
</div>

