<?php
class Vadmin {
    public function displayAdmin(array $items) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('items' , $items);
        $smarty->display('home_admin.tpl');
 }

 public function displayItemAdmin( object $item ) {
    $smarty = SmartyConfig::initialize();
    $itemAsArray= $item->getKeysValues();
    $sellerAsArray= $item->getVenditore()->getKeysValues();
    $smarty->assign('objectItem' , $item);
    $smarty->assign('item',$itemAsArray);
    $smarty->assign('seller',$sellerAsArray);
  
    $smarty->display('item_admin.tpl');
    
}

public function displaySellerAdmin(array $userReviews) {
    $smarty = SmartyConfig::initialize();
    $smarty->assign('reviews' , $userReviews);
    $smarty->display('reviews_admin.tpl');
}
}
?>