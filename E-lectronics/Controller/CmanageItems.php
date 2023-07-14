<?php

class CmanageItems {
    public function getItems($params) {
        session_start();
        //session_destroy();
        if(isset($_SESSION['cart'])){
       $cartItems = unserialize($_SESSION['cart']);
       // $_SESSION['cart'] = [];
        foreach($cartItems as $cartItem){
            print ($cartItem->getItemId(). " ");
        }
        }else{
            $cartItems = [];
        }
        $fItem = new Fitem();
        if($params == "") {
        $items = $fItem->loadAllUnsoldItems();
        
        $view = new Vitems();
        $view->displayItems($items, $cartItems ,null);
        }else {
            if(str_contains($params, "search")){
            //write appropriate code
            

        }elseif(str_contains($params, "category")){
           $explodedUrl =  explode("=", $params);
           $category = $explodedUrl[1];
          // print($category);
          $items = $fItem->loadAllCategoryItems(EArticlesTypology::getCaseFromString($category));
          $view = new Vitems();
        $view->displayItems($items, $cartItems, $category);
        }
        
        else  {
            
            if($fItem->exist("Item","itemId", $params)){
                $item = $fItem->load("Item","itemId", $params, "Eitem");
                $items = $fItem->loadAllCategoryItems($item->getCategory());
                array_splice($items, array_search($item, $items),1);
                $view = new Vitems();
                $view->displaySingleItem($item, $items , $cartItems);  
                
               
            }else{
                $view = new V404();
                $view->displayError();
            }
           
          
      
        }
}
        }


        public function postItems($params) {
            session_start();
           // session_destroy();
           if(isset($_SESSION['user'])){
            if (isset($_SESSION['cart'])) {
                $cart = unserialize($_SESSION['cart']);
            } else {
                $cart = [];
            }
                $itemId = $_POST['itemId'];
                $fItem = new Fitem();
                $item = $fItem->load("Item","itemId", $itemId, "Eitem");
                if(!in_array($item , $cart))
                {array_push($cart , $item);}
                $serializedCart = serialize($cart);
                $_SESSION['cart'] = $serializedCart;
               // $this->getItems($params);
               header("Location: http://localhost/~marco/E-lectronics/Cart");
             
               exit;
        }else {
            header("Location: http://localhost/~marco/E-lectronics/Login");
             
               exit;
        }

        }

    

    public function getItemsForHomePage() {
       session_start();
     // session_destroy();
        
        if(isset($_SESSION['cart'])){
       $cartItems = unserialize($_SESSION['cart']);
       
       
        }else{
            $cartItems = [];
        }
        $isIdentified = false;
        if(!empty($_SESSION['user']))
        {$isIdentified = true;}
        $fItem = new Fitem();
        $items = $fItem->loadAllUnsoldItems();
        $view = new Vhome();
        $view->displayHome($items , $isIdentified , $cartItems); 
    }
}


?>