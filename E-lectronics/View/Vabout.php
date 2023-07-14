<?php
class Vabout {
    public function displayAbout() {
        $smarty = SmartyConfig::initialize();
        $smarty->display('about.tpl');

    }
}
?>