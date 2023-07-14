<?php

class Vcart {
    public function displayCart(array $cartItems) {
       
        $smarty = SmartyConfig::initialize();
        
        $count = 0;
        foreach($cartItems as $item) {
            $count = $count + $item->getItemPrice();
        }
        if($count >0){
        $smarty->assign('cart' , $cartItems);
        $smarty->assign('totalPrice', $count);
        }
        $smarty->display('cart.tpl');

    }
}
?>