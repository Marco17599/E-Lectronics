<?php


class Fuser extends FcommunicationDb {
public function store(string $table ,  $user) {
   
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








?>
