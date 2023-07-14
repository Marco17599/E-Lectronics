<?php

class Vitems {
    public function displayItems(array $items , array $cartItems ,string|null $category) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('items', $items);
        $smarty->assign('cartItems', $cartItems);
        if(!is_null($category)){
            $smarty->assign('category', $category);
        }
        $smarty->display('shop.tpl');
        /*print($items[13]->getImage());
        print "ciao";*/
        

    }

    public function displaySingleItem( object $item , array $items ,  array $cartItems) {
        $smarty = SmartyConfig::initialize();
        $itemAsArray= $item->getKeysValues();
        $sellerAsArray= $item->getVenditore()->getKeysValues();
        $smarty->assign('objectItem' , $item);
        $smarty->assign('item',$itemAsArray);
        $smarty->assign('seller',$sellerAsArray);
        $smarty->assign('items', $items);
        $smarty->assign('cartItems', $cartItems);
        $smarty->display('item.tpl');
        
    }
       
}
?>