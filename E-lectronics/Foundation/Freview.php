<?php



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

?>