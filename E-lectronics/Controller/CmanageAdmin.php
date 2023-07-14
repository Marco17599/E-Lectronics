<?php
class CmanageAdmin
{
    public function getAdmin($params)
    {
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
                   print("nessuna recensione");
        
                }
               
            }
               
        }
        
       
    }


    public function postAdmin($params) {
        if (isset($_POST['itemId'])) {
            $fItem = new Fitem();
            $deletingItem =  $fItem->load("Item" , "itemId" , $_POST['itemId'], "Eitem");
            $fItem->delete("Item" , $deletingItem);
            header("Location: http://localhost/~marco/E-lectronics/Admin");
             
            exit;

        }elseif(isset($_POST['reviewId'])) {
            $fReview = new Freview();
            $deletingReview =  $fReview->load("Review" , "reviewId" , $_POST['reviewId'], "Ereview");
            $fReview->delete("Review" , $deletingReview);
           $index=  $deletingReview->getReviewed()->getUserId();
            header("Location: http://localhost/~marco/E-lectronics/Admin/seller=$index");
             
            exit;
        }
    }
}


?>