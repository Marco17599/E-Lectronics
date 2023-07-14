<?php

class CmanageCheckout
{
    public function getCheckout($params)
    {
        session_start();

        if ($params == "") {
            if(isset($_SESSION['cart'])) {
                $cart = unserialize($_SESSION['cart']) ;
                $view = new Vcheckout();
            $view->displayCheckout($cart);
             }
          
        } else {
            $view = new V404();
            $view->displayError();


        }

}

}


?>