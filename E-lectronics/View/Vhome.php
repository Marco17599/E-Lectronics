<?php

class Vhome {
    public function displayHome(array $items, bool $isIdentified , array $cartItems) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('items' , $items);
        $smarty->assign('isIdentified', $isIdentified);
        $smarty->assign('cartItems', $cartItems);
        $smarty->display('index.tpl');

    }
}
?>