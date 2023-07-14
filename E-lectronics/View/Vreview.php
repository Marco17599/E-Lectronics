<?php

class Vreview {
    public function displayReviews(array $reviews, bool $isIdentified) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('reviews' , $reviews);
        $smarty->assign('isIdentified', $isIdentified);
        $smarty->display('reviews.tpl');

    }
}
?>