<?php

class CmanageSell
{
    public function getSell($params)
    {
        session_start();
        if ($params == "") {
            if(isset($_SESSION['user'])) 
            {
            $view = new Vsell();
            $view->displaySell();
            }else {
               /* $view = new Vlogin();
                $view->displayLogin(null);*/
                header("Location: http://localhost/~marco/E-lectronics/Login");
                exit;

            }
        } else {
            $view = new V404();
            $view->displayError();


        }

 }

 public function postSell($params) {
    if ($params == "") {
       //user = riprendi lo user tramite sessioni
       $temp1 = new Euser("1","marco","matt", "mamatt", "a@a.com", "aaaa", "33333333", "1999-05-17", null , [],[],[]);
       //print_r($_POST);

       //check if the form has empty values
       $HasNotEmptyFields = true; 
       
       foreach($_POST as $field) {
        if($field =="" || $field == 0.00) {
            $HasNotEmptyFields = false;
            break;
        
        }
    }
       if($HasNotEmptyFields == true){


        print_r($_FILES);
        $fileName = basename($_FILES["image"]["name"]); 
        print($fileName);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $item = new Eitem(0,$_POST['title'],$_POST['description'],$_POST['price'],false,EArticlesTypology::getCaseFromString($_POST['category']),$imgContent,$temp1);
            $fitem = new Fitem();
            $fitem->store("Item",$item);
            
             
            
        }else{ 
           echo('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'); 
        } 

      
       $view = new Vsell();
            $view->displaySell();
       }else{
        echo ("You must fill all the form fields");
        $view = new Vsell();
             $view->displaySell();

       }
    } else {
        $view = new V404();
        $view->displayError();


    }
 }

}


?>