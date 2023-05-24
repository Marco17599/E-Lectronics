<?php

require_once "FcommunicationDb.php";
require_once "../config/autoload.php";

class Freview extends FcommunicationDb {

    public function load(string $table, string $key, string $keyValue, string $nameObject) :object|null {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM`'.$table.'` WHERE '.$key.' =  \''.$keyValue.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
        $fUser = new Fuser();
        $reviewer = $fUser->load("User", "userId", $objectAttributes["reviewer"], "Euser");
        $reviewed = $fUser->load("User", "userId", $objectAttributes["reviewed"], "Euser");
        $returningReview = new Ereview($objectAttributes["reviewId"], $objectAttributes["vote"], 
                                       $objectAttributes["textOfReview"], $reviewer, $reviewed);
        return  $returningReview;
    
    }

    public function loadAllUserReviews(string $reviewedId) :array {
        $returningReviews = [];
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Review` WHERE reviewed =  \''.$reviewedId.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach($objectAttributes as $review) {
            $fUser = new Fuser();
            $reviewer = $fUser->load("User", "userId", $review["reviewer"], "Euser");
            $reviewed = $fUser->load("User", "userId", $review["reviewed"], "Euser");
            array_push($returningReviews, new Ereview($review["reviewId"], $review["vote"], 
                                                      $review["textOfReview"], $reviewer, $reviewed));
        }return $returningReviews;

    }
    
}
//prova store 
/*
$temp1 = new Euser("1","marco","matt", "mamatt", "a@a.com", "aaaa", "33333333", "1999-05-17", null , [],[],[]);
$temp2 = new Euser("2","manu","matt", "manutt", "b@b.com", "aaabba", "333333233", "1992-05-17", null , [],[],[]);
$temp = new Ereview("0",2,"bello bello",$temp1, $temp2);
$var = new Freview();
$var->store("Review", $temp);*/

//prova load
/*
$var = new Freview();
$review = $var->load("Review", "reviewId", "1", "Ereview");
print($review->getReviewed()->getFirstName());
*/


/*$var = new Freview();
$array = $var->loadAllUserReviews("2");
print_r($array);*/

?>