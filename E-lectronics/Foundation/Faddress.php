<?php



class Faddress extends FcommunicationDb {
    function loadUserAddress(string $userId) :object|null {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM `Address` WHERE `userId` =  \''.$userId.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
        $returningObject = $pdo->query($query)->fetchObject("Eaddress",$objectAttributes);
        return ($returningObject !=false) ?  $returningObject : null;
    
    
    }
}
/*
//prova store

$temp =new Eaddress(0, "a", "b","c","d","e",2);
$var = new Faddress();
$var->store("Address",$temp);/*
//prova load
$a = $var->loadUserAddress("1");
print($a->getHouseNumber());
*/

//prova load UserAddress
/*
$var = new Faddress();
$a = $var->loadUserAddress("2");*/




?>