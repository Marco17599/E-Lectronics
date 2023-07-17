<?php

class CmanageReviews
{
    public function getReviews($params)
    {
        $session = FsessionUtility::getInstance();

        $isIdentified = false;
        if ($session::isLogged()) {
            $isIdentified = true;
        }
        $fReview = new Freview();
        $userReviews = $fReview->loadAllUserReviews($params);
        if (isset($userReviews)) {
            $view = new Vreview();
            $view->displayReviews($userReviews, $isIdentified);
        } else {

            $view = new Vreview();
            $view->displayReviews([], $isIdentified);

        }




    }

    public function postReviews($params)
    {

        $session = FsessionUtility::getInstance();
        if ($session::isLogged()) {

            $fReview = new Freview();

            $HasNotEmptyFields = true;

            foreach ($_POST as $field) {
                if ($field == "") {
                    $HasNotEmptyFields = false;
                    break;

                }
            }
            if ($HasNotEmptyFields == true) {



                $fUser = new Fuser();
                $user = $fUser->load("User", "userId", $params, "Euser");
                $reviewer = $fUser->load("User", "UserId", $session::getSavedElement("user")->getUserId(), "Euser");

                $review = new Ereview(0, $_POST['vote'], $_POST['textOfReview'], $reviewer, $user);

                $fReview->store("Review", $review);
                header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Reviews/$params#");

                exit;

            } else {

                header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Reviews/$params#review");

                exit;
            }


        } else {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/Login");
            
            exit;
        }



    }

}


?>