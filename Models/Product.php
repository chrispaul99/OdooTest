<?php
class Product
{
  private $name;
  private $reference;
  private $price;
  private $stock;

 
  public function __construct($name,$reference,$price,$stock)
  {
    $this->name = $name;
    $this->reference = $reference;
    $this->price = $price;
    $this->stock = $stock;
  }


}
?>