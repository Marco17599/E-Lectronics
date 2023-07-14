<?php
require_once 'smartyConfig.php';
require_once "config/autoload.php";
/*$array_prova = [
    "Smartphone" => [
        "uno","due"
    ],
    "Computer" => [
        "mac", "samsung", "vaio","sony"
    ],
    "New_Releases" => [
        "1", "2","3","4"
    ],
    "Wires" => [
        "a","b","c","d"
    ] ]  ;

*/

/*foreach($array_prova as $item){
    print($item ." ");
}*/


//$smarty->testInstall();

//$smarty->assign('array', $array_prova);*/
/*if($_SERVER['REQUEST_URI'] == "about"){
    $smarty->display('about.tpl');
}else
*/
/*$req = $_SERVER;
*/
/*$smarty =  SmartyConfig::initialize();
 $smarty->display('index.tpl');
//print("ciao");

//array_search("E-lectronics",$resource);

*/
print ($_SERVER['REQUEST_URI']);
$FrontController = CfrontController::getInstance($_SERVER['REQUEST_URI']);
$FrontController->run();


?>
