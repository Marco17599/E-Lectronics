<?php
 class UpostHandler {

    private static $instance ;
    private function __construct() {

    }

    public static function getInstance () : UpostHandler{
        if(self::$instance == null) {
            self::$instance = new UpostHandler();

        }return self::$instance;
    }

    public static function isPosted(string $field) : bool {
        if(isset($_POST[$field])){
            return true;
        }else return false;
    }

    public static function returnValueFromField(string $field) {
        return $_POST[$field];
    }

    public static function hasEmptyFields() {
        $empty = false;
        foreach ($_POST as $field) {
            if ($field == "") {
                $empty= true;
                break;

            }
        }return $empty;
    }
}

?>