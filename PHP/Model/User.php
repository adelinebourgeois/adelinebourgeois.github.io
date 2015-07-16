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
require 'Bdd.php';

/**
 *   BDD class
 *
 *   Class do connect to the database
 *
 * @category Nothing
 * @package  Nothing
 * @author   masson_u coquel_d bourge_n <christophe1.coquelet@epitech.eu>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:8080/rendu/Projet_Web_tweet_academie/
 */

class User extends Bdd
{
    /**
    * Connexion
    *
    * @param string $login is login
    * @param string $pwd   is password
    *
    * @return Response
    */
    public function login($login, $pwd)
    {
        $req = "SELECT * FROM admin WHERE login = :login AND password = :pwd";
        $exec = $this->_bdd->prepare($req);
        $test = $exec->execute(array(":login" => $_POST['login'], ":pwd" => sha1($_POST['pwd'])));
        
        $result = $exec->fetch(PDO::FETCH_ASSOC);
        //die(var_dump($result));
        if (!empty($result)) {
            $_SESSION['login'] = $result['login'];
            header('Location: ../Controller/adminController.php');
            exit();
        } else {
            header('Location ../');
            exit();
        }

    }


    /**
    * Envoie bdd
    *
    * @param string $urlp        is project url
    * @param string $title       is title
    * @param string $description is description
    * @param string $category    is category
    *
    * @return Response
    */
    public function send($urlp, $title, $description, $category)
    {
        if (isset($_FILES['screen'])) {
                $dir = "../../screen/";
                $screen = basename($_FILES['screen']['name']);
                $screen = strtr($screen, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $screen = preg_replace('/([^.a-z0-9]+)/i', '-', $screen);
                //die(var_dump($screen));
            if (move_uploaded_file($_FILES['screen']['tmp_name'], $dir . $screen)) {
                echo 'Upload : success !';
            } else {
                die('Upload : failure !');
            }
        }

        $sql = "INSERT INTO projets(url_project, screen, title, description, category, date) VALUES (:urlp, :screen, :title, :description, :category, curdate())";
            
            $donnees = $this->_bdd->prepare($sql);
            $donnees->bindParam(':urlp', $urlp);
            $donnees->bindParam(':screen', $screen);
            $donnees->bindParam(':title', $title);
            $donnees->bindParam(':description', $description);
            $donnees->bindParam(':category', $category);
            $test = $donnees->execute();
    }

    /**
    * Connexion
    *
    * @return Response
    */
    public function category()
    {
        $sql = "SELECT url_project, screen, title, description, category FROM projets";
            $donnees = $this->_bdd->prepare($sql); 
            $donnees->execute();
            
            return $donnees;
    } 

    /**
    * Liste des projets
    *
    * @param string $category is category
    *
    * @return Response
    */  
    public function projet($category)
    {
        $sql = "SELECT url_project, screen, title, description, category FROM projets WHERE category = :category";
            $donnees = $this->_bdd->prepare($sql); 
            $donnees->bindParam(':category', $category);
            $donnees->execute();
            
            return $donnees;
    }   
}