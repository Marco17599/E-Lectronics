<?php

class CmanageAbout
{
    public function getAbout($params)
    {
        if ($params == "") {
            $view = new Vabout();
            $view->displayAbout();
        } else {
            $view = new V404();
            $view->displayError();


        }



    }




   
    
}


?>