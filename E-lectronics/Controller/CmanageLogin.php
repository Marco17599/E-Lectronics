<?php

class CmanageLogin
{
    public function getLogin($params)
    {
        if ($params == "") {
       session_start();
       //session_unset();
       //session_destroy();
       if(!empty($_SESSION['user'])){
        $view = new Videntified();
        $view->displayIdentified(true, $_SESSION['user']->getUsername());

       }else{
        if(isset($_SESSION['credentials'])){
            $view = new Vlogin();
            $view->displayLogin($_SESSION['credentials']); 
        }else {
            $view = new Vlogin();
            $view->displayLogin(null); 
        }
      
       

       }
        
    }

       
         else {
            $view = new V404();
            $view->displayError();


        }



    }

    public function postLogin($params) {
        session_start();
        if($params == ""){
            if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            //print ($username);
            //print($password);
            $fUser = new Fuser();
            $user = $fUser->loadAuthUser($username,$password);
            $isIdentified = false;
            if ($user){
               $isIdentified = true;
               $_SESSION['user'] = $user;
               /*$view = new Videntified();
               $view->displayIdentified($isIdentified , $_SESSION['user']->getUsername());*/
               if($_POST['username']= "Admin"){
                header("Location: http://localhost/~marco/E-lectronics/Admin");
                exit;
               }
               header("Location: http://localhost/~marco/E-lectronics/");
               exit;
            }else {
               /* $view = new Vlogin();
                $view->displayLogin(null);*/
                header("Location: http://localhost/~marco/E-lectronics/Login");
               exit;

            }
        }elseif(isset($_POST['sign-up'])) {
           
            $HasNotEmptyFields = true; 
       
            foreach($_POST as $field) {
             if($field =="" ) {
                 $HasNotEmptyFields = false;
                 break;
             
             }
            }if($HasNotEmptyFields) {
                //print($_POST['date']);
                $randomAddressId = rand(1,999999);
                $fAddress = new Faddress();
               

               while ($fAddress->exist("Address", "addressId" , $randomAddressId)){
                    $randomAddressId ++;

                }

                $randomUserId = rand(1,9999999);
                $fUser =new Fuser();
                while ($fUser->exist("User", "userId" , $randomUserId)){
                    $randomUserId ++;

                }

                $userAddress = new Eaddress($randomAddressId,$_POST['country'] , $_POST['city'] , $_POST['district'], $_POST['street'], $_POST['cap'], $_POST['number']);
                $tem3 =new Eaddress(0, "a", "b","c","d","e",11);
                $user = new Euser($randomUserId, $_POST['firstname'] , $_POST['lastname'] , $_POST['rusername'] , $_POST['email'], 
                                  $_POST['rpassword'] , $_POST['phone'] , $_POST['date'] , $userAddress , [], [] ,[]);
                $user1 = new Euser("50","manu","matt", "marcolinoino", "b@b.com", "aaabba", "333333233", "1992-05-17", $tem3, [],[],[]);
                
                $fUser->store("User" , $user);
                header("Location: http://localhost/~marco/E-lectronics/");
                exit;

            }else {
               //print('errr');
               if (isset($_SESSION['credentials'])) {
                unset($_SESSION['credentials']);
               }
               $_SESSION['credentials'] = array('firstname' => $_POST['firstname'] ,
                                                'lastname' =>  $_POST['lastname'],
                                                'rusername' => $_POST['rusername'] ,
                                                'email' =>  $_POST['email'],
                                                'rpassword' => $_POST['rpassword'],
                                                'phone' => $_POST['phone'],
                                                'date' =>  $_POST['date'],
                                                'country' => $_POST['country'],
                                                'city' =>  $_POST['city'] ,
                                                'district' =>  $_POST['district'],
                                                'street' => $_POST['street'],
                                                'cap' => $_POST['cap'],
                                                'number' => $_POST['number']  );

              header("Location: http://localhost/~marco/E-lectronics/Login");

            }

        }

        }else {
            $view =new V404();
            $view->displayError();
        }
    }




   
    
}


?>