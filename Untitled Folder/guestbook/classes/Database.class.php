<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);




class Database{

    private $host;
    private $dbName;
    private $userName;
    private $password;

    public function __construct(){
        $this->host='localhost';
        $this->dbName='blog';
        $this->userName='root';
        $this->password='root';
    }
    public function connect(){
        $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->userName , $this->password);
        $pdo->exec('SET NAMES UTF8');
        return $pdo;
    }

}

// $db=new Database();
// print_R($db->connect());
// echo "<br>";


// $pdo = new PDO('mysql:host=localhost;dbname=turinys', 'root', 'root');
// $pdo->exec('SET NAMES UTF8');
//
// $sql = 'SELECT * FROM movies WHERE id = '.$id;
// $query = $pdo->prepare($sql);
// $query->execute();
// $one_movie = $query->fetch(PDO::FETCH_ASSOC);





 ?>
