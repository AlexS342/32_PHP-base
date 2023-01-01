<?php

class Product
{
    private string $title;
    private float $price;
    private ?array $components;

    public function __construct(string $title, float | array $i)
    {
        $this->title = $title;

        if(is_float($i)){
            $this->price = $i;
        }elseif(is_array($i)){
            $this->components = $i;
            $this->setPriceComponents();
        }
    }

    public function getTitle () : string
    {
        return $this->title;
    }
    public function getPrice () :float
    {
        return $this->price;
    }
    public function getComponents () : ?array
    {
        return $this->components;
    }
    private function getSumPriceComponents (array $arr) : float
    {
        $price = 0;
        foreach($arr as $product)
        {
            $price +=  $product->price;
        }
        return $price;
    }

    public function setTitle (string $title) : void
    {
        $this->title = $title;
    }
    public function setPrice (float $price) : void
    {
        $this->price = $price;
    }
    public function setPriceComponents () : void
    {
        $price = 0;
        foreach($this->components as $product)
        {
            $price +=  $product->price;
        }
        $this->price = $price;

    }
    public function addComponent (Product $product) : void
    {
        $this->components[] = $product;
        $this->setPriceComponents();
    }
    public function removeComponent (string $title) : void
    {
        foreach ($this->components as $key => $component)
        {
            if($component->title === $title) {
                array_splice($this->components, $key, 1);
                break;
            }
        }
        $this->setPriceComponents();
    }
}