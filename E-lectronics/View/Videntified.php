<?php
class Videntified {
    public function displayIdentified(bool $isIdentified , string|null $username) {
        $smarty = SmartyConfig::initialize();
        $smarty->assign('isIdentified', $isIdentified);
        if($isIdentified){
            
            $smarty->assign('username', $username);
      
        }
        $smarty->display('identified.tpl');

        

    }
}
?>