<?php

class Eitem {
    private string $itemId;
    private string $itemName;
    private float $price;
    private string $description;
    private Euser $seller;
    private EArticlesTypology $category;
    private bool $isSold;
    

    public function __construct(string $itemId, string $itemName, float $price, 
                                string $description, Euser $seller,
                                 EArticlesTypology $category, bool $isSold) 
                                 {

        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->price = $price;
        $this->description = $description;
        $this->seller = $seller;
        $this->category = $category;
        $this->isSold = $isSold;                            
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
	public function getPrice(): float {
		return $this->price;
	}
	
	/**
	 * @param float $price 
	 */
	public function setPrice(float $price) {
		$this->price = $price;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}
	
	/**
	 * @param string $description 
	 */
	public function setDescription(string $description) {
		$this->description = $description;
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

	/**
	 * @return EArticlesTypology
	 */
	public function getCategory(): EArticlesTypology {
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
}



?>