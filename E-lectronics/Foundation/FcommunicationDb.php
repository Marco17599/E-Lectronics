<?php


//require_once "../config/autoload.php";


abstract class FcommunicationDb {
   
   function store(string $table, EkeyValues $object) {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $fields =[];
        $values =[];
        foreach($object->getKeysValues() as $key => $value) {
            array_push($fields, $key);
            array_push($values, $value);
        }
        $sql= "INSERT INTO $table (" . $this->arrayToFieldsForSqlQueries($fields) . ") VALUES 
        (" . $this->arrayToValuesForSqlQueries($values) . ")"; 
       // print($sql);
        $pdo->prepare($sql)->execute();
      //  print($sql);
        
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

    function update (string $table, EkeyValues $object ) {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='UPDATE `'.$table.'` SET '.$this->setConditonForSqlUpdate($object).' WHERE '.$object->evaluatesKey().'';
        $pdo->prepare($query)->execute();
    }

    private function setConditonForSqlUpdate(EkeyValues $object) : string {
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
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM`'.$table.'` WHERE '.$key.' =  \''.$keyValue.'\'';
        $objectAttributes  = (array) $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC)[0];
        $returningObject = $pdo->query($query)->fetchObject($nameObject,$objectAttributes);
        return ($returningObject !=false) ?  $returningObject : null;
    }

     function exist(string $table, string $key, string $keyValue) : bool {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='SELECT * FROM`'.$table.'` WHERE '.$key.' = \''.$keyValue.'\'';
        $pdo->prepare($query)->execute();
        return  ($pdo->query($query)->rowCount() > 0) ? true : false;
      
       
    }

     function delete(string $table, EkeyValues $object) {
        $pdo = FconnectionDb::getInstance()->getPdo();
        $query='DELETE FROM`'.$table.'` WHERE '.$object->evaluatesKey().'';
        $pdo->prepare($query)->execute();
    }
    
   
}

/*$temp = new Eitem("0", "iPhone", "buone condizioni", 32, true , EArticlesTypology::smartphone, null);
$var = new FcommunicationDb();
$var->store("Item", $temp);*/
/*$temp_1 = $var->load("Item", "itemId", "2", "Eitem");
print($temp_1->getItemPrice());*/





 





?>