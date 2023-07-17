<?php


class Fitem extends FcommunicationDb {
    public function load(string $table, string $key, string $keyValue, string $nameObject) :object|null {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM`'.$table.'` WHERE '.$key.' =  \''.$keyValue.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
        $fUser = new Fuser();
        $seller = $fUser->load("User", "userId", $objectAttributes["seller"],"Euser");
        $category = EArticlesTypology::getCaseFromString($objectAttributes["category"]);
        $returningItem = new Eitem($objectAttributes["itemId"],$objectAttributes["itemName"],
                                   $objectAttributes["itemDescription"],$objectAttributes["itemPrice"],
                                   $objectAttributes["isSold"],$category, base64_encode($objectAttributes["image"] ) , $seller);
                                   if (is_null($returningItem)){
                                    return null;
                                   }else return $returningItem;
                                   
    }

    public function loadAllUnsoldItems() :array  {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE isSold =  false';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        //print_r($objectAttributes);
        //print(base64_encode($objectAttributes["image"]));
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
            $seller = $fUser->load("User", "userId", $item["seller"],"Euser");
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, base64_encode($item["image"]), $seller));
        }
        return $returningItemsArray;
        
    }

    public function loadAllCategoryItems(EArticlesTypology $category) : array {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE category =   \''.$category->name.'\'AND isSold = false';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
            $seller = $fUser->load("User", "userId", $item["seller"],"Euser");
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, base64_encode($item["image"]), $seller));
        }
        return $returningItemsArray;
    }

    public function loadAllSoldByUserItems(Euser $user) : array {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE seller =   \''.$user->getUserId().'\' AND isSold = true';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
          
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, base64_encode($item["image"]), $user));
        }
        return $returningItemsArray;


    }
 

    public function loadAllSellingByUserItems(Euser $user) : array {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE seller =   \''.$user->getUserId().'\' AND isSold = false';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
          
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, base64_encode($item["image"]), $user));
        }
        return $returningItemsArray;
    }

    public function loadAllBuyedByUserItems(Euser $user) : array {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE buyer =   \''.$user->getUserId().'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
           $seller = $fUser->load("User", "userId", $item["seller"],"Euser");
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, base64_encode($item["image"]), $seller));
        }
        return $returningItemsArray;
    }

    public function loadAllSearchedItems(string $search) : array {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE itemName  LIKE    \''. '%'.$search. '%'.'\' ';
        
       
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
           $seller = $fUser->load("User", "userId", $item["seller"],"Euser");
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, base64_encode($item["image"]), $seller));
        }
        return $returningItemsArray;
    }
}

?>