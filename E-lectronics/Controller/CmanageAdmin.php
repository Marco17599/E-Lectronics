<?php
class CmanageAdmin
{
    public function getAdmin($params)
    {
        $session = FsessionUtility::getInstance();
        if($session::isLogged() && $session::getSavedElement("user")->getUsername() == "Admin"){
        $view = new Vadmin();
        $fItem = new Fitem();
        if($params == "") {
        $items = $fItem->loadAllUnsoldItems();
        
        $view->displayAdmin($items); 
        }else{
           
            if(str_contains($params , "item")) {
                $paramsArray = explode('=', $params);
            if($fItem->exist("Item","itemId", $paramsArray[1])){
                $item = $fItem->load("Item","itemId", $paramsArray[1], "Eitem");
                $view->displayItemAdmin($item);
            }
        }
            elseif(str_contains($params , "seller"))  {

                $fReview = new Freview();
                $paramsArray = explode('=', $params);
                $userReviews = $fReview->loadAllUserReviews($paramsArray[1]);
                if(!empty($userReviews)){
                   $view->displaySellerAdmin($userReviews);
                }else{
                    $view->displaySellerAdmin([]);
        
                }
               
            }
        
        }
    }else {
        $view = new V404();
        $view->displayError();

    }
       
    }


    public function postAdmin($params) {
        $postHandler = UpostHandler::getInstance();
        if ($postHandler::isPosted("itemId")) {
            $fItem = new Fitem();
            $deletingItem =  $fItem->load("Item" , "itemId" , $postHandler::returnValueFromField("itemId"), "Eitem");
            $fItem->delete("Item" , $deletingItem);
            header( "Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Admin"  );
           
            exit;

        }elseif($postHandler::isPosted("reviewId")) {
            $fReview = new Freview();
            $deletingReview =  $fReview->load("Review" , "reviewId" , $postHandler::returnValueFromField("reviewId"), "Ereview");
            $fReview->delete("Review" , $deletingReview);
           $index=  $deletingReview->getReviewed()->getUserId();
           header( "Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Admin/seller=$index"  );
          
            exit;
        }
    }
}


?>