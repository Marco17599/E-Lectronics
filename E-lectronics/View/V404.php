<?php

class V404 {
    public function displayError() {
      
        $smarty = SmartyConfig::initialize();
        $smarty->display('404.tpl');

    }
}
?>