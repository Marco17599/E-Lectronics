<?php

class CmanageReviews
{
    public function getReviews($params)
    {
        $fReview = new Freview();
        $userReviews = $fReview->loadAllUserReviews($params);
        if(!empty($userReviews)){
            $view = new Vreview();
            $view->displayReviews($userReviews , false);
        }else{
           print("nessuna recensione");

        }
       



    }

    public function postReviews($params) {
         
            session_start();
            if(isset($_SESSION['user'])) {
                //$temp1 = new Euser("1","marco","matt", "mamatt", "a@a.com", "aaaa", "33333333", "1999-05-17", null , [],[],[]);
                //print_r($_POST);
                $fReview = new Freview();
                //check if the form has empty values
                $HasNotEmptyFields = true; 
                
                foreach($_POST as $field) {
                 if($field =="" ) {
                     $HasNotEmptyFields = false;
                     break;
                 
                 }
             }
                if($HasNotEmptyFields == true){
         
         
                // print_r($_FILES);
                 $fUser= new Fuser();
                 $user = $fUser->load("User","userId", $params, "Euser");
                 $reviewer = $fUser->load("User" , "UserId",$_SESSION['user']->getUserId(), "Euser" );
                                 // Insert image content into database 
                     $review= new Ereview(0,$_POST['vote'], $_POST['textOfReview'], $reviewer, $user);
                     //$fReview = new Freview();
                     $fReview->store("Review",$review);
                     
                     header("Location: http://localhost/~marco/E-lectronics/Reviews/$params#");
                     exit;
                     
                 }else{
                     //echo ("You must fill all the form fields");
                     header("Location: http://localhost/~marco/E-lectronics/Reviews/$params#review");
                     exit ;
                }
             

            }else {
                header("Location: http://localhost/~marco/E-lectronics/Login");
                exit;
            }

           //user = riprendi lo user tramite sessioni
          
     }
    
    }
    
    
    ?>

   
    



