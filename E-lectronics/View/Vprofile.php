<?php

class Vprofile {
    public function displayProfile(string $username ,array $buyedItems , array $soldItems , array $sellingItems) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('username' , $username);
        $smarty->assign('buyedItems', $buyedItems);
        $smarty->assign('soldItems', $soldItems);
        $smarty->assign('sellingItems', $sellingItems);
        $smarty->display('profile.tpl');

    }
}
?>