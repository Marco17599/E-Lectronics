<?php
include_once "keyValues.php";
class Ereview implements keyValues{
    private int $reviewId;
    private int $vote;
    private string $textOfReview;
    private Euser|null $reviewer;
    private Euser|null $reviewed;
   
    

    public function __construct(int $reviewId, int $vote, string $textOfReview, Euser|null $reviewer, Euser|null $reviewed ) {
        $this->reviewId = $reviewId;
        $this->reviewer = $reviewer;
        $this->reviewed = $reviewed;
        $this->vote = $vote;
        $this->textOfReview = $textOfReview;
        

    }

    public function getReviewId(): int {
		return $this->reviewId;
	}
    public function getReviewer(): Euser {
        return $this->reviewer;
    }
    public function getReviewed(): Euser {
        return $this->reviewed;
    }
    public function getVote(): int{
        return $this->vote;
    }
    public function getTextOfReview(): string {
        return $this->textOfReview;
    }

	


public function getKeysValues() : array {
    $array = [];
    foreach ($this as $key => $value){
        if(is_object($value)){
            $value = $value->getUserId();
        }
        $array[$key] = $value;
        
        }
        return $array;
        
        

}



public function evaluatesKey() : string {
    
    $returningString = 'reviewId' . ' = '.$this->getReviewId().'';
    return $returningString;
}

}

/*$a = new Ereview(1,2,"a",null, null);
print_r( $a->getKeysValues());
*/





?>