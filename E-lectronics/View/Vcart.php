<?php

class Vcart {
    public function displayCart(array $cartItems ,bool $isIdentified ) {
       
        $smarty = SmartyConfig::initialize();
        
        $count = 0;
        foreach($cartItems as $item) {
            $count = $count + $item->getItemPrice();
        }
        if($count >0){
        $smarty->assign('cart' , $cartItems);
        $smarty->assign('totalPrice', $count);
        }
        $smarty->assign('isIdentified', $isIdentified);
        if($isIdentified){
            
          
      
        }
        
        $smarty->display('cart.tpl');

    }
}
?>