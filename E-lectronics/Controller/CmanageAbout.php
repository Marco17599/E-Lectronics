<?php

class CmanageAbout
{
    public function getAbout($params)
    {
        $session =  FsessionUtility::getInstance();
        if ($params == "") {
            $view = new Vabout();
            if($session::isLogged()){
           
            $view->displayAbout(true);
            }else{
                $view->displayAbout(false);
            }
        } else {
            $view = new V404();
            $view->displayError();


        }



    }




   
    
}


?>