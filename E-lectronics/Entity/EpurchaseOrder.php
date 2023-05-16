<?php
class EpurchaseOrder {
    private array $items;
    private Euser $buyer;
    private float $totalPrice;
    private Eaddress $shippingAddres;
    private EcreditCard $paymentMethod;

    public function __construct(array $items, Euser $buyer, float $totalPrice,
                                Eaddress $shippingAddress, EcreditCard $paymentMethod) 
                                {
        $this->items = $items;
        $this->buyer = $buyer;
        $this->totalPrice = $totalPrice;
        $this->shippingAddres = $shippingAddress;
        $this->paymentMethod = $paymentMethod;          
     }



	/**
	 * @return Eitem[]
	 */
	public function getItems(): array {
		return $this->items;
	}
	
	/**
	 * @param Eitem[] $items 
	 */
	public function setItems(array $items) {
		$this->items = $items;
	}

	/**
	 * @return Euser
	 */
	public function getBuyer(): Euser {
		return $this->buyer;
	}
	
	/**
	 * @param Euser $buyer 
	 */
	public function setBuyer(Euser $buyer) {
		$this->buyer = $buyer;
	}

	/**
	 * @return float
	 */
	public function getTotalPrice(): float {
		return $this->totalPrice;
	}
	
	/**
	 * @param float $totalPrice 
	 */
	public function setTotalPrice(float $totalPrice) {
		$this->totalPrice = $totalPrice;
	}

	/**
	 * @return Eaddress
	 */
	public function getShippingAddres(): Eaddress {
		return $this->shippingAddres;
	}
	
	/**
	 * @param Eaddress $shippingAddres 
	 */
	public function setShippingAddres(Eaddress $shippingAddres) {
		$this->shippingAddres = $shippingAddres;
	}

	/**
	 * @return EcreditCard
	 */
	public function getPaymentMethod(): EcreditCard {
		return $this->paymentMethod;
	}
	
	/**
	 * @param EcreditCard $paymentMethod 
	 */
	public function setPaymentMethod(EcreditCard $paymentMethod) {
		$this->paymentMethod = $paymentMethod;
	}
}



?>