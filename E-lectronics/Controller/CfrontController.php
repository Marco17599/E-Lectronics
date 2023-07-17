<?php

class CfrontController
{
    private static $instance;
    private $resource;
    private $params;
    private function __construct(string $url)
    {
        $urlAsArray = explode('/', $url);
        for ($i = 0; $i <= array_search("E-lectronics", $urlAsArray); $i++) {
            array_shift($urlAsArray);
        }
        $this->resource = $urlAsArray[1];
        $this->params = $urlAsArray[2];
       
    }
    public static function getInstance(string $url): CfrontController
    {
        if (self::$instance == null) {
            self::$instance = new CfrontController($url);
        }
        return self::$instance;
        

    }

    public function run() {
        if($this->resource =="" || $this->resource =="Home"  ){
         $real_controller = new CmanageItems();
         $request_method = $_SERVER['REQUEST_METHOD'];
        $request_method = strtolower($request_method);
         if($request_method=="get") {
         return $real_controller->getItemsForHomePage();
         }else {
            return $real_controller->postItems("");
         }
        }
        $controller = "Cmanage" . $this->resource;
        $request_method = $_SERVER['REQUEST_METHOD'];
        $request_method = strtolower($request_method);
       
        $method = $request_method . $this->resource;
        if (class_exists($controller, true)) {
            if (method_exists($controller, $method)) {
                $real_controller = new $controller();
            } else {
               
                $view= new V404();
                $view->displayError();
               
            }
        } else {
            $view= new V404();
                $view->displayError();
           
        }
        return $real_controller->$method($this->params); 
        }

      
    }
    


 


?>