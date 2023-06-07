<?php
include_once "keyValues.php";
require_once "../config/autoload.php";
class EpurchaseOrder implements keyValues{
	private int $purchaseOrderId;
	private float $totalPrice;
	private Euser $buyer;
	private EcreditCard $paymentMethod;
	private Eaddress $shippingAddress;
    private array $items;
    
    
    
    

    public function __construct(int $purchaseOrderId, float $totalPrice, Euser $buyer, 
	                            EcreditCard $paymentMethod, Eaddress $shippingAddress, array $items) 
                       		{
		$this->purchaseOrderId = $purchaseOrderId;
        $this->items = $items;
        $this->buyer = $buyer;
        $this->totalPrice = $totalPrice;
        $this->shippingAddress = $shippingAddress;
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
	public function getShippingAddress(): Eaddress {
		return $this->shippingAddress;
	}
	
	/**
	 * @param Eaddress $shippingAddress 
	 */
	public function setShippingAddres(Eaddress $shippingAddress) {
		$this->shippingAddress = $shippingAddress;
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

	/**
	 * @return 
	 */
	public function getPurchaseOrderId(): int {
		return $this->purchaseOrderId;
	}
	
	/**
	 * @param  $purchaseOrderId 
	 * @return self
	 */
	public function setPurchaseOrderId(int $purchaseOrderId): self {
		$this->purchaseOrderId = $purchaseOrderId;
		return $this;
	}

	public function addItem(Eitem $itemAdd){
       array_push($this->items, $itemAdd);
	}

    public function removeItem(Eitem $itemRemove){
		$key = array_search ($itemRemove, $this->items);
        unset($this->items[$key]);
     	$this->items=array_values($this->items);
	}

	public function getKeysValues() : array {
		$array = [];
		foreach ($this as $key=>$value){
			if(!is_array($value)){
				if($key == "buyer"){
					$key = "userId";
					$value = $value->getUserId();
				}if($key == "paymentMethod"){
					$key = "cardNumber";
					$value = $value->getCardNumber();
				}
				if($key == "shippingAddress"){
					$key = "addressId";
					$value = $value->getAddressId();
				}
			
				$array[$key] = $value;
			} 
		}
	    return $array;

	}

	public function evaluatesKey() : string {
		
		$returningString = 'purchaseOrderId' . ' = '.$this->getPurchaseOrderId().'';
		return $returningString;
	}
}
/*
$temp1 =new Eaddress(1, "a", "b","c","d","e",11);
$temp2 = new Euser(1,"marco","matt", "mamatt", "a@a.com", "aaaa", "33333333", "1999-05-17", null , [],[],[]);
$temp3 = new EcreditCard("11111111111111", "Marco", "Maa", "123", "2025-12-12");
$temp = new EpurchaseOrder(0,23.12,$temp2, $temp3, $temp1 , [] );
print_r ($temp->getKeysValues());

*/

?>