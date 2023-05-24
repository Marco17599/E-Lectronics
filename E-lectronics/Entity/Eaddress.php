<?php
include_once "keyValues.php";
class Eaddress implements keyValues{
    private int $addressId;
    private string $country;
    private string $city;
    private string $district;
    private string $street;
    private string $cap;
    private int $houseNumber;

    public function __construct(int $addressId, string $country, string $city, string $district,
                                string $street, string $cap, int $houseNumber) {
        $this->addressId = $addressId;
        $this->country = $country;
        $this->city = $city;
        $this->district = $district;
        $this->cap = $cap;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function getDistrict(): string {
        return $this->district;
    }
    public function getCap(): string {
        return $this->cap;
    }
    public function getStreet(): string {
        return $this->street;
    }
    public function getHouseNumber(): string {
        return $this->houseNumber;
    }
    public function getAddressId(): int {
		return $this->addressId;
	}
	

    public function getKeysValues() : array {
		$array = [];
		foreach ($this as $key=>$value){
			$array[$key] = $value;
			}
			return $array;

	}

	public function evaluatesKey() : string {
		
		$returningString = 'addressId' . ' = '.$this->getAddressId().'';
		return $returningString;
	}

	
	
	
}









?>