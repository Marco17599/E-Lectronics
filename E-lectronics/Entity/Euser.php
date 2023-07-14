<?php


class Euser implements EkeyValues {
    private string $userId;
    private string $firstName;
    private string $lastName;
    private string $username;
    private string $email;
    private string $userPassword;
    private string $phoneNumber;
    private string $birthDayDate;
    private Eaddress|null $userAddress;
    private  array $userReviews;
    private  array $userAcquisitions;
    private  array $userSales;
    

 
	
    public function __construct(string $userId, string $firstName, string $lastName, string $username, string $email,
                                string $userPassword, string $phoneNumber, string $birthDayDate,
                                Eaddress|null $userAddress, array $userReviews, array $userAcquisitions,
                                array $userSales)
                            {

        $this->userId = $userId;                                
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->email= $email;
        $this->userPassword = $userPassword;
        $this->phoneNumber = $phoneNumber;
        $this->birthDayDate = $birthDayDate;
        $this->userAddress= $userAddress;
        $this->userReviews = $userReviews;
        $this->userAcquisitions = $userAcquisitions;
        $this->userSales = $userSales;
    

    }

    

	

	

	/**
	 * @return 
	 */
	public function getUserId(): string {
		return $this->userId;
	}

	/**
	 * @return 
	 */
	public function getFirstName(): string {
		return $this->firstName;
	}

	/**
	 * @return 
	 */
	public function getLastName(): string {
		return $this->lastName;
	}

	/**
	 * @return 
	 */
	public function getUsername(): string {
		return $this->username;
	}

	/**
	 * @return 
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @return 
	 */
	public function getUserPassword(): string {
		return $this->userPassword;
	}

	/**
	 * @return 
	 */
	public function getPhoneNumber(): string {
		return $this->phoneNumber;
	}

	/**
	 * @return 
	 */
	public function getBirthDayDate(): string {
		return $this->birthDayDate;
	}

	/**
	 * @return Eaddress
	 */
	public function getUserAddress(): Eaddress {
		return $this->userAddress;
	}

	/**
	 * @param Eaddress $userAddress 
	 * @return self
	 */
	public function setUserAddress(Eaddress $userAddress): self {
		$this->userAddress = $userAddress;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getUserAcquisitions(): array {
		return $this->userAcquisitions;
	}
	
	/**
	 * @param  $userAcquisitions 
	 * @return self
	 */
	public function setUserAcquisitions(array $userAcquisitions): self {
		$this->userAcquisitions = $userAcquisitions;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getUserSales(): array {
		return $this->userSales;
	}
	
	/**
	 * @param  $userSales 
	 * @return self
	 */
	public function setUserSales(array $userSales): self {
		$this->userSales = $userSales;
		return $this;
	}

	public function getKeysValues() : array {
		$array = [];
		foreach ($this as $key=>$value){
			if(!is_array($value) & !is_object($value) & !is_null($value)){
			   $array[$key] = $value;
			}
		}
			return $array;

	}

	public function evaluatesKey() : string {
		
		$returningString = 'userId' . ' = \''.$this->getUserId().'\'';
		return $returningString;
	}
}
 


?>