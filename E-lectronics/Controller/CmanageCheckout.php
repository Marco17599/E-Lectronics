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
                $postHandler = UpostHandler::getInstance();
                if (!$postHandler::hasEmptyFields()) {

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

                    $userAddress = new Eaddress($randomAddressId,
                                                $postHandler::returnValueFromField("country"),
                                                $postHandler::returnValueFromField("city"),
                                                $postHandler::returnValueFromField("district"),
                                                $postHandler::returnValueFromField("street"), 
                                                $postHandler::returnValueFromField("cap"), 
                                                $postHandler::returnValueFromField("number"));

                    $creditCard = new EcreditCard($postHandler::returnValueFromField("cardNumber"), 
                                                  $postHandler::returnValueFromField("ownerName"),
                                                  $postHandler::returnValueFromField("ownerLastName"),
                                                  $postHandler::returnValueFromField("ccv"),
                                                  $postHandler::returnValueFromField("date"));

                    $purchaseOrder = new EpurchaseOrder($randomOrderId, 2, $session::getSavedElement("user"), $creditCard, $userAddress, $items);

                    $fOrder->store("PurchaseOrder", $purchaseOrder);
                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/");

                    exit;

                } else {

                    if ($session::isSetted("order_details")) {
                        $session::unsetSomething("order_details");

                    }
                    $SavingArray = array(
                        'country' => $postHandler::returnValueFromField("country"),
                        'city' =>  $postHandler::returnValueFromField("city"),
                        'district' =>$postHandler::returnValueFromField("district"),
                        'street' =>  $postHandler::returnValueFromField("street"), 
                        'cap' =>  $postHandler::returnValueFromField("cap"), 
                        'number' => $postHandler::returnValueFromField("number"),
                        'cardNumber' => $postHandler::returnValueFromField("cardNumber"),
                        'ownerName' => $postHandler::returnValueFromField("ownerName"),
                        'ownerLastName' => $postHandler::returnValueFromField("ownerLastName"),
                        'ccv' => $postHandler::returnValueFromField("ccv"),
                        'date' => $postHandler::returnValueFromField("date")
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