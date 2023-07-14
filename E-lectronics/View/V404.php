<?php

class V404 {
    public function displayError() {
        //print("ciao");
        $smarty = SmartyConfig::initialize();
        $smarty->display('404.tpl');

    }
}
?>