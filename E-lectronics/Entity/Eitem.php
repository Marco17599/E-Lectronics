<?php
include_once "keyValues.php";
include_once "EArticolesTypology.php";
class Eitem implements keyValues{
    private string $itemId;
    private string $itemName;
	private string $itemDescription;
    private float $itemPrice;
	private bool $isSold;
	private EArticlesTypology $category;
    private Euser|null $seller;
    
    
    

    public function __construct(string $itemId, string $itemName, string $itemDescription,
	                            float $itemPrice,  bool $isSold,  $category,
                                Euser|null $seller  ) 
                                 {

        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        $this->itemDescription = $itemDescription;
        $this->seller = $seller;
	    $this->isSold = $isSold; 
		
        $this->category = $category;
                                   
    }

	/**
	 * @return string
	 */
	public function getItemId(): string {
		return $this->itemId;
	}
	
	/**
	 * @param string $itemId 
	*/
	public function setItemId(string $itemId) {
		$this->itemId = $itemId;
	}

	/**
	 * @return string
	 */
	public function getItemName(): string {
		return $this->itemName;
	}
	
	/**
	 * @param string $itemName 
	 */
	public function setItemName(string $itemName){
		$this->itemName = $itemName;
	}

	/**
	 * @return float
	 */
	public function getItemPrice(): float {
		return $this->itemPrice;
	}
	
	
	

	/**
	 * @return string
	 */
	public function getItemDescription(): string {
		return $this->itemDescription;
	}
	
	

	/**
	 * @return Euser
	 */
	public function getVenditore(): Euser {
		return $this->seller;
	}
	
	/**
	 * @param Euser $seller 
	 */
	public function setVenditore(Euser $seller) {
		$this->seller = $seller;
	}

	
	public function getCategory(): EArticlesTypology  {
		return $this->category;
	}
	
	/**
	 * @param EArticlesTypology $category 
	 */
	public function setCategory(EArticlesTypology $category) {
		$this->category = $category;
	}

	/**
	 * @return bool
	 */
	public function getIsSold(): bool {
		return $this->isSold;
	}
	
	/**
	 * @param bool $isSold 
	 */
	public function setIsSold(bool $isSold) {
		$this->isSold = $isSold;
	}

	public function getKeysValues() : array {
		$array = [];
		foreach ($this as $key=>$value){
			if($key =="category"){
				$value = $value->name;
			}
			if($key == "seller") {
				if($value != null){
				$value = $value->getUserId();
				}else $value = null;
			}
			if($key == "isSold") {
				if ($value == false) {
					$value = 0;
				}
			}
			if($value != null )
			{$array[$key] = $value;}
			
		}
			return $array;

	}

	public function evaluatesKey() : string {
		
		$returningString = 'itemId' . ' = '.$this->getItemId().'';
		return $returningString;
	}

}



?>