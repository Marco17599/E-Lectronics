<?php

class CmanageProfile
{
    public function getProfile($params)
    {
        if ($params == "") {
       session_start();
       if(!empty($_SESSION['user'])){
        $view = new Vprofile();
        $view->displayProfile( $_SESSION['user']->getUsername());

       }else{
      
        $view = new V404();
       
     
           
            $view->displayError(); 

       }
        
    }

       
         else {
            $view = new V404();
            $view->displayError();


        }



    }

    



   
    
}


?>