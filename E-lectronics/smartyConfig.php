<?php
require 'Smarty/libs/Smarty.class.php';

class SmartyConfig
{
    static function initialize()
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir('Smarty/templates');
        $smarty->setCompileDir('Smarty/templates_c');
        $smarty->setCacheDir('Smarty/cache');
        $smarty->setConfigDir('Smarty/configs');
        return $smarty;
    }
}
?>