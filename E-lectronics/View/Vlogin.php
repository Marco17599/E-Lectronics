<?php
class Vlogin {
    public function displayLogin(array|null $failedCredentials) {
        $smarty = SmartyConfig::initialize();
       if($failedCredentials != null) {
        $smarty->assign('failedCredentials' , $failedCredentials);
       }
        $smarty->display('login.tpl');

        

    }
}
?>