<?php

require 'Smarty/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->setTemplateDir('Smarty/templates');
$smarty->setCompileDir('Smarty/templates_c');
$smarty->setCacheDir('Smarty/cache');
$smarty->setConfigDir('Smarty/configs');

$array_prova = [
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



/*foreach($array_prova as $item){
    print($item ." ");
}*/


//$smarty->testInstall();

/*$smarty->assign('array', $array_prova);*/
$smarty->display('item.tpl');


?>
