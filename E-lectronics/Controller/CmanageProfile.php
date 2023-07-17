<?php

class CmanageProfile
{
    public function getProfile($params)
    {
        if ($params == "") {
            $session = FsessionUtility::getInstance();
            if ($session::isLogged()) {

                $fItem = new Fitem();
                $buyedItems = $fItem->loadAllBuyedByUserItems($session::getSavedElement("user"));

                $soldItems = $fItem->loadAllSoldByUserItems($session::getSavedElement("user"));

                $sellingItems = $fItem->loadAllSellingByUserItems($session::getSavedElement("user"));

                $view = new Vprofile();
                $view->displayProfile($session::getSavedElement("user")->getUsername(), $buyedItems, $soldItems, $sellingItems);

            } else {
                header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");
                exit;


            }









        } else {
            $view = new V404();



            $view->displayError();
        }
    }

    public function postProfile()
    {

        if (isset($_POST['logout'])) {
            $session = FsessionUtility::getInstance();
            $session::logout();

            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/");

            exit;

        }







    }
}


?>