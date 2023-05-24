<?php

function my_autoloader($className) {


$firstLetter = $className[0];
switch ($firstLetter) {
    case 'E':
        require_once( "../Entity/". $className . ".php" );
        break;

    case 'F':
        require_once( "../Foundation/". $className . ".php" );
        break;

    case 'V':
        include_once( '../View/'. $className . '.php' );
        break;

    case 'C':
        include_once( '../Controller/'. $className . '.php' );
        break;


    case 'U':
        require_once( "../Utility/". $className . ".php" );
        break;


}
}


spl_autoload_register('my_autoloader');

?>