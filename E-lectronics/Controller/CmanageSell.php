<?php

class CmanageSell
{
    public function getSell($params)
    {
        $session = FsessionUtility::getInstance();
        if ($params == "") {
            if ($session::isLogged()) {
                $view = new Vsell();
                $view->displaySell();
            } else {

                header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");

                exit;

            }
        } else {
            $view = new V404();
            $view->displayError();


        }

    }

    public function postSell($params)
    {
        $session = FsessionUtility::getInstance();

        $user = $session::getSavedElement("user");

        $postHandler = UpostHandler::getInstance();

        
        if (!$postHandler::hasEmptyFields()) {



            $fileName = basename($_FILES["image"]["name"]);

            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);


            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));



                $item = new Eitem(0, $postHandler::returnValueFromField("title"), 
                                  $postHandler::returnValueFromField("description"),
                                  $postHandler::returnValueFromField("price") , false,
                                  EArticlesTypology::getCaseFromString($postHandler::returnValueFromField("category")),
                                  $imgContent, $user);

                $fitem = new Fitem();

                $fitem->store("Item", $item);

                header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Profile");

                exit;


            } else {
                echo ('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.');
            }



        } else {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Sell");

            exit;


        }

    }

}


?>