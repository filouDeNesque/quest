<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 09/05/2018
 * Time: 21:32
 */
use \PDO;
class Database{
    private $db_name;
    /**
     * @var string
     */
    private $db_user;
    /**
     * @var string
     */
    private $db_pass;
    /**
     * @var string
     */
    private $db_host;
    private $pdo;
    /**
     * Database constructor.
     * @param $db_name nom de la base de donnée
     * @param string $db_user nom de l'utilisateur
     * @param string $db_pass mot de pass
     * @param string $db_host emplacement
     */
    public function __construct($db_name, $db_user= 'root', $db_pass='', $db_host='localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }
    /**
     * @return PDO
     */
    private function getPDO()
    {
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    function postform($nom,$prenom,$age,$satd,$satc,$satv,$monta = 0){

        $req = $this->pdo->prepare("INSERT INTO test2 (nom, prenom, age, SatisfactionVendeur, SatisfactionDepot, Satisfactioncaisse, MontantAchat) 
                                VALUE (:nom, :prenom, :age, :SatisfactionVendeur, :SatisfactionDepot, :Satisfactioncaisse, :MontantAchat)");
        $req->execute(array(
            "nom" => $nom,
            "love" => $prenom,
            "age" => $age,
            "SatisfactionVendeur" => $satv,
            "SatisfactionDepot" => $satd,
            "Satisfactioncaisse" => $satc,
            "MontantAchat" => $monta
        ));

    }

}