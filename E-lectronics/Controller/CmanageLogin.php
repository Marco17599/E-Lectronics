<?php

class CmanageLogin
{
    public function getLogin($params)
    {
        if ($params == "") {
            $session = FsessionUtility::getInstance();
            if ($session::isLogged()) {
                $view = new Videntified();
                $view->displayIdentified(true, $session::getSavedElement("user")->getUsername());

            } else {
                if ($session::isSetted("credentials")) {
                    $view = new Vlogin();
                    $view->displayLogin($session::getSavedElement("credentials"));
                } else {
                    $view = new Vlogin();
                    $view->displayLogin(null);
                }



            }

        } else {
            $view = new V404();
            $view->displayError();


        }



    }

    public function postLogin($params)
    {

        if ($params == "") {
            $session = FsessionUtility::getInstance();
            $UpostHandler = UpostHandler::getInstance();
            $key_enc = '0274'; //chiave per la crittografia
            $met_enc = 'aes256'; //metodo per la crittografia: aes128, aes192, aes256, blowfish, cast-cbc
            $iv = 'ma1R0ikDD56_hG12'; //una stringa random con 16 caratteri
           
            if ($UpostHandler::isPosted("login")) {
                $username = $UpostHandler::returnValueFromField("username");
                $password = $UpostHandler::returnValueFromField("password");
                $pass_enc = openssl_encrypt($password, $met_enc, $key_enc, 0, $iv);
               
                $fUser = new Fuser();
                $user = $fUser->loadAuthUser($username, $pass_enc);
               
                if ($user) {
                   

                    $session::saveSomething($user, "user");

                    if ($username == "Admin") {
                        header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Admin");

                        exit;
                    } else {
                        header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/");

                        exit;
                    }
                } else {

                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");

                    exit;

                }
            } elseif ($UpostHandler::isPosted("sign-up")) {

                if(!$UpostHandler::hasEmptyFields())

                {

                    $randomAddressId = rand(1, 999999);
                    $fAddress = new Faddress();


                    while ($fAddress->exist("Address", "addressId", $randomAddressId)) {
                        $randomAddressId++;

                    }

                    $randomUserId = rand(1, 9999999);
                    $fUser = new Fuser();
                    while ($fUser->exist("User", "userId", $randomUserId)) {
                        $randomUserId++;

                    }

                    $userAddress = new Eaddress($randomAddressId, $UpostHandler::returnValueFromField("country"),
                                                $UpostHandler::returnValueFromField("city"),
                                                $UpostHandler::returnValueFromField("district"),
                                                $UpostHandler::returnValueFromField("street"), 
                                                $UpostHandler::returnValueFromField("cap"), 
                                                $UpostHandler::returnValueFromField("number"));

                  

                    $user = new Euser($randomUserId, $UpostHandler::returnValueFromField("firstname"),
                                      $UpostHandler::returnValueFromField("lastname"),
                                      $UpostHandler::returnValueFromField("rusername"), 
                                      $UpostHandler::returnValueFromField("email"),
                                      openssl_encrypt($UpostHandler::returnValueFromField("rpassword"), $met_enc, $key_enc, 0, $iv), 
                                      $UpostHandler::returnValueFromField("phone"), 
                                      $UpostHandler::returnValueFromField("date"),
                                      $userAddress,[],[],[]);
                    
                   

                    $fUser->store("User", $user);
                    $session::saveSomething($user, "user");

                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/");

                    exit;

                } else {
                    if ($session::isSetted("credentials")) {
                        $session::unsetSomething("credentials");

                    }
                    $savingArray = array(
                        'firstname' => $UpostHandler::returnValueFromField("firstname"),
                        'lastname' => $UpostHandler::returnValueFromField("lastname"),
                        'rusername' =>  $UpostHandler::returnValueFromField("rusername"),
                        'email' => $UpostHandler::returnValueFromField("email"),
                        'rpassword' => $UpostHandler::returnValueFromField("rpassword"), 
                        'phone' => $UpostHandler::returnValueFromField("phone"), 
                        'date' =>   $UpostHandler::returnValueFromField("date"),
                        'country' => $UpostHandler::returnValueFromField("country"),
                        'city' =>  $UpostHandler::returnValueFromField("city"),
                        'district' =>$UpostHandler::returnValueFromField("district"),
                        'street' =>  $UpostHandler::returnValueFromField("street"), 
                        'cap' =>  $UpostHandler::returnValueFromField("cap"), 
                        'number' => $UpostHandler::returnValueFromField("number")
                    );
                    $session::saveSomething($savingArray, "credentials");

                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");

                    exit;
                }

            }

        } else {
            $view = new V404();
            $view->displayError();
        }
    }






}


?>