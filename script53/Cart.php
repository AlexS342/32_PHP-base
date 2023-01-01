<?php

class Cart
{
    private array $products = [];
    private float $fullPrice = 0.0;

    public function getProducts () : array
    {
        return $this->products;
    }
    public function getFullPrice () : float
    {
        return $this->fullPrice;
    }
    private function setFullPrice () : void
    {
        $this->fullPrice = 0.0;
        foreach ($this->products as $product)
        {
            $this->fullPrice += $product->getPrice();
        }
    }
    public function addProduct (Product $product) : void
    {
        $this->products[] = $product;
        $this->setFullPrice();
    }
    public function removeProduct (string $title) : void
    {
        foreach ($this->products as $key => $product)
        {
            if($product->getTitle() === $title) {
                array_splice($this->products, $key, 1);
                break;
            }
        }
        $this->setFullPrice();
    }
}