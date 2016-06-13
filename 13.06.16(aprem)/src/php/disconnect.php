<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 07.06.2016
 * Description: Page qui déconnecte la session
 */

session_start();
session_destroy();
header('location:index.php');
exit;
