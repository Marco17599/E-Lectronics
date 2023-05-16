<?php

class Ereview {
    private Euser $reviewer;
    private Euser $reviewed;
    private int $vote;
    private string $text;

    public function __construct(Euser $reviewer, Euser $reviewed, int $vote, string $text) {
        $this->reviewer = $reviewer;
        $this->reviewed = $reviewed;
        $this->vote = $vote;
        $this->text = $text;

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
    public function getText(): string {
        return $this->text;
    }

}









?>