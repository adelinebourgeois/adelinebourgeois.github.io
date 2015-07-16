<?php
/**
 *   BDD class file
 *
 *   Class do connect to the database
 *
 *
 * PHP Version 5.4
 *
 * @category Nothing
 * @package  Nothing
 * @author   masson_u coquel_d bourge_n <christophe1.coquelet@epitech.eu>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:8080/rendu/Projet_Web_tweet_academie/
 */

if (isset($_POST['submit'])) {
    if (isset(stripslashes($_POST['nom'])) && isset($_POST['tel']) && isset(stripslashes($_POST['mail'])) && isset(stripslashes($_POST['objet'] && isset(stripslashes($_POST['message']))) {
        mail('adeline.bourgeois.01@gmail.com', $_POST['objet'], $_POST['nom']. '<br>' .  $_POST['tel']. '<br>' . $_POST['mail']     .'<br>' . $_POST['message'], "Content-type: text/html");
        header('Location: ../../index.html');
        exit();
    }
} else {
    echo"L'envoi a échoué, merci de renouveller l'opération !";
}

?>