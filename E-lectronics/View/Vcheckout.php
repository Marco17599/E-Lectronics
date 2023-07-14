<?php

class Vcheckout{
    public function displayCheckout(array $cart) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('cart' , $cart);
        $count = 0;
        foreach($cart as $item) {
            $count = $count + $item->getItemPrice();
        }
        $smarty->assign('totalPrice', $count);
        $smarty->display('checkout.tpl');

    }
}
?>