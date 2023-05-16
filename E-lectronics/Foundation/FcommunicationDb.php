<?php
require_once "../Entity/keyValues.php";
require_once "../Entity/Eaddress.php";
require_once "FconnectionDb.php";

class FcommunicationDb {
   
    function store(string $table, keyValues $object) {
        $pdo = FConnectionDB::getInstance()->getPdo();
        $fields =[];
        $values =[];
        foreach($object->getKeysValues() as $key => $value) {
            array_push($fields, $key);
            array_push($values, $value);
        }
        $sql= "INSERT INTO $table (" . $this->arrayToFieldsForSqlQueries($fields) . ") VALUES 
        (" . $this->arrayToValuesForSqlQueries($values) . ")"; 
        print($sql);
        $pdo->prepare($sql)->execute();
        
    }

    private function arrayToFieldsForSqlQueries(array $array) {
        $returningString ="";
        foreach($array as $element) {
            $returningString .= (array_search( $element, $array)==0) ? $element : ", ". $element;
        }
        return $returningString;
    }
    
    private function arrayToValuesForSqlQueries(array $array) {
        $returningString ="";
        foreach($array as $element) {
             $returningString .= (array_search( $element, $array)==0) ? '\''.$element.'\'' : ', \''.$element.'\'';
           
        }
        return $returningString;
    }

   protected function update (string $table, keyValues $object ) {
        $pdo = FConnectionDB::getInstance()->getPdo();
        $query='UPDATE `'.$table.'` SET '.$this->setConditonForSqlUpdate($object).' WHERE '.$object->evaluatesKey().'';
        print($query);
        $pdo->prepare($query)->execute();
    }

    private function setConditonForSqlUpdate(keyValues $object) : string {
        $returningString="";
        $counter = 0;
        foreach ($object->getKeysValues() as $key => $value) {
            if($counter == 0){
                $returningString .='`'.$key.'` = \''.$value.'\'';
                $counter++;
            }else{
                $returningString.=', `'.$key.'` = \''.$value.'\'';
            }
         }
         return $returningString;
    }

    function load(string $table, string $key, string $keyValue, string $nameObject):object|null{
        $pdo = FConnectionDB::getInstance()->getPdo();
        $query='SELECT * FROM`'.$table.'` WHERE '.$key.' =  \''.$keyValue.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
        $returningObject = $pdo->query($query)->fetchObject($nameObject,$objectAttributes);
        return ($returningObject !=false) ?  $returningObject : null;
    }

    function exist(string $table, string $key, string $keyValue) : bool {
        $pdo = FConnectionDB::getInstance()->getPdo();
        $query='SELECT * FROM`'.$table.'` WHERE '.$key.' =  \''.$keyValue.'\'';
        return  ($pdo->query($query)->rowCount() > 0) ? true : false;
    }

    function delete(string $table, keyValues $object) {
        $pdo = FConnectionDB::getInstance()->getPdo();
        $query='DELETE FROM`'.$table.'` WHERE '.$object->evaluatesKey().'';
        $pdo->prepare($query)->execute();
    }
    
   
}
$temp = new Eaddress(0,"Italy", "Rieti" , "RI", "02100","via boh", 3);
$var = new FcommunicationDb();
$var->store("Address", $temp);
$temp_1 = $var->load("Address", "addressId", "7", "Eaddress");
print($temp_1->getAddressId());

 





?>