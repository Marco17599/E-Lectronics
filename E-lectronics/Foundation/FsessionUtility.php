<?php


class FsessionUtility {

    private static $instance;

    private function __construct() {

    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new FsessionUtility();
            }return self::$instance;
            
    }
    public static function isLogged() :bool {
        session_start();
        if(isset($_SESSION['user'])) {
            return true;
        }else return false;
    }
   

    public static function saveSomething($value , string $name){
        session_start();
        $_SESSION[$name]=$value;
    }
    
    public static function unsetSomething(string $name) {
        session_start();
        unset($_SESSION[$name]);
    }

    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    public static function isSetted($name) : bool {
        session_start();
        if(isset($_SESSION[$name])){
            return true;
        }else return false;
    }

    public static function getSavedElement($name) {
        session_start();
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else return null;
    }

    



    
}







?>