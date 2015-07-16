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
class Bdd
{
    protected $bdd;

    /**
     * Constructor of the bdd class
     * Initialize the connection
     */
    public function __construct()
    {
        try
        {
            $this->_bdd = new PDO('mysql:host=localhost;dbname=portefolio;unix_socket=/home/bourge_n/.mysql/mysql.sock', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }   
    }
    
    /**
     *   Get the connection with de database;
     *   @return _bdd : the connection
     */
    public function getBdd()
    {
        return $this->_bdd;
    }
}
?>