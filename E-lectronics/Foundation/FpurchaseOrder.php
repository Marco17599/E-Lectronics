<?php




class FpurchaseOrder extends FcommunicationDb {
    public function store(string $table,  $order) {
        $fCreditCard = new FcreditCard();
        if(!$fCreditCard->exist("CreditCard", "cardNumber",  $order->getPaymentMethod()->getCardNumber() )) {
            $fCreditCard->store("CreditCard", $order->getPaymentMethod());
        }
        $fAddress = new Faddress();
        if(!$fAddress->exist("Address", "addressId",  $order->getShippingAddress()->getAddressId())) {
            $fAddress->store("Address", $order->getShippingAddress());
        }
        parent::store($table, $order);
        foreach ($order->getItems() as $item) {
            $pdo = FconnectionDb::getInstance()->getPdo();
            $query='UPDATE `Item` SET `purchaseOrderId` = \''.$order->getPurchaseOrderId().'\' WHERE '.$item->evaluatesKey().'';
            $pdo->prepare($query)->execute();
            $query='UPDATE `Item` SET `buyer` = \''.$order->getBuyer()->getUserId().'\' WHERE '.$item->evaluatesKey().'';
            $pdo->prepare($query)->execute();
        }
        
    }
}

//prova store
/*$temp2 = new Euser("8","manu","matt", "manutt", "b@b.com", "aaabba", "333333233", "1999-05-17", null , [],[],[]);
$temp4 = new Eitem("12", "iPhone", "buone condizioni", 32 , false , EArticlesTypology::smartphone,$temp2);
$items =[];
array_push($items, $temp4);
$temp1 =new Eaddress(18, "a", "b","c","d","e",11);
//$temp2 = new Euser("9","manu","matt", "manutt", "b@b.com", "aaabba", "333333233", "1999-05-17", null , [],[],[]);
$temp3 = new EcreditCard("1111111111111", "Marco", "Maa", "123", "2025-12-12");
$temp = new EpurchaseOrder(19,231.12,$temp2, $temp3, $temp1 , $items );
$var = new FpurchaseOrder();
$var->store("PurchaseOrder",$temp);
*/





?>