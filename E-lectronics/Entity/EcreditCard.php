<?php
include_once "keyValues.php";

class EcreditCard implements keyValues{
	 private string $cardNumber;
     private string $ownerName;
     private string $ownerLastName;
     private string $CCV;
     private string $expirationDate;
     
	

     public function __construct(string $cardNumber, string $ownerName, string $ownerLastName,
	                             string $CCV, string $expirationDate )
                                {
        $this->ownerName = $ownerName;
        $this->ownerLastName = $ownerLastName;
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->CCV = $CCV;

     }

	/**
	 * @return string
	 */
	public function getOwnerName(): string {
		return $this->ownerName;
	}
	
	/**
	 * @param string $ownerName 
	 */
	public function setOwnerName(string $ownerName) {
		$this->ownerName = $ownerName;
	}

	/**
	 * @return string
	 */
	public function getOwnerLastName(): string {
		return $this->ownerLastName;
	}
	
	/**
	 * @param string $ownerLastName 
	 */
	public function setOwnerLastName(string $ownerLastName) {
		$this->ownerLastName = $ownerLastName;
	}

	/**
	 * @return string
	 */
	public function getCardNumber(): string {
		return $this->cardNumber;
	}
	
	/**
	 * @param string $cardNumber 
	*/
	public function setCardNumber(string $cardNumber) {
		$this->cardNumber = $cardNumber;
	}

	/**
	 * @return string
	 */
	public function getExpirationDate(): string {
		return $this->expirationDate;
	}
	
	/**
	 * @param string $expirationDate 
	 */
	public function setExpirationDate(string $expiredDate) {
		$this->expirationDate = $expiredDate;
	}

	/**
	 * @return string
	 */
	public function getCCV(): string {
		return $this->CCV;
	}
	
	/**
	 * @param string $CCV 
	 */
	public function setCCV(string $CCV) {
		$this->CCV = $CCV;
    }

	public function getKeysValues() : array {
		$array = [];
		foreach ($this as $key=>$value){
			$array[$key] = $value;
			}
			return $array;

	}

	public function evaluatesKey() : string {
		
		$returningString = 'cardNumber' . ' = '.$this->getCardNumber().'';
		return $returningString;
	}
	
}


?>