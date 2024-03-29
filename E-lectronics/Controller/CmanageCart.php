<?php

class CmanageCart
{
    public function getCart($params)
    {
        $session = FsessionUtility::getInstance();
        if ($params == "") {
            if ($session::isLogged()) {




                if ($session::isSetted("cart")) {
                    $cart = unserialize($session::getSavedElement("cart"));

                    $view = new Vcart();
                    $view->displayCart($cart, true);
                } else {
                    $view = new Vcart();
                    $view->displayCart([], true, );

                }


            } else {
                header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");
                exit;

            }
        } else {
            $view = new V404();
            $view->displayError();

        }

    }

    public function postCart($params)
    {
        $session = FsessionUtility::getInstance();

        if ($session::isSetted("cart")) {


            $cart = unserialize($session::getSavedElement("cart"));

        }
        $postHandler = UpostHandler::getInstance();
        if ($postHandler::isPosted("remove")) {
            $fItem = new Fitem();
            $item = $fItem->load("Item", "itemId", $postHandler::returnValueFromField("itemId"), "Eitem");


            $deletingIndex = array_search($item, $cart);

            array_splice($cart, $deletingIndex, 1);
            if (sizeof($cart) == 0) {
                $session::unsetSomething("cart");
            } else {


                $serializedCart = serialize($cart);
                $session::saveSomething($serializedCart, "cart");

            }
            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Cart");

        exit;


        }

        elseif ($postHandler::isPosted("clear")) {
            $session::unsetSomething("cart");
            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Cart");

        exit;

        }else {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/error");

        exit;
        }
        
    }






}


?>