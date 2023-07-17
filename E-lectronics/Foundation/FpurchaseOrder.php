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
            $query='UPDATE `Item` SET `isSold` = true WHERE '.$item->evaluatesKey().'';
            $pdo->prepare($query)->execute();
        }
        
    }
}







?>