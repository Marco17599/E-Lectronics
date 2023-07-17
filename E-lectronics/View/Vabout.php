<?php
class Vabout {
    public function displayAbout(bool $isIdentified) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('isIdentified', $isIdentified);
        
        $smarty->display('about.tpl');

    }
}
?>