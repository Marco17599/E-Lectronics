<?php

class Vcheckout{
    public function displayCheckout(array $cart , array|null $failedCredentials , bool $isIdentified) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('cart' , $cart);
        $count = 0;
        foreach($cart as $item) {
            $count = $count + $item->getItemPrice();
        }
        $smarty->assign('totalPrice', $count);
        if($failedCredentials !=null){
            $smarty->assign('failedCredentials', $failedCredentials);
        }
        $smarty->assign('isIdentified', $isIdentified);
       
        $smarty->display('checkout.tpl');

    }
}
?>