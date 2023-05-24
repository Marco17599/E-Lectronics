<?php

require_once "FcommunicationDb.php";
require_once "../config/autoload.php";

class Fuser extends FcommunicationDb {
public function store(string $table  , keyValues $user) {
    parent::store($table, $user);
    $fAddress = new Faddress();
    if (!$fAddress->exist("Address", $user->getUserAddress())){
        $fAddress->store("Address", $user->getUserAddress());
    }$pdo = FConnectionDB::getInstance()->getPdo();
    $query='UPDATE `Address` SET `userId` = \''.$user->getUserId().'\' WHERE '.$user->getUserAddress()->evaluatesKey().'';
    $pdo->prepare($query)->execute();
}
public function load( string $table, string $key, string $keyValue, string $nameObject):object|null{
    $fAddress = new Faddress();
    $userAddress = $fAddress->loadUserAddress($keyValue);
    $pdo = FconnectionDb::getInstance()->getPdo();
    $query='SELECT * FROM `User` WHERE `userId` =  \''.$keyValue.'\'';
    $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
        $returningUser = new Euser($objectAttributes["userId"],$objectAttributes["firstName"],
                                   $objectAttributes["lastName"],$objectAttributes["username"],
                                   $objectAttributes["email"],$objectAttributes["userPassword"],
                                   $objectAttributes["phoneNumber"], $objectAttributes["birthDayDate"],$userAddress,[],[],[]
                                );
    return $returningUser;                           
        
    
    
    

}
}



//prova store User
/*$tem3 =new Eaddress(12, "a", "b","c","d","e",11);
$temp = new Euser("1","marco","matt", "mamatt", "a@a.com", "aaaa", "33333333", "1999-05-17", null , [],[],[]);
$temp1 = new Euser("9","manu","matt", "manutt", "b@b.com", "aaabba", "333333233", "1992-05-17", $tem3, [],[],[]);
$var = new Fuser();
$var->store( "User", $temp1);*/

/*$var = new Fuser();
$usr = $var->load("User","userId","5","Euser" );
print($usr->getUserId());*/






?>
