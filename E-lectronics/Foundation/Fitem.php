<?php
require_once "FcommunicationDb.php";
require_once "../config/autoload.php";
require_once "../Entity/EArticolesTypology.php";

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
                                   $objectAttributes["isSold"],$category, $seller);
                                   return $returningItem;
    }

    public function loadAllUnsoldItems() :array  {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE isSold =  false';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
            $seller = $fUser->load("User", "userId", $item["seller"],"Euser");
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, $seller));
        }
        return $returningItemsArray;
        
    }

    public function loadAllCategoryItems(EArticlesTypology $category) : array {
        $returningItemsArray = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Item` WHERE category =   \''.$category->name.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $item) {
            $fUser = new Fuser();
            $seller = $fUser->load("User", "userId", $item["seller"],"Euser");
            $category = EArticlesTypology::getCaseFromString($item["category"]);
            array_push($returningItemsArray, new Eitem($item["itemId"],$item["itemName"],
                                                       $item["itemDescription"],$item["itemPrice"],
                                                       $item["isSold"],$category, $seller));
        }
        return $returningItemsArray;
    }

 
}/*
$temp1 = new Euser("1","marco","matt", "mamatt", "a@a.com", "aaaa", "33333333", "1999-05-17", null , [],[],[]);
$temp = new Eitem("12", "iPhone", "buone condizioni", 32 , false , EArticlesTypology::smartphone, $temp1);
$var = new Fitem();
/* exist test

if($var->exist("Item", $temp) == true) {
    print("true");
    
}else print ("false");

 store with user test 
$var->store("Item", $temp);*/


/*$var = new Fitem();
$item = $var->load("Item", "itemId", "12","Eitem");
print($item->getVenditore()->getBirthDayDate());*/

/*$var = new Fitem();
$array = $var->loadAllCategoryItems(EArticlesTypology::wires);
print_r($array);
*/

?>