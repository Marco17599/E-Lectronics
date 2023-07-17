<?php

class CmanageCheckout
{
    public function getCheckout($params)
    {
        $session = FsessionUtility::getInstance();
        if ($params == "") {
            if ($session::isLogged()) {

                if ($session::isSetted("cart")) {
                    $cart = unserialize($session::getSavedElement("cart"));
                }
                if ($session::isSetted("order_details")) {
                    $view = new Vcheckout();
                    $view->displayCheckout($cart, $session::getSavedElement("order_details"), true);
                } else {
                    $view = new Vcheckout();
                    $view->displayCheckout($cart, null, true);
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

    public function postCheckout($params)
    {
        $session = FsessionUtility::getInstance();
        if ($session::isSetted("cart") && $session::isLogged()) {
            if (isset($_POST["order_details"])) {
                $HasNotEmptyFields = true;

                foreach ($_POST as $field) {
                    if ($field == "") {
                        $HasNotEmptyFields = false;
                        break;

                    }
                }
                if ($HasNotEmptyFields) {

                    $randomAddressId = rand(1, 999999);
                    $fAddress = new Faddress();


                    while ($fAddress->exist("Address", "addressId", $randomAddressId)) {
                        $randomAddressId++;

                    }

                    $randomOrderId = rand(1, 9999999);
                    $fOrder = new FpurchaseOrder();
                    while ($fOrder->exist("PurchaseOrder", "purchaseOrderId", $randomOrderId)) {
                        $randomOrderId++;

                    }


                    $items = unserialize($session::getSavedElement("cart"));

                    $userAddress = new Eaddress($randomAddressId, $_POST['country'], $_POST['city'], $_POST['district'], $_POST['street'], $_POST['cap'], $_POST['number']);

                    $creditCard = new EcreditCard($_POST['cardNumber'], $_POST['ownerName'], $_POST['ownerLastName'], $_POST['ccv'], $_POST['date']);

                    $purchaseOrder = new EpurchaseOrder($randomOrderId, 2, $session::getSavedElement("user"), $creditCard, $userAddress, $items);

                    $fOrder->store("PurchaseOrder", $purchaseOrder);
                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/");

                    exit;

                } else {

                    if ($session::isSetted("order_details")) {
                        $session::unsetSomething("order_details");

                    }
                    $SavingArray = array(
                        'country' => $_POST['country'],
                        'city' => $_POST['city'],
                        'district' => $_POST['district'],
                        'street' => $_POST['street'],
                        'cap' => $_POST['cap'],
                        'number' => $_POST['number'],
                        'cardNumber' => $_POST['cardNumber'],
                        'ownerName' => $_POST['ownerName'],
                        'ownerLastName' => $_POST['ownerLastName'],
                        'ccv' => $_POST['ccv'],
                        'date' => $_POST['date']
                    );

                    $session::saveSomething($SavingArray, "order_details");
                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Checkout");
                    exit;


                }
            }
        }
    }
}



?>