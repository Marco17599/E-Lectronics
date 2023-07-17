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
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                //print ($username);
                //print($password);
                $fUser = new Fuser();
                $user = $fUser->loadAuthUser($username, $password);
                $isIdentified = false;
                if ($user) {
                    $isIdentified = true;

                    $session::saveSomething($user, "user");

                    if ($_POST['username'] == "Admin") {
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
            } elseif (isset($_POST['sign-up'])) {

                $HasNotEmptyFields = true;

                foreach ($_POST as $field) {
                    if ($field == "") {
                        $HasNotEmptyFields = false;
                        break;

                    }
                }
                if ($HasNotEmptyFields) {

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

                    $userAddress = new Eaddress($randomAddressId, $_POST['country'], $_POST['city'], $_POST['district'], $_POST['street'], $_POST['cap'], $_POST['number']);
                    $tem3 = new Eaddress(0, "a", "b", "c", "d", "e", 11);
                    $user = new Euser(
                        $randomUserId, $_POST['firstname'], $_POST['lastname'], $_POST['rusername'], $_POST['email'],
                        $_POST['rpassword'], $_POST['phone'], $_POST['date'],
                        $userAddress,
                        [],
                        [],
                        []
                    );
                    $user1 = new Euser("50", "manu", "matt", "marcolinoino", "b@b.com", "aaabba", "333333233", "1992-05-17", $tem3, [], [], []);

                    $fUser->store("User", $user);
                    $session::saveSomething($user, "user");

                    header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/");

                    exit;

                } else {
                    if ($session::isSetted("credentials")) {
                        $session::unsetSomething("credentials");

                    }
                    $savingArray = array(
                        'firstname' => $_POST['firstname'],
                        'lastname' => $_POST['lastname'],
                        'rusername' => $_POST['rusername'],
                        'email' => $_POST['email'],
                        'rpassword' => $_POST['rpassword'],
                        'phone' => $_POST['phone'],
                        'date' => $_POST['date'],
                        'country' => $_POST['country'],
                        'city' => $_POST['city'],
                        'district' => $_POST['district'],
                        'street' => $_POST['street'],
                        'cap' => $_POST['cap'],
                        'number' => $_POST['number']
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