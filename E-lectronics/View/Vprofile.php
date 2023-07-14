<?php

class Vprofile {
    public function displayProfile(string $username) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('username' , $username);
        $smarty->display('profile.tpl');

    }
}
?>