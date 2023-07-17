<?php

class CmanageItems
{
    public function getItems($params)
    {

        $isIdentified = false;
        $session = FsessionUtility::getInstance();
        if ($session::isLogged()) {
            $isIdentified = true;
        }


        if ($session::isSetted("cart")) {
            $cartItems = unserialize($session::getSavedElement("cart"));

            foreach ($cartItems as $cartItem) {
                print($cartItem->getItemId() . " ");
            }
        } else {
            $cartItems = [];
        }
        $fItem = new Fitem();
        if ($params == "") {
            $items = $fItem->loadAllUnsoldItems();

            $view = new Vitems();
            $view->displayItems($items, $cartItems, null, $isIdentified);
        } else {
            if (str_contains($params, "search")) {

                $paramsArray = explode('=', $params);
                print("ciao");
                $searchedItems = $fItem->loadAllSearchedItems($paramsArray[1]);
                print("a");
                $view = new Vitems();

                $view->displaySearchedItems($searchedItems, $cartItems, $isIdentified);



            } elseif (str_contains($params, "category")) {
                $explodedUrl = explode("=", $params);
                $category = $explodedUrl[1];

                $items = $fItem->loadAllCategoryItems(EArticlesTypology::getCaseFromString($category));
                $view = new Vitems();
                $view->displayItems($items, $cartItems, $category, $isIdentified);
            } else {

                if ($fItem->exist("Item", "itemId", $params)) {
                    $item = $fItem->load("Item", "itemId", $params, "Eitem");
                    $items = $fItem->loadAllCategoryItems($item->getCategory());
                    array_splice($items, array_search($item, $items), 1);
                    $view = new Vitems();
                    $view->displaySingleItem($item, $items, $cartItems, $isIdentified);


                } else {
                    $view = new V404();
                    $view->displayError();
                }



            }
        }
    }


    public function postItems($params)
    {
        $session = FsessionUtility::getInstance();
        if ($session::isLogged()) {
            if ($session::isSetted("cart")) {
                $cart = unserialize($session::getSavedElement("cart"));
            } else {
                $cart = [];
            }
            $itemId = $_POST['itemId'];
            $fItem = new Fitem();
            $item = $fItem->load("Item", "itemId", $itemId, "Eitem");
            if (!in_array($item, $cart)) {
                array_push($cart, $item);
            }
            $serializedCart = serialize($cart);
            $session::saveSomething($serializedCart, "cart");

            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Cart");

            exit;
        } else {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");

            exit;
        }

    }



    public function getItemsForHomePage()
    {

        $isIdentified = false;
        $session = FsessionUtility::getInstance();

        if ($session::isLogged()) {
            $isIdentified = true;
        }

        if ($session::isSetted("cart")) {
            $cartItems = unserialize($session::getSavedElement("cart"));


        } else {
            $cartItems = [];
        }

        $fItem = new Fitem();
        $items = $fItem->loadAllUnsoldItems();
        $view = new Vhome();
        $view->displayHome($items, $isIdentified, $cartItems);
    }
}


?>