<?php

require "../Utility/configDb.php";

class FConnectionDB {

    private static $instance;
    private  $pdo;

    private function __construct() {
     try {
        $this->pdo = new PDO("mysql:dbname=".$GLOBALS["dbname"].";host=".$GLOBALS["hostname"].";", $GLOBALS["user"], $GLOBALS["pass"]);
        }catch (PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function getInstance () :FConnectionDB{
    if(self::$instance == null) {
        self::$instance = new FConnectionDB();
        }return self::$instance;
        }
    public function getPdo() {
		return $this->pdo;
	}
}







?>