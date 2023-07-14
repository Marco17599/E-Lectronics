<?php

class CmanageCart
{
    public function getCart($params)
    {
        session_start();
        //session_destroy();
        if ($params == "") {
            
            if (isset($_SESSION["cart"]) ) {
                $cart = unserialize($_SESSION["cart"]);
               // print_r($cart);
                $view = new Vcart();
                $view->displayCart($cart);
            } else {
                $view = new Vcart();
                $view->displayCart([]);
                
            }

        } else {
            $view = new V404();
            $view->displayError();

        }
    }

    public function postCart($params) {
               session_start();
               
               if(isset($_SESSION["cart"])){
                
              
               $cart = unserialize($_SESSION["cart"]);
               //print_r($cart);
               }
           if(isset($_POST["remove"])) {
            $fItem = new Fitem();
            $item = $fItem->load("Item","itemId", $_POST['itemId'], "Eitem");
               
               
               $deletingIndex = array_search($item,$cart);
             
              array_splice($cart,$deletingIndex,1);
              if(sizeof($cart) == 0) {
                unset($_SESSION["cart"]);
              }else {

              
               $serializedCart= serialize($cart);
               
               $_SESSION["cart"] = $serializedCart;
              }
            
          
        }

        if(isset($_POST["clear"])) {
            unset($_SESSION["cart"]);
        }
        header("Location: http://localhost/~marco/E-lectronics/Cart");
        exit;
    }






}


?>