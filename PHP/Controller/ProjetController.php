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
 
require '../PHP/Model/User.php';
session_start();
$affich = new User();
$project = $affich->projet($_GET['category']);  

?>
