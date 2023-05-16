<?php


class Euser  {
    private string $userId;
    private string $name;
    private string $lastName;
    private string $username;
    private string $email;
    private string $password;
    private string $nTelefono;
    private string $dateOfBirth;
    private Eaddress $userAddress;
    private  array $userReviews;
    private  array $userAcquisitions;
    private  array $userSales;
    

 
    public function __construct(string $userId, string $name, string $lastName, string $username, string $email,
                                string $password, string $nTelefono, string $dateOfBirth,
                                Eaddress $userAddress, array $userReviews, array $userAcquisitions,
                                array $userSales)
                            {

        $this->userId = $userId;                                
        $this->name = $name;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->email= $email;
        $this->password = $password;
        $this->nTelefono = $nTelefono;
        $this->dateOfBirth = $dateOfBirth;
        $this->userAddress= $userAddress;
        $this->userReviews = $userReviews;
        $this->userAcquisitions = $userAcquisitions;
        $this->userSales = $userSales;
    

    }

    /**
	 * @return string
	 */
	public function getUserId(): string {
		return $this->userId;
	}
	
	/**
	 * @param string $userId 
	 */
	public function setUserId(string $userId) {
		$this->userId = $userId;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * @param string $name 
	 */
	public function setName(string $name){
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getLastName(): string {
		return $this->lastName;
	}
	
	/**
	 * @param string $lastName 
	 */
	public function setLastName(string $lastName){
		$this->lastName = $lastName;
	}

	/**
	 * @return string
	 */
	public function getUsername(): string {
		return $this->username;
	}
	
	/**
	 * @param string $username 
	 */
	public function setUsername(string $username){
		$this->username = $username;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}
	
	/**
	 * @param string $email 
	*/
	public function setEmail(string $email) {
		$this->email = $email;
    }

	/**
	 * @return string
	 */
	public function getPassword(): string {
		return $this->password;
	}
	
	/**
	 * @param string $password 
	*/
	public function setPassword(string $password) {
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	public function getNTelefono(): string {
		return $this->nTelefono;
	}
	
	/**
	 * @param string $nTelefono 
	 */
	public function setNTelefono(string $nTelefono) {
		$this->nTelefono = $nTelefono;
	}

	/**
	 * @return string
	 */
	public function getDateOfBirth(): string {
		return $this->dateOfBirth;
	}
	
	/**
	 * @param string $dateOfBirth 
	 */
	public function setDateOfBirth(string $dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;
	}

	/**
	 * @return Eaddress
	 */
	public function getUserAddress(): Eaddress {
		return $this->userAddress;
	}
	
	/**
	 * @param Eaddress $userAddress 
	 */
	public function setUserAddress(Eaddress $userAddress) {
		$this->userAddress = $userAddress;
	}

	/**
	 * @return Ereview[]
	 */
	public function getUserReviews(): array {
		return $this->userReviews;
	}
	
	/**
	 * @param Ereview[] $userReviews 
	 */
	public function setUserReviews(array $userReviews) {
		$this->userReviews = $userReviews;
	}

	/**
	 * @return Eitem[]
	 */
	public function getUserAcquisitions(): array {
		return $this->userAcquisitions;
	}
	
	/**
	 * @param Eitem[] $userAcquisitions 
	 */
	public function setUserAcquisitions(array $userAcquisitions) {
		$this->userAcquisitions = $userAcquisitions;
	}

	/**
	 * @return Eitem[]
	 */
	public function getUserSales(): array {
		return $this->userSales;
	}
	
	/**
	 * @param Eitem[] $userSales 
	 */
	public function setUserSales(array $userSales) {
		$this->userSales = $userSales;
	}

	/*public function getKeysValues():array {
		$array = [];
		foreach ($this as $key=>$value){
			$array[$key] = $value;
			}
			return $array;
	}*/

	
}
 


?>