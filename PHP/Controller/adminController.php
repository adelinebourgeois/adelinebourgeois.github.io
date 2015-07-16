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

require '../Model/User.php';
session_start();

$projet = new User();
if (isset($_POST['envoyer'])) {
        //$description = isset($_POST['description_']) ? $_POST['description_'] : $_POST['description'];*/
    $projet->send($_POST['url'], $_POST['title'], $_POST['description'], $_POST['category']);

}

require '../../templates/admin.html';
?>