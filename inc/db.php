<?php
class DB {

    private $pdo;

    public function __construct()
    {    
    $dbname = "book";
    $dsn = "mysql:host=localhost;dbname=".$dbname;
    $username = "root";
    $password = "bonjour";

        try 
        {
            $pdoConnexion = new PDO($dsn, $username, $password);
        } catch (PDOException $exception){
            echo 'Connexion échouée :'.$exception->getMessage();
        }

        $this->pdo = $pdoConnexion;
    }

    public function getPDO(){
        return $this->pdo;
    }
}
?>

