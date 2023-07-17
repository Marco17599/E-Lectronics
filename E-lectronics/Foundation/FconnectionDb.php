<?php


class FconnectionDb {

    private static $instance;
    private  $pdo;

    private $hostname = "localhost";
    private $dbname = "ELectronics";
    private $user = "root";
    private $pass = "Marco-manu35";
    
    private function __construct() {
     try {
        $this->pdo = new PDO("mysql:dbname=".$this->dbname.";host=".$this->hostname.";", $this->user, $this->pass);
        }catch (PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function getInstance () :FconnectionDb{
    if(self::$instance == null) {
        self::$instance = new FconnectionDb();
        }return self::$instance;
        }
    public function getPdo() {
		return $this->pdo;
	}
}







?>