<?php


class Fuser extends FcommunicationDb {
public function store(string $table ,  $user) {
    //$pdo = FconnectionDb::getInstance()->getPdo();
    $fAddress = new Faddress();
    if (!$fAddress->exist("Address","addressId", $user->getUserAddress()->getAddressId())){
        $fAddress->store("Address", $user->getUserAddress());
    }
    parent::store($table, $user);
   
    $pdo = FconnectionDb::getInstance()->getPdo();
    $query='UPDATE `Address` SET `userId` = \''.$user->getUserId().'\' WHERE '.$user->getUserAddress()->evaluatesKey().'';
    $pdo->prepare($query)->execute();
    print($query);
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

public function loadAuthUser(string $username, string $password): object|false {
    $fAddress = new Faddress();
    $pdo = FconnectionDb::getInstance()->getPdo();
    $query='SELECT * FROM `User` WHERE `username` = \''.$username.'\'  AND `userPassword` = \''.$password.'\'' ;
    print ($query);
    $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
    if(!empty($objectAttributes)){
        $returningUser = new Euser($objectAttributes["userId"],$objectAttributes["firstName"],
                                   $objectAttributes["lastName"],$objectAttributes["username"],
                                   $objectAttributes["email"],$objectAttributes["userPassword"],
                                   $objectAttributes["phoneNumber"], $objectAttributes["birthDayDate"],$fAddress->loadUserAddress($objectAttributes["userId"]),[],[],[]
                                );
    return $returningUser;                           
                            }else return false;
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
